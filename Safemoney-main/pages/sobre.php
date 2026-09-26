<?php

$basePath = '../';
$activePage = 'sobre';

$pageTitle = 'Sobre Nós';
$pageDescription = 'Conheça a história, propósito, equipe e visão da SafeMoney.';

$pageStyles = [
    'sobre.css',
];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>

<?php include __DIR__ . '/../components/header.php'; ?>

<main class="about-page">

    <!-- =====================================================
         Hero
         ===================================================== -->

    <section class="about-hero section">
        <div class="container about-hero__grid">

            <div class="about-hero__content">
                <span class="eyebrow">
                    <span
                        class="material-symbols-outlined"
                        aria-hidden="true"
                    >
                        lightbulb
                    </span>

                    Nossa História
                </span>

                <h1 class="display-title">
                    Sobre Nós
                </h1>

                <p class="about-hero__lead">
                    Conheça a história por trás da SafeMoney.
                </p>

                <p class="about-hero__description">
                    Um projeto criado a partir de uma dificuldade que nós mesmos enfrentamos:
                    <strong>compreender o mundo dos investimentos.</strong>
                </p>
            </div>

            <div class="about-hero__image">
                <div
                    class="about-hero__image-overlay"
                    aria-hidden="true"
                ></div>

                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMRmF3K2uTv0ZfdFA8z18eHqb0iE0E38R2DNViDFyZHIV_f09ajmMV_nbn1K8DyEybeSJypm6c6r1G5b2e9LS1FHj69lTc7x40zAdtfd6O3stox2hatMuKL3zH-8an__QthLfzqeLQclNB3uPbAC-hIEueFXYBHb39_6jxAJTUT08j4cQCZtpiV5oX8UCqpSnc6lpPAHs7bfgiM7BFmd4_iOBvfifDmhYbcTfdLgk923dcVnTJf19W6Q"
                    alt="Ilustração da equipe colaborando em um ambiente de tecnologia e educação financeira."
                >
            </div>

        </div>
    </section>


    <!-- =====================================================
         Origem
         ===================================================== -->

    <section class="origin section">
        <div class="container">

            <div class="origin__content">

                <h2 class="section-title">
                    Como surgiu a SafeMoney?
                </h2>

                <p class="section-text">
                    Tudo começou em uma sessão de brainstorming acadêmica. Estávamos buscando
                    um problema real para resolver e percebemos que a barreira de entrada para
                    a educação financeira era alta demais. A linguagem era complexa e as ferramentas,
                    intimidadoras.
                </p>

                <div
                    class="origin-flow"
                    aria-label="Dificuldade, reflexão, ideia e SafeMoney"
                >
                    <div class="origin-flow__item">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            error
                        </span>

                        Dificuldade
                    </div>

                    <span
                        class="material-symbols-outlined origin-flow__arrow"
                        aria-hidden="true"
                    >
                        arrow_downward
                    </span>

                    <div class="origin-flow__item">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            psychology
                        </span>

                        Reflexão
                    </div>

                    <span
                        class="material-symbols-outlined origin-flow__arrow"
                        aria-hidden="true"
                    >
                        arrow_downward
                    </span>

                    <div class="origin-flow__item">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            emoji_objects
                        </span>

                        Ideia
                    </div>

                    <span
                        class="material-symbols-outlined origin-flow__arrow"
                        aria-hidden="true"
                    >
                        arrow_downward
                    </span>

                    <div class="origin-flow__item origin-flow__item--highlight">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            account_balance
                        </span>

                        SafeMoney
                    </div>
                </div>

                <blockquote class="origin__question">
                    "Se investir pode ser difícil até para quem já possui algum conhecimento,
                    como podemos ajudar quem nunca teve contato com esse universo?"
                </blockquote>

            </div>

        </div>
    </section>


    <!-- =====================================================
         Propósito e valores
         ===================================================== -->

    <section class="purpose section">
        <div class="container">

            <div class="section-heading">
                <h2 class="section-title">
                    Por que fazemos isso?
                </h2>

                <p class="section-text">
                    Acreditamos em reduzir barreiras através de uma linguagem simples.
                </p>
            </div>

            <div class="values-grid">

                <article class="purpose-card">
                    <h3 class="card-title">
                        Nosso Propósito
                    </h3>

                    <p class="purpose-card__statement">
                        Aprender primeiro.<br>
                        <span>Investir com mais consciência depois.</span>
                    </p>
                </article>


                <article class="value-card">
                    <div class="value-card__icon">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            shield
                        </span>
                    </div>

                    <div>
                        <h3>Segurança</h3>

                        <p>
                            Ambiente simulado e seguro para seus primeiros passos.
                        </p>
                    </div>
                </article>


                <article class="value-card">
                    <div class="value-card__icon">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            menu_book
                        </span>
                    </div>

                    <div>
                        <h3>Educação</h3>

                        <p>
                            Conteúdo estruturado e focado no aprendizado prático.
                        </p>
                    </div>
                </article>


                <article class="value-card">
                    <div class="value-card__icon">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            cleaning_services
                        </span>
                    </div>

                    <div>
                        <h3>Simplicidade</h3>

                        <p>
                            Design limpo e sem jargões complexos desnecessários.
                        </p>
                    </div>
                </article>


                <article class="value-card">
                    <div class="value-card__icon">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            accessibility_new
                        </span>
                    </div>

                    <div>
                        <h3>Acessibilidade</h3>

                        <p>
                            Conhecimento financeiro desenhado para todos.
                        </p>
                    </div>
                </article>

            </div>

        </div>
    </section>


    <!-- =====================================================
         Equipe e contexto acadêmico
         ===================================================== -->

    <section class="team-academic section">
        <div class="container team-academic__grid">

            <article class="team-card surface-card">
                <h2 class="card-section-title">
                    Nossa equipe
                </h2>

                <div class="team-list">

                    <div class="team-member">
                        <div class="team-member__icon team-member__icon--primary">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                terminal
                            </span>
                        </div>

                        <div>
                            <h3>
                                Desenvolvimento e Tecnologia
                            </h3>

                            <p>
                                Implementações técnicas, arquitetura de software e design UI/UX estruturado.
                            </p>
                        </div>
                    </div>


                    <div class="team-member">
                        <div class="team-member__icon team-member__icon--accent">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                architecture
                            </span>
                        </div>

                        <div>
                            <h3>
                                Responsável pelo Projeto
                            </h3>

                            <p>
                                Planejamento estratégico, pesquisa acadêmica e proposta de valor.
                            </p>
                        </div>
                    </div>

                </div>
            </article>


            <article class="academic-card">

                <span
                    class="material-symbols-outlined academic-card__background-icon"
                    aria-hidden="true"
                >
                    school
                </span>

                <div class="academic-card__content">

                    <span class="eyebrow eyebrow--dark">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            science
                        </span>

                        TCC
                    </span>

                    <h2>
                        Um projeto acadêmico com potencial para crescer
                    </h2>

                    <p>
                        Nascido como um Trabalho de Conclusão de Curso (TCC), a SafeMoney foi
                        estruturada não apenas para cumprir requisitos acadêmicos, mas para
                        solucionar uma dor latente na sociedade atual: a falta de letramento
                        financeiro prático e acessível.
                    </p>

                </div>
            </article>

        </div>
    </section>


    <!-- =====================================================
         Roadmap
         ===================================================== -->

    <section class="roadmap section">
        <div class="container">

            <div class="section-heading">
                <h2 class="section-title">
                    Onde queremos chegar?
                </h2>
            </div>

            <div class="roadmap__timeline">

                <article class="roadmap-item">
                    <div class="roadmap-item__number roadmap-item__number--active">
                        1
                    </div>

                    <div class="roadmap-card roadmap-card--active">
                        <h3>
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                menu_book
                            </span>

                            Fase 1: Educação
                        </h3>

                        <p>
                            Base teórica sólida e acessível sobre conceitos fundamentais.
                        </p>
                    </div>
                </article>


                <article class="roadmap-item">
                    <div class="roadmap-item__number">
                        2
                    </div>

                    <div class="roadmap-card">
                        <h3>
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                monitoring
                            </span>

                            Fase 2: Acompanhamento
                        </h3>

                        <p>
                            Lançamento do InvestmentTracker para simulações seguras.
                        </p>
                    </div>
                </article>


                <article class="roadmap-item roadmap-item--future">
                    <div class="roadmap-item__number">
                        3
                    </div>

                    <div class="roadmap-card">
                        <h3>
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                tune
                            </span>

                            Fase 3: Personalização
                        </h3>

                        <p>
                            Trilhas de aprendizado adaptativas ao perfil do usuário.
                        </p>
                    </div>
                </article>


                <article class="roadmap-item roadmap-item--future">
                    <div class="roadmap-item__number">
                        4
                    </div>

                    <div class="roadmap-card">
                        <h3>
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                hub
                            </span>

                            Fase 4: Conectividade
                        </h3>

                        <p>
                            Integração futura com APIs do mercado real.
                        </p>
                    </div>
                </article>

            </div>

        </div>
    </section>


    <!-- =====================================================
         Visão
         ===================================================== -->

    <section class="vision section">
        <div class="container">

            <div class="vision-card surface-card">

                <div class="vision-card__content">

                    <span class="eyebrow eyebrow--accent">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            visibility
                        </span>

                        Nossa Visão
                    </span>

                    <h2 class="section-title">
                        Conheça a SafeMoney
                    </h2>

                    <p class="section-text">
                        Estamos trabalhando para tornar o conhecimento financeiro mais acessível
                        a todos. Explore nossos recursos gratuitos e comece sua jornada com segurança.
                    </p>

                </div>


                <div class="vision-card__actions">

                    <a
                        class="button button--outline"
                        href="materiais.php"
                    >
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            menu_book
                        </span>

                        Conhecer nossos materiais
                    </a>

                    <a
                        class="button button--accent"
                        href="tracker.php"
                    >
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            monitoring
                        </span>

                        Conhecer o InvestmentTracker
                    </a>

                </div>

            </div>

        </div>
    </section>

</main>

<?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
