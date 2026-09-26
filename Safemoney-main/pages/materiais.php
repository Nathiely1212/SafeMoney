<?php

$basePath = '../';
$activePage = 'materiais';

$pageTitle = 'Materiais';
$pageDescription = 'Materiais educativos da SafeMoney sobre investimentos, segurança e primeiros passos.';

$pageStyles = [
    'materiais.css',
];

$pageScripts = [];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>

<?php include __DIR__ . '/../components/header.php'; ?>

<main class="materials-page">

    <!-- Hero -->
    <section class="materials-hero">
        <div class="container materials-hero__content">

            <span class="materials-hero__eyebrow">
                Centro de Conhecimento
            </span>

            <h1 class="section-title">
                Nossos Materiais
            </h1>

            <p class="materials-hero__lead">
                Aprenda sobre investimentos de forma simples, organizada e no seu ritmo.
            </p>

            <p class="materials-hero__description">
                Encontre conteúdos para entender os fundamentos dos investimentos,
                conhecer diferentes tipos de ativos, aprender sobre segurança e
                dar os primeiros passos no mundo dos investimentos.
            </p>

        </div>
    </section>

    <!-- Materials catalog -->
    <section class="materials-content">
        <div class="container">

            <!-- Fundamentos -->
            <section class="materials-category">

                <div class="materials-category__header">
                    <span class="material-category__icon material-symbols-outlined" aria-hidden="true">
                        school
                    </span>

                    <div>
                        <p class="materials-category__eyebrow">
                            Comece por aqui
                        </p>

                        <h2 class="materials-category__title">
                            Fundamentos
                        </h2>

                        <p class="materials-category__description">
                            Entenda os conceitos básicos antes de avançar para outros tipos de investimento.
                        </p>
                    </div>
                </div>

                <div class="materials-grid">

                    <a
                        href="materiais/o-que-e-investir.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            lightbulb
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Fundamentos
                            </span>

                            <h3 class="material-card__title">
                                O que é investir?
                            </h3>

                            <p class="material-card__description">
                                Entenda o conceito de investimento e por que ele faz parte do planejamento financeiro.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/por-que-investir.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            flag
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Fundamentos
                            </span>

                            <h3 class="material-card__title">
                                Por que investir?
                            </h3>

                            <p class="material-card__description">
                                Conheça alguns dos motivos pelos quais as pessoas buscam investir seu dinheiro.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/historia-dos-investimentos.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            history
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Fundamentos
                            </span>

                            <h3 class="material-card__title">
                                História dos investimentos
                            </h3>

                            <p class="material-card__description">
                                Conheça como os investimentos evoluíram ao longo do tempo.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                </div>

            </section>

            <!-- Tipos de investimento -->
            <section class="materials-category">

                <div class="materials-category__header">
                    <span class="material-category__icon material-symbols-outlined" aria-hidden="true">
                        account_balance
                    </span>

                    <div>
                        <p class="materials-category__eyebrow">
                            Conheça as opções
                        </p>

                        <h2 class="materials-category__title">
                            Tipos de Investimento
                        </h2>

                        <p class="materials-category__description">
                            Conheça diferentes categorias de investimentos e suas principais características.
                        </p>
                    </div>
                </div>

                <div class="materials-grid">

                    <a
                        href="materiais/tipos-de-investimentos.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            category
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Tipos de Investimento
                            </span>

                            <h3 class="material-card__title">
                                Tipos de investimentos
                            </h3>

                            <p class="material-card__description">
                                Tenha uma visão geral das principais categorias de investimentos.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/renda-fixa.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            savings
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Tipos de Investimento
                            </span>

                            <h3 class="material-card__title">
                                Renda Fixa
                            </h3>

                            <p class="material-card__description">
                                Entenda como funciona a renda fixa e quais são suas características.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/renda-variavel.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            monitoring
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Tipos de Investimento
                            </span>

                            <h3 class="material-card__title">
                                Renda Variável
                            </h3>

                            <p class="material-card__description">
                                Conheça a renda variável e entenda como seus valores podem oscilar.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/criptomoedas.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            currency_bitcoin
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Tipos de Investimento
                            </span>

                            <h3 class="material-card__title">
                                Criptomoedas
                            </h3>

                            <p class="material-card__description">
                                Entenda o que são criptomoedas e conheça suas principais características e riscos.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                </div>

            </section>

            <!-- Segurança -->
            <section class="materials-category">

                <div class="materials-category__header">
                    <span class="material-category__icon material-symbols-outlined" aria-hidden="true">
                        security
                    </span>

                    <div>
                        <p class="materials-category__eyebrow">
                            Invista com informação
                        </p>

                        <h2 class="materials-category__title">
                            Segurança
                        </h2>

                        <p class="materials-category__description">
                            Aprenda sobre riscos e cuidados importantes antes de tomar decisões financeiras.
                        </p>
                    </div>
                </div>

                <div class="materials-grid">

                    <a
                        href="materiais/riscos-dos-investimentos.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            warning
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Segurança
                            </span>

                            <h3 class="material-card__title">
                                Riscos dos investimentos
                            </h3>

                            <p class="material-card__description">
                                Conheça diferentes tipos de riscos presentes nos investimentos.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/seguranca-ao-investir.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            verified_user
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Segurança
                            </span>

                            <h3 class="material-card__title">
                                Segurança ao investir
                            </h3>

                            <p class="material-card__description">
                                Veja cuidados que podem ajudar a tornar sua jornada de investimentos mais segura.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                </div>

            </section>

            <!-- Primeiros passos -->
            <section class="materials-category">

                <div class="materials-category__header">
                    <span class="material-category__icon material-symbols-outlined" aria-hidden="true">
                        play_arrow
                    </span>

                    <div>
                        <p class="materials-category__eyebrow">
                            Comece sua jornada
                        </p>

                        <h2 class="materials-category__title">
                            Primeiros Passos
                        </h2>

                        <p class="materials-category__description">
                            Conteúdos para quem está começando a conhecer o universo dos investimentos.
                        </p>
                    </div>
                </div>

                <div class="materials-grid">

                    <a
                        href="materiais/como-comecar-a-investir.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            rocket_launch
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Primeiros Passos
                            </span>

                            <h3 class="material-card__title">
                                Como começar a investir?
                            </h3>

                            <p class="material-card__description">
                                Conheça os primeiros passos para começar a estudar e entender os investimentos.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/como-analisar-um-investimento.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            analytics
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                Primeiros Passos
                            </span>

                            <h3 class="material-card__title">
                                Como analisar um investimento?
                            </h3>

                            <p class="material-card__description">
                                Aprenda alguns conceitos que podem ajudar na análise de um investimento.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                </div>

            </section>

            <!-- SafeMoney -->
            <section class="materials-category">

                <div class="materials-category__header">
                    <span class="material-category__icon material-symbols-outlined" aria-hidden="true">
                        auto_awesome
                    </span>

                    <div>
                        <p class="materials-category__eyebrow">
                            Conheça a SafeMoney
                        </p>

                        <h2 class="materials-category__title">
                            SafeMoney
                        </h2>

                        <p class="materials-category__description">
                            Aprenda a utilizar a plataforma e consulte conceitos importantes do universo financeiro.
                        </p>
                    </div>
                </div>

                <div class="materials-grid">

                    <a
                        href="materiais/como-utilizar-o-investment-tracker.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            query_stats
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                SafeMoney
                            </span>

                            <h3 class="material-card__title">
                                Como utilizar o InvestmentTracker?
                            </h3>

                            <p class="material-card__description">
                                Aprenda a utilizar a ferramenta da SafeMoney para acompanhar cotações históricas.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                    <a
                        href="materiais/glossario-financeiro.php"
                        class="material-card"
                    >
                        <span class="material-card__icon material-symbols-outlined" aria-hidden="true">
                            menu_book
                        </span>

                        <div class="material-card__content">
                            <span class="material-card__category">
                                SafeMoney
                            </span>

                            <h3 class="material-card__title">
                                Glossário financeiro
                            </h3>

                            <p class="material-card__description">
                                Consulte termos e conceitos financeiros de forma simples e organizada.
                            </p>
                        </div>

                        <span class="material-card__action">
                            Ler material
                            <span class="material-symbols-outlined" aria-hidden="true">
                                arrow_forward
                            </span>
                        </span>
                    </a>

                </div>

            </section>

        </div>
    </section>

    <!-- CTA -->
    <section class="materials-cta">
        <div class="container">

            <div class="materials-cta__card">

                <span
                    class="materials-cta__decoration materials-cta__decoration--top"
                    aria-hidden="true"
                ></span>

                <span
                    class="materials-cta__decoration materials-cta__decoration--bottom"
                    aria-hidden="true"
                ></span>

                <div class="materials-cta__content">

                    <span
                        class="materials-cta__icon material-symbols-outlined"
                        aria-hidden="true"
                    >
                        query_stats
                    </span>

                    <h2>
                        Quer acompanhar as cotações?
                    </h2>

                    <p>
                        Utilize o InvestmentTracker para consultar valores históricos
                        de moedas e entender melhor como as cotações variam ao longo do tempo.
                    </p>

                    <a
                        href="tracker.php"
                        class="button button--primary"
                    >
                        Acessar InvestmentTracker
                        <span class="material-symbols-outlined" aria-hidden="true">
                            arrow_forward
                        </span>
                    </a>

                </div>

            </div>

        </div>
    </section>

</main>

<?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
