<?php

$basePath = '../../';
$activePage = 'materiais';

$pageTitle = 'O que é investir?';
$pageDescription = 'Entenda o que significa investir, a diferença entre poupar e investir e a relação entre investimentos e inflação.';

$pageStyles = [
    'material.css',
];

$pageScripts = [];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include __DIR__ . '/../../components/head.php'; ?>
</head>

<body>

<?php include __DIR__ . '/../../components/header.php'; ?>

<main class="material-page">

    <!-- Back navigation -->
    <section class="material-page__hero">
        <div class="container">

            <a
                class="material-page__back"
                href="../materiais.php"
            >
                <span class="material-symbols-outlined" aria-hidden="true">
                    arrow_back
                </span>

                Voltar para Materiais
            </a>

        </div>
    </section>

    <!-- Material -->
    <section class="section material-page__content">
        <div class="container">

            <article class="material-reader material-reader--standalone">

                <!-- Header -->
                <header class="material-reader__header">

                    <div class="material-reader__category">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            auto_stories
                        </span>

                        <span>Fundamentos</span>
                    </div>

                    <h1>
                        O que é investir?
                    </h1>

                    <div class="material-meta">

                        <span class="material-meta__item">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                schedule
                            </span>

                            5 min de leitura
                        </span>

                        <span class="material-meta__item">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                update
                            </span>

                            Atualizado em 15 Out 2023
                        </span>

                    </div>

                </header>

                <!-- Article -->
                <div class="material-article">

                    <p>
                        Neste material vamos entender o que significa investir e
                        por que as pessoas investem. Investir, de forma simples,
                        é colocar o seu dinheiro para trabalhar para você. Em vez
                        de deixar seu capital parado, perdendo valor para a inflação,
                        você o aloca em ativos que têm o potencial de gerar retornos
                        ao longo do tempo.
                    </p>

                    <h3>
                        O Conceito de Investimento
                    </h3>

                    <p>
                        Muitas pessoas confundem poupar com investir. Poupar é
                        simplesmente o ato de guardar dinheiro, gastando menos do
                        que se ganha. Já investir é pegar esse dinheiro poupado e
                        aplicá-lo com a expectativa de obter um rendimento. É a
                        diferença entre guardar sementes em um cofre e plantá-las
                        em um solo fértil.
                    </p>

                    <aside class="material-highlight">

                        <span
                            class="material-highlight__icon material-symbols-outlined"
                            aria-hidden="true"
                        >
                            lightbulb
                        </span>

                        <div class="material-highlight__content">

                            <h4>
                                Ponto Chave
                            </h4>

                            <p>
                                O objetivo principal dos investimentos não é
                                enriquecer da noite para o dia, mas sim proteger
                                o seu poder de compra e construir patrimônio de
                                forma consistente e sustentável no longo prazo.
                            </p>

                        </div>

                    </aside>

                    <h3>
                        Por que não deixar o dinheiro parado?
                    </h3>

                    <p>
                        A resposta curta é: Inflação. A inflação é o aumento
                        generalizado dos preços de bens e serviços. Quando a
                        inflação acontece, o seu dinheiro perde poder de compra.
                        Investir é uma das ferramentas utilizadas para buscar
                        proteção contra esse efeito ao longo do tempo.
                    </p>

                    <figure class="material-image">

                        <img src="../../assets/images/materials/growth.png" alt="">

                    </figure>

                </div>

                <!-- Material navigation -->
                <nav
                    class="material-pagination"
                    aria-label="Navegação entre materiais"
                >

                    <span
                        class="pagination-button pagination-button--disabled"
                        aria-disabled="true"
                    >
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            arrow_back
                        </span>

                        <span>
                            Anterior
                        </span>
                    </span>

                    <a
                        class="pagination-button pagination-button--next"
                        href="por-que-investir.php"
                    >
                        <span class="pagination-button__text">

                            <span class="pagination-button__label">
                                Próximo
                            </span>

                            Por que investir?

                        </span>

                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            arrow_forward
                        </span>
                    </a>

                </nav>

            </article>

        </div>
    </section>

</main>

<?php include __DIR__ . '/../../components/footer.php'; ?>

</body>
</html>
