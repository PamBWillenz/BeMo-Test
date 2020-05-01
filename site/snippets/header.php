<!doctype html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css('assets/css/index.css') ?>


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

  
