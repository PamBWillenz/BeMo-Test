<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>
</head>
<body>

  <header>
    <a class="logo"href="<?= $site->url() ?>"><?= $site->title() ?></a>
  </header>

  <nav class="menu">
    <?php foreach ($site->children() as $subpage): ?>
    <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
    <?php endforeach ?>
  </nav>

  <h1><?= $page->title() ?></h1>
  <h2><?= $page->heading() ?></h3>
  <h3><?= $page->text() ?></h3>
  <h3><?= $page->footer() ?></h3>

</body>
</html>




