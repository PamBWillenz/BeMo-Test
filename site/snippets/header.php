<!doctype html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css('assets/css/index.css') ?>

  <!-- no index -->
  <?php if($bool = $page->noIndex()->bool()): ?>
    <?php if($bool === true): ?>
      <meta name="robots" content="noindex"></meta>
      <meta name="googlebot" content="noindex"></meta>
    <?php endif ?>
  <?php endif ?>

  <!-- checks for meta title -->
  <?php if($metaTitle = $page->metaTitle()): ?>
    <title><?= $metaTitle ?></title>
  <?php endif ?>

  <!-- checks for meta description -->
  <?php if($metaDescription = $page->metaDescription()): ?>
    <meta name="description" content="<?= $metaDescription ?>"></meta>
  <?php endif ?>



</head>
<body>

  <div class="page">
    <header class="header>"
      <a class="logo" href="<?=$site->url() ?>"> <img class="resize" src="../assets/images/bemo-logo2.png" /> </a>

  <nav id="menu" class="menu">
    <?php foreach ($site->children()->listed() as $item): ?>
    <?= $item->title()->link() ?>
    <?php endforeach ?>
  </nav>
</header>

  
