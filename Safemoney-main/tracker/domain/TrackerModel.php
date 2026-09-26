<?php

declare(strict_types=1);

require_once __DIR__ . '/Quote.php';

final class TrackerModel
{
    /**
     * @var Quote[]
     */
    private array $quotes;

    /**
     * @param Quote[] $quotes
     */
    public function __construct(array $quotes)
    {
        foreach ($quotes as $quote) {
            if (!$quote instanceof Quote) {
                throw new InvalidArgumentException(
                    'O TrackerModel aceita apenas objetos Quote.'
                );
            }
        }

        $this->quotes = $quotes;
    }

    /**
     * @return Quote[]
     */
    public function getQuotes(): array
    {
        return $this->quotes;
    }

    public function getFirstQuote(): ?Quote
    {
        return $this->quotes[0] ?? null;
    }

    public function getLastQuote(): ?Quote
    {
        if ($this->quotes === []) {
            return null;
        }

        return $this->quotes[array_key_last($this->quotes)];
    }

    public function getMinimumBuy(): ?float
    {
        if ($this->quotes === []) {
            return null;
        }

        return min(
            ...array_map(
                fn (Quote $quote): float => $quote->getBuy(),
                $this->quotes
            )
        );
    }

    public function getMaximumBuy(): ?float
    {
        if ($this->quotes === []) {
            return null;
        }

        return max(
            ...array_map(
                fn (Quote $quote): float => $quote->getBuy(),
                $this->quotes
            )
        );
    }

    public function getMinimumSell(): ?float
    {
        if ($this->quotes === []) {
            return null;
        }

        return min(
            ...array_map(
                fn (Quote $quote): float => $quote->getSell(),
                $this->quotes
            )
        );
    }

    public function getMaximumSell(): ?float
    {
        if ($this->quotes === []) {
            return null;
        }

        return max(
            ...array_map(
                fn (Quote $quote): float => $quote->getSell(),
                $this->quotes
            )
        );
    }

    public function getBuyVariation(): ?float
    {
        $firstQuote = $this->getFirstQuote();
        $lastQuote = $this->getLastQuote();

        if ($firstQuote === null || $lastQuote === null) {
            return null;
        }

        return $lastQuote->getBuy() - $firstQuote->getBuy();
    }

    public function getSellVariation(): ?float
    {
        $firstQuote = $this->getFirstQuote();
        $lastQuote = $this->getLastQuote();

        if ($firstQuote === null || $lastQuote === null) {
            return null;
        }

        return $lastQuote->getSell() - $firstQuote->getSell();
    }

    public function getBuyVariationPercentage(): ?float
    {
        $firstQuote = $this->getFirstQuote();
        $variation = $this->getBuyVariation();

        if ($firstQuote === null || $variation === null) {
            return null;
        }

        if ($firstQuote->getBuy() === 0.0) {
            return null;
        }

        return ($variation / $firstQuote->getBuy()) * 100;
    }

    public function getSellVariationPercentage(): ?float
    {
        $firstQuote = $this->getFirstQuote();
        $variation = $this->getSellVariation();

        if ($firstQuote === null || $variation === null) {
            return null;
        }

        if ($firstQuote->getSell() === 0.0) {
            return null;
        }

        return ($variation / $firstQuote->getSell()) * 100;
    }
}
