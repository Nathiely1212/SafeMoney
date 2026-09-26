<?php

$basePath = '../../';
$activePage = 'materiais';

$pageTitle = 'Como começar a investir?';
$pageDescription = 'Aprenda os primeiros passos para começar a investir de forma consciente e organizada.';

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
                            rocket_launch
                        </span>

                        <span>Primeiros Passos</span>

                    </div>

                    <h1>
                        Como começar a investir?
                    </h1>

                    <div class="material-meta">

                        <span class="material-meta__item">

                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                schedule
                            </span>

                            Em breve

                        </span>

                        <span class="material-meta__item">

                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                update
                            </span>

                            Conteúdo em construção

                        </span>

                    </div>

                </header>

                <!-- Content -->
                <div class="material-article material-article--placeholder">

                    <div class="material-placeholder">

                        <span
                            class="material-placeholder__icon material-symbols-outlined"
                            aria-hidden="true"
                        >
                            rocket_launch
                        </span>

                        <h3>
                            Conteúdo em construção
                        </h3>

                        <p>
                            Esta página já está estruturada e vinculada ao catálogo
                            de materiais. O conteúdo completo deste tema será
                            desenvolvido nesta etapa do projeto.
                        </p>

                    </div>

                </div>

                <!-- Pagination -->
                <nav
                    class="material-pagination"
                    aria-label="Navegação entre materiais"
                >

                    <a
                        class="pagination-button pagination-button--previous"
                        href="seguranca-ao-investir.php"
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
                    </a>

                    <a
                        class="pagination-button pagination-button--next"
                        href="como-analisar-um-investimento.php"
                    >
                        <span class="pagination-button__text">

                            <span class="pagination-button__label">
                                Próximo
                            </span>

                            Como analisar um investimento?

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
