<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>

  <a class="branding" href="<?= $site->url() ?>"><?= $site->title() ?></a>

  <?= css('assets/css/index.css') ?>

</head>
<body>

  <nav class="menu">
    <?php foreach ($site->children()->listed() as $subpage): ?>
    <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
    <?php endforeach ?>
  </nav>

  
