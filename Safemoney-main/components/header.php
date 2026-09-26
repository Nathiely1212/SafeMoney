<?php

$basePath = $basePath ?? '../';
$activePage = $activePage ?? '';

$navigationItems = [
    'home' => [
        'label' => 'Home',
        'path' => 'index.php',
    ],
    'sobre' => [
        'label' => 'Sobre Nós',
        'path' => 'sobre.php',
    ],
    'objetivos' => [
        'label' => 'Objetivos',
        'path' => 'objetivos.php',
    ],
    'materiais' => [
        'label' => 'Materiais',
        'path' => 'materiais.php',
    ],
    'tracker' => [
        'label' => 'InvestmentTracker',
        'path' => 'tracker.php',
    ],
];

$buildUrl = static function (string $path) use ($basePath): string {
    return htmlspecialchars(
        $basePath . 'pages/' . $path,
        ENT_QUOTES,
        'UTF-8'
    );
};
?>

<header class="site-header">
    <div class="container site-header__inner">

        <a
            class="logo"
            href="<?= $buildUrl('index.php') ?>"
            aria-label="SafeMoney - Página inicial"
        >
            <span class="logo__symbol">$</span>afeMoney
        </a>

        <nav
            class="main-nav"
            aria-label="Navegação principal"
        >
            <?php foreach ($navigationItems as $key => $item): ?>
                <?php $isActive = $activePage === $key; ?>

                <a
                    class="main-nav__link <?= $isActive ? 'main-nav__link--active' : '' ?>"
                    href="<?= $buildUrl($item['path']) ?>"
                    <?= $isActive ? 'aria-current="page"' : '' ?>
                >
                    <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <a
            class="button button--primary site-header__cta"
            href="<?= $buildUrl('materiais.php') ?>"
        >
            Começar agora
        </a>

        <button
            class="menu-toggle"
            type="button"
            aria-label="Abrir menu"
            aria-expanded="false"
            aria-controls="mobile-navigation"
        >
            <span
                class="material-symbols-outlined"
                aria-hidden="true"
            >menu</span>
        </button>
    </div>

    <nav
        class="mobile-nav"
        id="mobile-navigation"
        aria-label="Navegação mobile"
    >
        <?php foreach ($navigationItems as $key => $item): ?>
            <?php $isActive = $activePage === $key; ?>

            <a
                class="mobile-nav__link <?= $isActive ? 'mobile-nav__link--active' : '' ?>"
                href="<?= $buildUrl($item['path']) ?>"
                <?= $isActive ? 'aria-current="page"' : '' ?>
            >
                <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
        <?php endforeach; ?>

        <a
            class="button button--primary"
            href="<?= $buildUrl('materiais.php') ?>"
        >
            Começar agora
        </a>
    </nav>
</header>
