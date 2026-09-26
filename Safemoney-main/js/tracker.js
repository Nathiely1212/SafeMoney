document.addEventListener('DOMContentLoaded', () => {
    initializeChart();
    initializeQuickPeriods();
    initializeRetry();
});


/* =========================================================
   Gráfico
   ========================================================= */

function initializeChart() {
    const dataElement = document.getElementById('tracker-data');
    const chartElement = document.getElementById('tracker-chart');
    const currencyElement = document.getElementById('tracker-currency');

    if (
        !dataElement
        || !chartElement
        || !currencyElement
    ) {
        return;
    }

    const trackerData = parseTrackerData(dataElement);
    const currency = parseCurrencyData(currencyElement);

    if (
        trackerData.length === 0
        || currency === null
    ) {
        return;
    }

    const labels = trackerData.map((quote) => {
        return formatDate(quote.date);
    });

    const buyValues = trackerData.map((quote) => {
        return quote.buy;
    });

    const sellValues = trackerData.map((quote) => {
        return quote.sell;
    });

    createChart(
        chartElement,
        labels,
        buyValues,
        sellValues,
        currency
    );
}


/* =========================================================
   Leitura dos dados
   ========================================================= */

function parseTrackerData(dataElement) {
    try {
        const data = JSON.parse(
            dataElement.textContent
        );

        if (!Array.isArray(data)) {
            return [];
        }

        return data;
    } catch (error) {
        console.error(
            'Não foi possível interpretar os dados do InvestmentTracker.',
            error
        );

        return [];
    }
}

function parseCurrencyData(dataElement) {
    if (!dataElement) {
        return null;
    }

    try {
        const data = JSON.parse(
            dataElement.textContent
        );

        if (
            !data
            || typeof data !== 'object'
            || typeof data.code !== 'string'
            || typeof data.name !== 'string'
            || typeof data.symbol !== 'string'
        ) {
            return null;
        }

        return data;
    } catch (error) {
        console.error(
            'Não foi possível interpretar os dados da moeda.',
            error
        );

        return null;
    }
}


/* =========================================================
   Criação do gráfico
   ========================================================= */

function createChart(
    chartElement,
    labels,
    buyValues,
    sellValues,
    currency
) {
    new Chart(chartElement, {
        type: 'line',

        data: {
            labels,

            datasets: [
                {
                    label: 'Compra',
                    data: buyValues,

                    borderColor: '#1a2b4c',
                    backgroundColor: 'rgba(26, 43, 76, 0.08)',

                    tension: 0.3,

                    borderWidth: 2,

                    pointRadius: 3,
                    pointHoverRadius: 5,

                    pointBackgroundColor: '#1a2b4c',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,

                    fill: false
                },

                {
                    label: 'Venda',
                    data: sellValues,

                    borderColor: '#d4af37',
                    backgroundColor: 'rgba(212, 175, 55, 0.08)',

                    tension: 0.3,

                    borderWidth: 2,

                    pointRadius: 3,
                    pointHoverRadius: 5,

                    pointBackgroundColor: '#d4af37',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,

                    fill: false
                }
            ]
        },

        options: {
            responsive: true,

            maintainAspectRatio: false,

            interaction: {
                mode: 'index',
                intersect: false
            },

            plugins: {
                legend: {
                    display: true,

                    position: 'top',

                    labels: {
                        usePointStyle: true,

                        padding: 20,

                        font: {
                            size: 13,
                            weight: '600'
                        }
                    }
                },

                tooltip: {
                    callbacks: {
                        title: (tooltipItems) => {
                            if (tooltipItems.length === 0) {
                                return '';
                            }

                            return tooltipItems[0].label;
                        },

                        label: (context) => {
                            const value = context.parsed.y;

                            return `${context.dataset.label}: ${
                                formatCurrency(
                                    value,
                                    currency.symbol
                                )
                            }`;
                        }
                    }
                }
            },

            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Data'
                    },

                    grid: {
                        display: false
                    }
                },

                y: {
                    title: {
                        display: true,
                        text: `Cotação (${currency.symbol})`
                    },

                    ticks: {
                        callback: (value) => {
                            return formatNumber(value);
                        }
                    }
                }
            }
        }
    });
}


/* =========================================================
   Atalhos de período
   ========================================================= */

function initializeQuickPeriods() {
    const buttons = document.querySelectorAll(
        '.tracker-filter__quick-button'
    );

    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');

    if (
        buttons.length === 0
        || !startDateInput
        || !endDateInput
    ) {
        return;
    }

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const days = Number(
                button.dataset.period
            );

            if (!Number.isInteger(days) || days <= 0) {
                return;
            }

            const endDate = new Date();

            const startDate = new Date(endDate);

            startDate.setDate(
                startDate.getDate() - days
            );

            startDateInput.value = formatInputDate(
                startDate
            );

            endDateInput.value = formatInputDate(
                endDate
            );

            buttons.forEach((item) => {
                item.classList.remove('is-active');
            });

            button.classList.add('is-active');

            const form = button.closest('form');

            if (form) {
                form.submit();
            }
        });
    });
}


/* =========================================================
   Tentar novamente
   ========================================================= */

function initializeRetry() {
    const retryButton = document.getElementById(
        'tracker-retry'
    );

    if (!retryButton) {
        return;
    }

    retryButton.addEventListener('click', () => {
        const form = document.querySelector(
            '.tracker-filter__form'
        );

        if (!form) {
            return;
        }

        form.submit();
    });
}


/* =========================================================
   Formatação
   ========================================================= */

function formatCurrency(
    value,
    symbol
) {
    return `${symbol} ${formatNumber(value)}`;
}

function formatNumber(value) {
    return Number(value).toLocaleString(
        'pt-BR',
        {
            minimumFractionDigits: 4,
            maximumFractionDigits: 4
        }
    );
}

function formatDate(date) {
    const [year, month, day] = date.split('-');

    return `${day}/${month}/${year}`;
}

function formatInputDate(date) {
    const year = date.getFullYear();

    const month = String(
        date.getMonth() + 1
    ).padStart(2, '0');

    const day = String(
        date.getDate()
    ).padStart(2, '0');

    return `${year}-${month}-${day}`;
}
