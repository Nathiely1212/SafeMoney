<?php

$basePath = $basePath ?? '';
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
        $basePath . $path,
        ENT_QUOTES,
        'UTF-8'
    );
};
?>

<footer class="site-footer">
    <div class="container site-footer__main">

        <div class="site-footer__brand">
            <a
                class="logo logo--footer"
                href="<?= $buildUrl('index.php') ?>"
                aria-label="SafeMoney - Página inicial"
            >
                <span class="logo__symbol">$</span>afeMoney
            </a>

            <p>
                Educação financeira acessível e acompanhamento inteligente para o seu futuro.
            </p>
        </div>

        <nav
            class="footer-nav"
            aria-label="Navegação do rodapé"
        >
            <?php foreach ($navigationItems as $key => $item): ?>
                <?php $isActive = $activePage === $key; ?>

                <a
                    class="footer-nav__link <?= $isActive ? 'footer-nav__link--active' : '' ?>"
                    href="<?= $buildUrl($item['path']) ?>"
                    <?= $isActive ? 'aria-current="page"' : '' ?>
                >
                    <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            <?php endforeach; ?>
        </nav>

    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <p>
                © <?= date('Y') ?> SafeMoney. Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>
