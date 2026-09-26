<?php

declare(strict_types=1);

require_once __DIR__ . '/tracker/controllers/TrackerController.php';
require_once __DIR__ . '/tracker/services/TrackerService.php';
require_once __DIR__ . '/tracker/services/BcbPtaxService.php';

$bcbPtaxService = new BcbPtaxService();

$trackerService = new TrackerService(
    $bcbPtaxService
);

$trackerController = new TrackerController(
    $trackerService
);

try {
    echo '<pre>';

    echo "===== USD =====\n";

    $usdResult = $trackerController->index(
        'USD',
        '2026-01-01',
        '2026-09-17'
    );

    printResult($usdResult);


    echo "\n\n===== EUR =====\n";

    $eurResult = $trackerController->index(
        'EUR',
        '2026-01-01',
        '2026-09-17'
    );

    printResult($eurResult);


    echo "\n\n===== MOEDA INVÁLIDA =====\n";

    $invalidResult = $trackerController->index(
        'ABC',
        '2026-01-01',
        '2026-09-17'
    );

    printResult($invalidResult);

    echo '</pre>';

} catch (Throwable $exception) {
    echo '<pre>';
    echo 'ERRO INESPERADO: ' . $exception->getMessage();
    echo '</pre>';
}


/**
 * Exibe o resultado do Controller.
 */
function printResult(array $result): void
{
    echo 'Success: ';
    var_dump($result['success']);

    echo "\n";

    if ($result['error'] !== null) {
        echo 'Erro: ' . $result['error'] . "\n";
        return;
    }

    $tracker = $result['data'];

    if ($tracker === null) {
        echo "Nenhum TrackerModel retornado.\n";
        return;
    }

    $quotes = $tracker->getQuotes();

    echo 'Quantidade: ' . count($quotes) . "\n";

    $firstQuote = $tracker->getFirstQuote();
    $lastQuote = $tracker->getLastQuote();

    echo "\nPrimeira cotação:\n";

    if ($firstQuote !== null) {
        echo 'Compra: ' . $firstQuote->getBuy() . "\n";
        echo 'Venda: ' . $firstQuote->getSell() . "\n";
        echo 'Data: ' . $firstQuote->getDateTime()->format(
            'Y-m-d H:i:s.u'
        ) . "\n";
    }

    echo "\nÚltima cotação:\n";

    if ($lastQuote !== null) {
        echo 'Compra: ' . $lastQuote->getBuy() . "\n";
        echo 'Venda: ' . $lastQuote->getSell() . "\n";
        echo 'Data: ' . $lastQuote->getDateTime()->format(
            'Y-m-d H:i:s.u'
        ) . "\n";
    }

    echo "\nVariação compra: ";
    var_dump($tracker->getBuyVariation());

    echo "Variação compra (%): ";
    var_dump($tracker->getBuyVariationPercentage());

    echo "\nVariação venda: ";
    var_dump($tracker->getSellVariation());

    echo "Variação venda (%): ";
    var_dump($tracker->getSellVariationPercentage());
}
