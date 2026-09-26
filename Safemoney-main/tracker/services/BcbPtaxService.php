<?php

declare(strict_types=1);

final class BcbPtaxService
{
    private const BASE_URL =
        'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/';

    private const PAGE_SIZE = 100;

    /**
     * Busca as cotações de uma moeda no período informado.
     *
     * As datas recebidas pela aplicação devem estar no formato Y-m-d.
     *
     * @return array<int, array{
     *     cotacaoCompra: float|int|string,
     *     cotacaoVenda: float|int|string,
     *     dataHoraCotacao: string
     * }>
     */
    public function getCurrencyByPeriod(
        string $currency,
        string $startDate,
        string $endDate
    ): array {
        $currency = $this->normalizeCurrency($currency);

        $url = $this->buildUrl(
            $currency,
            $startDate,
            $endDate
        );

        return $this->requestAllPages($url);
    }

    /**
     * Monta a URL da consulta ao Banco Central.
     */
    private function buildUrl(
    string $currency,
    string $startDate,
    string $endDate
): string {
    $bcbStartDate = $this->convertDateToBcbFormat($startDate);
    $bcbEndDate = $this->convertDateToBcbFormat($endDate);

    $query = http_build_query([
        '@moeda' => "'{$currency}'",
        '@dataInicial' => "'{$bcbStartDate}'",
        '@dataFinalCotacao' => "'{$bcbEndDate}'",
        '$top' => self::PAGE_SIZE,
        '$format' => 'json',
        '$select' => 'cotacaoCompra,cotacaoVenda,dataHoraCotacao',
    ]);

    return self::BASE_URL
        . 'CotacaoMoedaPeriodo('
        . 'moeda=@moeda,'
        . 'dataInicial=@dataInicial,'
        . 'dataFinalCotacao=@dataFinalCotacao'
        . ')?'
        . $query;
}

    /**
     * Busca todas as páginas disponíveis da API.
     *
     * @return array<int, array{
     *     cotacaoCompra: float|int|string,
     *     cotacaoVenda: float|int|string,
     *     dataHoraCotacao: string
     * }>
     */
    private function requestAllPages(string $baseUrl): array
    {
        $allQuotes = [];
        $skip = 0;

        do {
            $url = $baseUrl . '&$skip=' . $skip;

            $response = $this->request($url);
            $quotes = $this->decodeResponse($response);

            $allQuotes = array_merge(
                $allQuotes,
                $quotes
            );

            $receivedCount = count($quotes);

            $skip += $receivedCount;

        } while ($receivedCount === self::PAGE_SIZE);

        return $allQuotes;
    }

    /**
     * Normaliza o código da moeda.
     */
    private function normalizeCurrency(string $currency): string
    {
        $currency = strtoupper(trim($currency));

        if (
            $currency === ''
            || !preg_match('/^[A-Z]{3}$/', $currency)
        ) {
            throw new InvalidArgumentException(
                'Código de moeda inválido.'
            );
        }

        return $currency;
    }

    /**
     * Converte Y-m-d para o formato utilizado pelo BCB.
     */
    private function convertDateToBcbFormat(string $date): string
    {
        $parsedDate = DateTimeImmutable::createFromFormat(
            '!Y-m-d',
            $date
        );

        $errors = DateTimeImmutable::getLastErrors();

        if ($parsedDate === false) {
            throw new InvalidArgumentException(
                'Data inválida para consulta ao Banco Central.'
            );
        }

        if (
            is_array($errors)
            && (
                $errors['warning_count'] > 0
                || $errors['error_count'] > 0
            )
        ) {
            throw new InvalidArgumentException(
                'Data inválida para consulta ao Banco Central.'
            );
        }

        if ($parsedDate->format('Y-m-d') !== $date) {
            throw new InvalidArgumentException(
                'Data inválida para consulta ao Banco Central.'
            );
        }

        return $parsedDate->format('m-d-Y');
    }

    /**
     * Executa uma requisição HTTP.
     */
    private function request(string $url): string
    {
        $curl = curl_init($url);

        if ($curl === false) {
            throw new RuntimeException(
                'Não foi possível inicializar a requisição para o Banco Central.'
            );
        }

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);

            curl_close($curl);

            throw new RuntimeException(
                'Erro ao consultar o Banco Central: ' . $error
            );
        }

        $httpStatus = curl_getinfo(
            $curl,
            CURLINFO_HTTP_CODE
        );

        curl_close($curl);

        if ($httpStatus < 200 || $httpStatus >= 300) {
            throw new RuntimeException(
                "O Banco Central retornou o status HTTP {$httpStatus}."
            );
        }

        return $response;
    }

    /**
     * Decodifica e valida a resposta JSON.
     *
     * @return array<int, array{
     *     cotacaoCompra: float|int|string,
     *     cotacaoVenda: float|int|string,
     *     dataHoraCotacao: string
     * }>
     */
    private function decodeResponse(string $response): array
    {
        try {
            $data = json_decode(
                $response,
                true,
                512,
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $exception) {
            throw new RuntimeException(
                'A resposta do Banco Central possui um JSON inválido.',
                0,
                $exception
            );
        }

        if (
            !isset($data['value'])
            || !is_array($data['value'])
        ) {
            throw new RuntimeException(
                'A resposta do Banco Central não possui dados de cotação válidos.'
            );
        }

        return $data['value'];
    }
}
