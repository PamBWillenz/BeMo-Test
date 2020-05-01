<?php snippet('header') ?>

<main>

  <div class="layout">
    <img src="../assets/images/contact-us.png" />
    <div class="text">
      <span style="font-weight:bold;"><?= $page->text()->kt() ?></span>
      <u>Toll Free: </u><?= $page->phone() ?>
      <br><br>
      <u> Email: </u> <?= $page->email() ?>
      <br><br>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
