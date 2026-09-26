<?php

declare(strict_types=1);

require_once __DIR__ . '/../services/TrackerService.php';
require_once __DIR__ . '/../domain/TrackerModel.php';

final class TrackerController
{
    /**
     * Moedas atualmente disponíveis no InvestmentTracker.
     *
     * @var array<string, string>
     */
    private const AVAILABLE_CURRENCIES = [
        'USD' => 'Dólar americano',
        'EUR' => 'Euro',
    ];

    public function __construct(
        private readonly TrackerService $trackerService
    ) {
    }

    /**
     * Processa uma consulta do InvestmentTracker.
     *
     * @return array{
     *     success: bool,
     *     data: ?TrackerModel,
     *     error: ?string
     * }
     */
    public function index(
        ?string $currency,
        ?string $startDate,
        ?string $endDate
    ): array {
        if (
            $currency === null
            || $startDate === null
            || $endDate === null
        ) {
            return [
                'success' => true,
                'data' => null,
                'error' => null,
            ];
        }

        try {
            $currency = $this->validateCurrency($currency);

            $this->validateDateRange(
                $startDate,
                $endDate
            );

            $tracker = $this->trackerService->getCurrencyTracker(
                $currency,
                $startDate,
                $endDate
            );

            return [
                'success' => true,
                'data' => $tracker,
                'error' => null,
            ];
        } catch (InvalidArgumentException $exception) {
            return [
                'success' => false,
                'data' => null,
                'error' => $exception->getMessage(),
            ];
        } catch (RuntimeException $exception) {
            return [
                'success' => false,
                'data' => null,
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     * Valida e normaliza a moeda solicitada.
     */
    private function validateCurrency(
        string $currency
    ): string {
        $currency = strtoupper(trim($currency));

        if (!array_key_exists(
            $currency,
            self::AVAILABLE_CURRENCIES
        )) {
            throw new InvalidArgumentException(
                'A moeda selecionada não está disponível.'
            );
        }

        return $currency;
    }

    /**
     * Valida o intervalo de datas.
     */
    private function validateDateRange(
        string $startDate,
        string $endDate
    ): void {
        $start = $this->createDate($startDate);
        $end = $this->createDate($endDate);

        if ($start > $end) {
            throw new InvalidArgumentException(
                'A data inicial não pode ser posterior à data final.'
            );
        }
    }

    /**
     * Cria uma data a partir do formato Y-m-d.
     */
    private function createDate(
        string $date
    ): DateTimeImmutable {
        $parsedDate = DateTimeImmutable::createFromFormat(
            '!Y-m-d',
            $date
        );

        $errors = DateTimeImmutable::getLastErrors();

        if ($parsedDate === false) {
            throw new InvalidArgumentException(
                'Data inválida.'
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
                'Data inválida.'
            );
        }

        if ($parsedDate->format('Y-m-d') !== $date) {
            throw new InvalidArgumentException(
                'Data inválida.'
            );
        }

        return $parsedDate;
    }

    /**
     * Retorna as moedas disponíveis para a aplicação.
     *
     * @return array<string, string>
     */
    public function getAvailableCurrencies(): array
    {
        return self::AVAILABLE_CURRENCIES;
    }
}
