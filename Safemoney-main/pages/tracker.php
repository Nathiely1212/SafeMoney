<?php

declare(strict_types=1);

require_once __DIR__ . '/../tracker/controllers/TrackerController.php';
require_once __DIR__ . '/../tracker/services/TrackerService.php';
require_once __DIR__ . '/../tracker/services/BcbPtaxService.php';

$currency = $_GET['currency'] ?? null;
$startDate = $_GET['startDate'] ?? null;
$endDate = $_GET['endDate'] ?? null;

$trackerController = new TrackerController(
    new TrackerService(
        new BcbPtaxService()
    )
);

$result = $trackerController->index(
    $currency,
    $startDate,
    $endDate
);

$availableCurrencies = $trackerController->getAvailableCurrencies();

$currencyMetadata = [
    'USD' => [
        'name' => 'Dólar americano',
        'symbol' => 'US$',
    ],
    'EUR' => [
        'name' => 'Euro',
        'symbol' => '€',
    ],
];

$trackerData = [];
$trackerSummary = null;
$pageState = 'initial';
$pageMessage = null;

if (!$result['success']) {
    $pageState = 'error';
    $pageMessage = $result['error'];
} elseif ($result['data'] !== null) {
    $tracker = $result['data'];

    foreach ($tracker->getQuotes() as $quote) {
        $trackerData[] = [
            'date' => $quote->getDate()->format('Y-m-d'),
            'buy' => $quote->getBuy(),
            'sell' => $quote->getSell(),
            'dateTime' => $quote->getDateTime()->format('Y-m-d H:i:s'),
        ];
    }

    if ($trackerData === []) {
        $pageState = 'empty';
    } else {
        $pageState = 'success';

        $lastQuote = $tracker->getLastQuote();

        $trackerSummary = [
            'currentBuy' => $lastQuote?->getBuy(),
            'currentSell' => $lastQuote?->getSell(),
            'minimumBuy' => $tracker->getMinimumBuy(),
            'maximumBuy' => $tracker->getMaximumBuy(),
            'minimumSell' => $tracker->getMinimumSell(),
            'maximumSell' => $tracker->getMaximumSell(),
            'buyVariation' => $tracker->getBuyVariation(),
            'sellVariation' => $tracker->getSellVariation(),
            'buyVariationPercentage' => $tracker->getBuyVariationPercentage(),
            'sellVariationPercentage' => $tracker->getSellVariationPercentage(),
        ];
    }
}

$selectedCurrency = strtoupper(
    $currency ?? 'USD'
);

$selectedCurrencyMetadata =
    $currencyMetadata[$selectedCurrency]
    ?? $currencyMetadata['USD'];

$currencySymbol = $selectedCurrencyMetadata['symbol'];

$currencyJson = json_encode(
    [
        'code' => $selectedCurrency,
        'name' => $selectedCurrencyMetadata['name'],
        'symbol' => $selectedCurrencyMetadata['symbol'],
    ],
    JSON_THROW_ON_ERROR
);

    $trackerJson = json_encode(
        $trackerData,
        JSON_THROW_ON_ERROR
    );

$basePath = '../';
$activePage = 'tracker';
$pageTitle = 'InvestmentTracker';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="InvestmentTracker da SafeMoney."
    >

    <title>InvestmentTracker - SafeMoney</title>

    <link
        rel="stylesheet"
        href="../css/global.css"
    >

    <link
        rel="stylesheet"
        href="../css/tracker.css"
    >

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script
        src="../js/global.js"
        defer
    ></script>

    <script
        src="../js/tracker.js"
        defer
    ></script>

</head>

<body>

<?php include __DIR__ . '/../components/header.php'; ?>

