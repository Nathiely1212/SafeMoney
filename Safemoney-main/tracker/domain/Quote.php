<?php

declare(strict_types=1);

final class Quote
{
    public function __construct(
        private readonly DateTimeImmutable $date,
        private readonly float $buy,
        private readonly float $sell,
        private readonly DateTimeImmutable $dateTime
    ) {
        if ($this->buy < 0) {
            throw new InvalidArgumentException(
                'O valor de compra não pode ser negativo.'
            );
        }

        if ($this->sell < 0) {
            throw new InvalidArgumentException(
                'O valor de venda não pode ser negativo.'
            );
        }
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    public function getBuy(): float
    {
        return $this->buy;
    }

    public function getSell(): float
    {
        return $this->sell;
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }
}
