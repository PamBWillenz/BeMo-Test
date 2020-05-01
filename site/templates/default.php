<?php snippet('header') ?>
  
  <h2><?= $page->heading() ?></h3>
  <h3><?= $page->text() ?></h3>
  
<main>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</main>
  

<?php snippet('footer') ?>



