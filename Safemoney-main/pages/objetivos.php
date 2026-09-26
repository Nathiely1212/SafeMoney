<?php

$basePath = '../';
$activePage = 'objetivos';

$pageTitle = 'Objetivos';
$pageDescription = 'Conheça os objetivos da SafeMoney e como a plataforma pretende tornar a educação financeira mais acessível.';

$pageStyles = [
    'objetivos.css',
];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>

<?php include __DIR__ . '/../components/header.php'; ?>

<main>

    <!-- =====================================================
         Hero
         ===================================================== -->

    <section class="objectives-hero section">
        <div class="container objectives-hero__grid">

            <div class="objectives-hero__content">
                <h1 class="display-title">
                    Nossos Objetivos
                </h1>

                <p class="section-lead">
                    Conhecimento financeiro simples para transformar a forma como as pessoas
                    entendem seus investimentos.
                </p>

                <a
                    class="button button--accent"
                    href="#desafio"
                >
                    Descubra como
                </a>
            </div>


            <div class="objectives-hero__image">
                <div class="image-frame image-frame--hero">
                    <img
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsAY4fsb1nEef2Y-vNDAFlhZ0BABzlgvWp99GAaOCzMZQW-S0hhu0rpesAcVKngyCBKruqKIG83JxYc1qU5BuRc_Up5hUJVkPveb4DeGR5BFRsaXH9cgslCYQgloUB9iKASGsMeyzSj7KXHKYigCYRjGbtHonQ941INKYgKWUwZ0IX8cpwAYl4jIFRSclzKz4Bhw4jjBBjL6fO2yhwEXm-_371f3AgETI0eZuBJH_9iv9SkZfzCOhB8g"
                        alt="Ilustração abstrata representando crescimento financeiro e educação."
                    >
                </div>
            </div>

        </div>
    </section>


    <!-- =====================================================
         O Desafio
         ===================================================== -->

    <section
        class="challenge section section--muted"
        id="desafio"
    >
        <div class="container challenge__grid">

            <div class="challenge__content">
                <h2 class="section-title">
                    O Desafio
                </h2>

                <p class="section-text">
                    Acreditamos que a complexidade excessiva do mercado financeiro muitas vezes
                    atua como uma barreira. Termos técnicos difíceis e uma abundância de
                    informações desestruturadas podem afastar pessoas comuns de tomar controle
                    sobre seu futuro financeiro.
                </p>

                <p class="section-text">
                    Muitos se sentem perdidos e intimidados. Nosso foco é desmistificar esse
                    universo com uma abordagem empática e didática.
                </p>
            </div>


            <div class="challenge__visual glass-card">
                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTqnZM28wfQDyzGxYDBIc1n5sgFmaB10LqeeKTugJK9zpfVuHQ-pK1PRuuTLO50OKbiMiUWTjiW-GwggHHyR0NUdGYCF3muQ0tJmz-44rjIE-LwCeVxzBoWqBnr4UzQwlONgcTxv9Qid-pIP2Fb3ZciCJEn_cAgXPVpt8rDnQ5dbyY2E0efP1WCFi2WO0TbWGgqa6NeVkO_Vo92ArbjoTW_iX8w8WiT5xs1cy8f1F9V9PWZvXsnJzUog"
                    alt="Ilustração representando a simplificação de uma situação financeira complexa."
                >
            </div>

        </div>
    </section>


    <!-- =====================================================
         Propósito
         ===================================================== -->

    <section class="purpose section">
        <div class="container purpose__content">

            <span class="eyebrow">
                Nosso Propósito
            </span>

            <h2 class="display-title">
                "Investir começa com conhecimento."
            </h2>

            <p class="section-lead">
                Nosso objetivo é tornar o conhecimento sobre investimentos mais simples
                e acessível, capacitando você a tomar decisões com confiança.
            </p>

        </div>
    </section>


    <!-- =====================================================
         Como Ajudamos
         ===================================================== -->

    <section class="solutions section">
        <div class="container">

            <div class="section-heading section-heading--center">
                <h2 class="section-title">
                    Como Ajudamos
                </h2>
            </div>


            <div class="solutions-grid">

                <article class="solution-card">
                    <div class="icon-circle icon-circle--primary">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            menu_book
                        </span>
                    </div>

                    <h3>
                        Educação Acessível
                    </h3>

                    <p>
                        Traduzimos o "economês" para uma linguagem clara e objetiva,
                        permitindo que qualquer pessoa entenda os fundamentos.
                    </p>
                </article>


                <article class="solution-card">
                    <div class="icon-circle icon-circle--primary">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            groups
                        </span>
                    </div>

                    <h3>
                        Conhecimento para todos
                    </h3>

                    <p>
                        Não importa se você está começando do zero ou querendo aprimorar
                        suas estratégias, temos conteúdos para todos os níveis.
                    </p>
                </article>


                <article class="solution-card">
                    <div class="icon-circle icon-circle--accent">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            computer
                        </span>
                    </div>

                    <h3>
                        Tecnologia como apoio
                    </h3>

                    <p>
                        Utilizamos ferramentas digitais intuitivas para visualizar dados
                        e facilitar a aplicação prática do que você aprendeu.
                    </p>
                </article>

            </div>

        </div>
    </section>


    <!-- =====================================================
         O Que Ensinamos
         ===================================================== -->

    <section class="learning-path section">
        <div class="container learning-path__inner">

            <div class="section-heading learning-path__heading">

                <div>
                    <h2 class="section-title section-title--light">
                        O Que Ensinamos
                    </h2>

                    <p class="section-text section-text--light">
                        Nossa trilha de conhecimento é estruturada para construir uma base
                        sólida antes de avançar para tópicos complexos.
                    </p>
                </div>

                <a
                    class="button button--accent"
                    href="materiais.php"
                >
                    Conheça nossos materiais
                </a>

            </div>


            <div class="learning-grid">

                <article class="learning-item">
                    <h3>
                        Fundamentos
                    </h3>

                    <p>
                        O básico que você precisa saber sobre como o dinheiro funciona.
                    </p>
                </article>


                <article class="learning-item">
                    <h3>
                        História
                    </h3>

                    <p>
                        Aprenda com o passado para entender os ciclos econômicos atuais.
                    </p>
                </article>


                <article class="learning-item">
                    <h3>
                        Formas de Investimento
                    </h3>

                    <p>
                        Renda fixa, variável, fundos e muito mais explicados de forma simples.
                    </p>
                </article>


                <article class="learning-item">
                    <h3>
                        Segurança
                    </h3>

                    <p>
                        Como proteger seu patrimônio e identificar riscos de forma inteligente.
                    </p>
                </article>

            </div>

        </div>
    </section>


    <!-- =====================================================
         Jornada
         ===================================================== -->

    <section class="journey section">
        <div class="container">

            <div class="section-heading section-heading--center journey__heading">

                <h2 class="section-title">
                    A Jornada do Investidor Consciente
                </h2>

                <p class="section-text">
                    Acompanhamos você em cada etapa, transformando incerteza em autonomia.
                </p>

            </div>


            <div class="journey__timeline">

                <div
                    class="journey__progress"
                    aria-hidden="true"
                ></div>

                <div class="journey-grid">

                    <article class="journey-step">
                        <div class="journey-step__icon journey-step__icon--default">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                question_mark
                            </span>
                        </div>

                        <h3>
                            Desconhecimento
                        </h3>

                        <p>
                            O início comum, cercado de dúvidas e jargões.
                        </p>
                    </article>


                    <article class="journey-step">
                        <div class="journey-step__icon journey-step__icon--active">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                school
                            </span>
                        </div>

                        <h3>
                            Aprendizado
                        </h3>

                        <p>
                            Absorvendo conceitos de forma estruturada e acessível.
                        </p>
                    </article>


                    <article class="journey-step journey-step--future">
                        <div class="journey-step__icon journey-step__icon--default">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                lightbulb
                            </span>
                        </div>

                        <h3>
                            Compreensão
                        </h3>

                        <p>
                            Conectando os pontos e enxergando o cenário maior.
                        </p>
                    </article>


                    <article class="journey-step journey-step--future">
                        <div class="journey-step__icon journey-step__icon--default">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                trending_up
                            </span>
                        </div>

                        <h3>
                            Decisão Consciente
                        </h3>

                        <p>
                            Agindo com confiança e alinhamento aos seus objetivos.
                        </p>
                    </article>

                </div>

            </div>

        </div>
    </section>


    <!-- =====================================================
         InvestmentTracker
         ===================================================== -->

    <section class="tracker-preview section section--muted">
        <div class="container tracker-preview__grid">

            <div class="tracker-preview__visual glass-card">
                <img
                    src="../assets/images/home/InvestmentTracker.png"
                    alt="Interface ilustrativa do InvestmentTracker com gráfico de evolução."
                >
            </div>


            <div class="tracker-preview__content">

                <div class="feature-label">
                    <span
                        class="material-symbols-outlined"
                        aria-hidden="true"
                    >
                        analytics
                    </span>

                    <span>
                        Ferramenta Exclusiva
                    </span>
                </div>


                <h2 class="section-title">
                    InvestmentTracker
                </h2>

                <p class="section-text">
                    A teoria é essencial, mas a prática consolida o conhecimento.
                    O InvestmentTracker é nossa ferramenta dedicada para você simular,
                    acompanhar e analisar carteiras de investimento em um ambiente
                    seguro e intuitivo.
                </p>


                <ul class="feature-list">

                    <li>
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            check_circle
                        </span>

                        Interface limpa e sem distrações
                    </li>

                    <li>
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            check_circle
                        </span>

                        Dados visuais fáceis de interpretar
                    </li>

                    <li>
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            check_circle
                        </span>

                        Conectado diretamente aos nossos módulos de ensino
                    </li>

                </ul>


                <a
                    class="button button--outline"
                    href="tracker.php"
                >
                    Conheça o InvestmentTracker
                </a>

            </div>

        </div>
    </section>


    <!-- =====================================================
         CTA Final
         ===================================================== -->

    <section class="final-cta section">
        <div class="container final-cta__content">

            <h2 class="display-title">
                Comece pelo conhecimento.
            </h2>

            <p class="section-lead">
                Dê o primeiro passo em direção à sua autonomia financeira hoje mesmo.
            </p>

            <div class="final-cta__actions">

                <a
                    class="button button--primary"
                    href="materiais.php"
                >
                    Acessar Materiais
                </a>

                <a
                    class="button button--outline"
                    href="tracker.php"
                >
                    Testar Tracker
                </a>

            </div>

        </div>
    </section>

</main>

<?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
