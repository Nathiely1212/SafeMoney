<?php

$pageTitle = $pageTitle ?? 'SafeMoney';
$pageDescription = $pageDescription ?? 'Educação financeira simples e acessível para ajudar você a entender melhor seus investimentos.';
$pageStyles = $pageStyles ?? [];
$pageScripts = $pageScripts ?? [];
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta
    name="description"
    content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
>

<title>
    <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> - SafeMoney
</title>

<link rel="stylesheet" href="<?= htmlspecialchars($basePath ?? '', ENT_QUOTES, 'UTF-8') ?>css/global.css">

<?php foreach ($pageStyles as $style): ?>
    <link
        rel="stylesheet"
        href="<?= htmlspecialchars(($basePath ?? '') . 'css/' . $style, ENT_QUOTES, 'UTF-8') ?>"
    >
<?php endforeach; ?>

<script src="<?= htmlspecialchars(($basePath ?? '') . 'js/global.js', ENT_QUOTES, 'UTF-8') ?>" defer></script>

<?php foreach ($pageScripts as $script): ?>
    <script
        src="<?= htmlspecialchars(($basePath ?? '') . 'js/' . $script, ENT_QUOTES, 'UTF-8') ?>"
        defer
    ></script>
<?php endforeach; ?>
