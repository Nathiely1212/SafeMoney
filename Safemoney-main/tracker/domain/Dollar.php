<?php

declare(strict_types=1);

require_once __DIR__ . '/Quote.php';

final class Dollar
{
    /**
     * Converte uma cotação retornada pelo Banco Central
     * em um objeto de domínio Quote.
     *
     * @param array{
     *     cotacaoCompra: float|int|string,
     *     cotacaoVenda: float|int|string,
     *     dataHoraCotacao: string
     * } $data
     */
    public function createQuote(array $data): Quote
    {
        if (
            !isset(
                $data['cotacaoCompra'],
                $data['cotacaoVenda'],
                $data['dataHoraCotacao']
            )
        ) {
            throw new InvalidArgumentException(
                'Dados de cotação do dólar incompletos.'
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

    private function createDateTime(string $dateTime): DateTimeImmutable
    {
        $parsedDateTime = DateTimeImmutable::createFromFormat(
            'Y-m-d H:i:s.u',
            $dateTime
        );

        $errors = DateTimeImmutable::getLastErrors();

        if ($parsedDateTime === false) {
            throw new InvalidArgumentException(
                'Data da cotação do dólar inválida.'
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
                'Data da cotação do dólar inválida.'
            );
        }

        return $parsedDateTime;
    }
}
