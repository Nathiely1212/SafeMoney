<?php

declare(strict_types=1);

require_once __DIR__ . '/tracker/services/BcbPtaxService.php';

$bcb = new BcbPtaxService();

try {
    echo '<pre>';

    echo "===== USD =====\n";

    $usdQuotes = $bcb->getCurrencyByPeriod(
        'USD',
        '2026-01-01',
        '2026-09-17'
    );

    echo 'Quantidade: ' . count($usdQuotes) . "\n\n";

    print_r($usdQuotes[0] ?? null);
    print_r($usdQuotes[array_key_last($usdQuotes)] ?? null);


    echo "\n\n===== EUR =====\n";

    $eurQuotes = $bcb->getCurrencyByPeriod(
        'EUR',
        '2026-01-01',
        '2026-09-17'
    );

    echo 'Quantidade: ' . count($eurQuotes) . "\n\n";

    print_r($eurQuotes[0] ?? null);
    print_r($eurQuotes[array_key_last($eurQuotes)] ?? null);

    echo '</pre>';

} catch (Throwable $exception) {
    echo '<pre>';
    echo 'ERRO: ' . $exception->getMessage();
    echo '</pre>';
}