<main class="tracker-page">

    <!-- =====================================================
         Hero
         ===================================================== -->

    <section class="tracker-page__hero">

        <div class="container tracker-page__content">

            <span class="eyebrow">
                Ferramenta SafeMoney
            </span>

            <h1 class="display-title">
                InvestmentTracker
            </h1>

            <p class="section-text">
                Uma ferramenta para acompanhar informações sobre
                ativos financeiros de forma simples, visual e organizada.
            </p>

        </div>

    </section>


    <!-- =====================================================
         Conteúdo principal
         ===================================================== -->

    <section class="section">

        <div class="container">


            <!-- =================================================
                 Filtro de período
                 ================================================= -->

            <div class="tracker-filter">

                <div class="tracker-filter__header">

                    <span class="tracker-filter__eyebrow">
                        Período da análise
                    </span>

                    <h2 class="tracker-filter__title">
                        Escolha o período que deseja analisar
                    </h2>

                    <p class="tracker-filter__description">
                        Consulte as cotações da moeda dentro de um
                        intervalo específico.
                    </p>

                </div>


                <!-- Atalhos rápidos -->

                <div class="tracker-filter__quick">

                    <span class="tracker-filter__quick-label">
                        Período rápido
                    </span>

                    <div class="tracker-filter__quick-options">

                        <button
                            type="button"
                            class="tracker-filter__quick-button"
                            data-period="7"
                        >
                            7 dias
                        </button>

                        <button
                            type="button"
                            class="tracker-filter__quick-button"
                            data-period="15"
                        >
                            15 dias
                        </button>

                        <button
                            type="button"
                            class="tracker-filter__quick-button"
                            data-period="30"
                        >
                            1 mês
                        </button>

                        <button
                            type="button"
                            class="tracker-filter__quick-button"
                            data-period="180"
                        >
                            6 meses
                        </button>

                        <button
                            type="button"
                            class="tracker-filter__quick-button"
                            data-period="365"
                        >
                            1 ano
                        </button>

                    </div>

                </div>


                <!-- Formulário -->

                <form
                    class="tracker-filter__form"
                    method="GET"
                    action=""
                >

                    <div class="tracker-filter__fields">

                        <!-- Moeda -->

                        <div class="tracker-filter__field">

                            <label for="currency">
                                Moeda
                            </label>

                            <select
                                id="currency"
                                name="currency"
                                required
                            >

                                <?php foreach ($availableCurrencies as $code => $name): ?>

                                    <option
                                        value="<?= htmlspecialchars($code) ?>"
                                        <?= strtoupper((string) $currency) === $code
                                            ? 'selected'
                                            : '' ?>
                                    >
                                        <?= htmlspecialchars($name) ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>


                        <!-- Data inicial -->

                        <div class="tracker-filter__field">

                            <label for="startDate">
                                Data inicial
                            </label>

                            <input
                                type="date"
                                id="startDate"
                                name="startDate"
                                value="<?= htmlspecialchars(
                                    $startDate ?? ''
                                ) ?>"
                                required
                            >

                        </div>


                        <!-- Data final -->

                        <div class="tracker-filter__field">

                            <label for="endDate">
                                Data final
                            </label>

                            <input
                                type="date"
                                id="endDate"
                                name="endDate"
                                value="<?= htmlspecialchars(
                                    $endDate ?? ''
                                ) ?>"
                                required
                            >

                        </div>


                        <!-- Botão -->

                        <button
                            type="submit"
                            class="tracker-filter__button"
                        >
                            Atualizar dados
                        </button>

                    </div>

                </form>

            </div>


            <!-- =================================================
                 Estado inicial
                 ================================================= -->

            <?php if ($pageState === 'initial'): ?>

                <div class="tracker-state">

                    <div class="tracker-state__icon">

                        <span class="material-symbols-outlined">
                            monitoring
                        </span>

                    </div>

                    <h2 class="tracker-state__title">
                        Acompanhe uma cotação
                    </h2>

                    <p class="tracker-state__description">
                        Escolha um período acima para visualizar as
                        cotações, comparar valores e acompanhar suas
                        variações.
                    </p>

                </div>

            <?php endif; ?>


            <!-- =================================================
                 Estado de erro
                 ================================================= -->

            <?php if ($pageState === 'error'): ?>

                <div class="tracker-state tracker-state--error">

                    <div class="tracker-state__icon">

                        <span class="material-symbols-outlined">
                            error
                        </span>

                    </div>

                    <h2 class="tracker-state__title">
                        Não foi possível consultar as cotações
                    </h2>

                    <p class="tracker-state__description">
                        <?= htmlspecialchars(
                            $pageMessage
                            ?? 'Ocorreu um erro ao consultar os dados.'
                        ) ?>
                    </p>

                    <button
                        type="button"
                        class="tracker-state__button"
                        id="tracker-retry"
                    >
                        Tentar novamente
                    </button>

                </div>

            <?php endif; ?>


            <!-- =================================================
                 Estado vazio
                 ================================================= -->

            <?php if ($pageState === 'empty'): ?>

                <div class="tracker-state">

                    <div class="tracker-state__icon">

                        <span class="material-symbols-outlined">
                            search_off
                        </span>

                    </div>

                    <h2 class="tracker-state__title">
                        Nenhuma cotação encontrada
                    </h2>

                    <p class="tracker-state__description">
                        Não encontramos cotações disponíveis para o
                        período selecionado.
                    </p>

                    <p class="tracker-state__hint">
                        Tente selecionar outro intervalo de datas.
                    </p>

                </div>

            <?php endif; ?>


            <!-- =================================================
                 Dados encontrados
                 ================================================= -->

            <?php if (
                $pageState === 'success'
                && $trackerSummary !== null
            ): ?>

                <div class="tracker-summary">


                    <!-- Cotação atual -->

                    <article class="tracker-summary__card">

                        <span class="tracker-summary__label">
                            Cotação atual
                        </span>

                        <strong class="tracker-summary__value">

                            <?= htmlspecialchars($currencySymbol) ?>
                            <?= number_format(
                                $trackerSummary['currentBuy'],
                                4,
                                ',',
                                '.'
                            ) ?>

                        </strong>

                        <span class="tracker-summary__description">
                            Compra
                        </span>

                    </article>


                    <!-- Maior cotação -->

                    <article class="tracker-summary__card">

                        <span class="tracker-summary__label">
                            Maior cotação
                        </span>

                        <strong class="tracker-summary__value">

                            <?= htmlspecialchars($currencySymbol) ?>
                            <?= number_format(
                                $trackerSummary['maximumBuy'],
                                4,
                                ',',
                                '.'
                            ) ?>

                        </strong>

                        <span class="tracker-summary__description">
                            Compra
                        </span>

                    </article>


                    <!-- Menor cotação -->

                    <article class="tracker-summary__card">

                        <span class="tracker-summary__label">
                            Menor cotação
                        </span>

                        <strong class="tracker-summary__value">

                            <?= htmlspecialchars($currencySymbol) ?>
                            <?= number_format(
                                $trackerSummary['minimumBuy'],
                                4,
                                ',',
                                '.'
                            ) ?>

                        </strong>

                        <span class="tracker-summary__description">
                            Compra
                        </span>

                    </article>


                    <!-- Variação -->

                    <article
                        class="tracker-summary__card tracker-summary__card--variation"
                    >

                        <span class="tracker-summary__label">
                            Variação
                        </span>

                        <strong
                            class="tracker-summary__value"
                            data-variation="<?= htmlspecialchars(
                                (string) $trackerSummary['buyVariationPercentage']
                            ) ?>"
                        >

                            <span
                                class="tracker-summary__variation-icon"
                                aria-hidden="true"
                            ></span>

                            <span class="tracker-summary__variation-value">
                                <?= number_format(
                                    $trackerSummary['buyVariationPercentage'],
                                    2,
                                    ',',
                                    '.'
                                ) ?>%
                            </span>

                        </strong>

                        <span class="tracker-summary__description">
                            No período selecionado
                        </span>

                    </article>

                </div>


                <!-- =================================================
                     Gráfico
                     ================================================= -->

                <div class="tracker-page__card">

                    <div class="tracker-chart">

                        <canvas id="tracker-chart"></canvas>

                    </div>


                    <!-- Informações sobre as cotações -->

                    <div class="tracker-chart__info">

                        <div class="tracker-chart__info-item">

                            <span class="tracker-chart__info-icon">

                                <span class="material-symbols-outlined">
                                    shopping_cart
                                </span>

                            </span>

                            <div>

                                <strong>
                                    Compra
                                </strong>

                                <p>
                                    Valor de referência para a compra
                                    da moeda.
                                </p>

                            </div>

                        </div>


                        <div class="tracker-chart__info-item">

                            <span class="tracker-chart__info-icon">

                                <span class="material-symbols-outlined">
                                    sell
                                </span>

                            </span>

                            <div>

                                <strong>
                                    Venda
                                </strong>

                                <p>
                                    Valor de referência para a venda
                                    da moeda.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php include __DIR__ . '/../components/footer.php'; ?>


<!-- =========================================================
     Dados para o JavaScript
     ========================================================= -->

<script
    id="tracker-data"
    type="application/json"
>
    <?= $trackerJson ?>
</script>

<script
    id="tracker-currency"
    type="application/json"
>
    <?= $currencyJson ?>
</script>

</body>
</html>
