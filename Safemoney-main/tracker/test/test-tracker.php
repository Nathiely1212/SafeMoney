<?php

declare(strict_types=1);

require_once __DIR__ . '/../services/BcbPtaxService.php';
require_once __DIR__ . '/../services/TrackerService.php';
require_once __DIR__ . '/../domain/Dollar.php';
require_once __DIR__ . '/../domain/Quote.php';
require_once __DIR__ . '/../domain/TrackerModel.php';

try {
    $bcbPtaxService = new BcbPtaxService();
    $dollar = new Dollar();

    $trackerService = new TrackerService(
        $bcbPtaxService,
        $dollar
    );

    $tracker = $trackerService->getDollarTracker(
        '2026-09-01',
        '2026-09-12'
    );

    echo "=== TESTE DO TRACKER ===" . PHP_EOL . PHP_EOL;

    echo "Quantidade de cotações: "
        . count($tracker->getQuotes())
        . PHP_EOL . PHP_EOL;

    $firstQuote = $tracker->getFirstQuote();
    $lastQuote = $tracker->getLastQuote();

    if ($firstQuote !== null) {
        echo "Primeira cotação:" . PHP_EOL;

        echo "Data: "
            . $firstQuote->getDate()->format('Y-m-d')
            . PHP_EOL;

        echo "Compra: "
            . $firstQuote->getBuy()
            . PHP_EOL;

        echo "Venda: "
            . $firstQuote->getSell()
            . PHP_EOL;

        echo "Data/hora: "
            . $firstQuote->getDateTime()->format('Y-m-d H:i:s')
            . PHP_EOL . PHP_EOL;
    }

    if ($lastQuote !== null) {
        echo "Última cotação:" . PHP_EOL;

        echo "Data: "
            . $lastQuote->getDate()->format('Y-m-d')
            . PHP_EOL;

        echo "Compra: "
            . $lastQuote->getBuy()
            . PHP_EOL;

        echo "Venda: "
            . $lastQuote->getSell()
            . PHP_EOL;

        echo "Data/hora: "
            . $lastQuote->getDateTime()->format('Y-m-d H:i:s')
            . PHP_EOL . PHP_EOL;
    }

    echo "=== ANÁLISES ===" . PHP_EOL . PHP_EOL;

    echo "Menor compra: "
        . $tracker->getMinimumBuy()
        . PHP_EOL;

    echo "Maior compra: "
        . $tracker->getMaximumBuy()
        . PHP_EOL;

    echo "Menor venda: "
        . $tracker->getMinimumSell()
        . PHP_EOL;

    echo "Maior venda: "
        . $tracker->getMaximumSell()
        . PHP_EOL;

    echo "Variação da compra: "
        . $tracker->getBuyVariation()
        . PHP_EOL;

    echo "Variação percentual da compra: "
        . $tracker->getBuyVariationPercentage()
        . '%'
        . PHP_EOL;

    echo "Variação da venda: "
        . $tracker->getSellVariation()
        . PHP_EOL;

    echo "Variação percentual da venda: "
        . $tracker->getSellVariationPercentage()
        . '%'
        . PHP_EOL;

    echo PHP_EOL . "=== TESTE CONCLUÍDO ===" . PHP_EOL;

} catch (Throwable $exception) {
    echo "=== ERRO ===" . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
}
