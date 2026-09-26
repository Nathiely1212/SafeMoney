<?php

declare(strict_types=1);

require_once __DIR__ . '/BcbPtaxService.php';
require_once __DIR__ . '/../domain/Quote.php';
require_once __DIR__ . '/../domain/TrackerModel.php';

final class TrackerService
{
    public function __construct(
        private readonly BcbPtaxService $bcbPtaxService
    ) {
    }

    /**
     * Busca as cotações de uma moeda e monta o TrackerModel.
     *
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public function getCurrencyTracker(
        string $currency,
        string $startDate,
        string $endDate
    ): TrackerModel {
        $rawQuotes = $this->bcbPtaxService->getCurrencyByPeriod(
            $currency,
            $startDate,
            $endDate
        );

        $quotes = array_map(
            fn (array $data): Quote => $this->createQuote($data),
            $rawQuotes
        );

        return new TrackerModel($quotes);
    }

    /**
     * Converte uma cotação bruta do Banco Central
     * em um objeto de domínio Quote.
     *
     * @param array{
     *     cotacaoCompra: float|int|string,
     *     cotacaoVenda: float|int|string,
     *     dataHoraCotacao: string
     * } $data
     */
    private function createQuote(array $data): Quote
    {
        if (
            !isset(
                $data['cotacaoCompra'],
                $data['cotacaoVenda'],
                $data['dataHoraCotacao']
            )
        ) {
            throw new InvalidArgumentException(
                'Dados de cotação incompletos.'
            );
        }

        $dateTime = $this->createDateTime(
            $data['dataHoraCotacao']
        );

        return new Quote(
            date: $dateTime->setTime(0, 0),
            buy: (float) $data['cotacaoCompra'],
            sell: (float) $data['cotacaoVenda'],
            dateTime: $dateTime
        );
    }

    /**
     * Converte a data/hora retornada pelo Banco Central
     * em um objeto DateTimeImmutable.
     */
    private function createDateTime(
        string $dateTime
    ): DateTimeImmutable {
        $parsedDateTime = DateTimeImmutable::createFromFormat(
            'Y-m-d H:i:s.u',
            $dateTime
        );

        $errors = DateTimeImmutable::getLastErrors();

        if ($parsedDateTime === false) {
            throw new InvalidArgumentException(
                'Data da cotação inválida.'
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
                'Data da cotação inválida.'
            );
        }

        return $parsedDateTime;
    }
}
