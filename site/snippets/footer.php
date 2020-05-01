
<h3><?= $site->footer()->html() ?></h3>

<footer class="footer">
    <a href="<?= url() ?>">&copy; 2013-2016 BeMo Academic Consulting Inc. All rights reserved</a>

    <?php if ($about = page('about')): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>
  </footer>

</body>
</html>
