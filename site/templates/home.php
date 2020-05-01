<?php snippet('header') ?>
 
 <main>
  <div class="imageContainer">
    <img src=<?= $page->coverimageurl() ?>/>
    <div class="centeredText"><?= $page->pageheader()?></div>
    <hr class="belowcenteredText">
  </div>

  <div class="textContainer">
    <p style="color:darkblue;font-weight:bold;"><?= $page->pagesubtitle()?></p>
    <br>
    <p style="font-weight:bold;color:#585858;margin-bottom: 20px;margin-top: 20px;"> Overview </p>
    <p>
    <?= $page->pagecontents() ?>
    </p>

    <a style="margin-top:50px;color:orange;margin-bottom:50px;" href="/contact"> Contact Us </a>
    <br>
    <p style="margin-top: 30px;">
      <?= $page->pagecontent() ?>
    </p>
  </div>
</main>
    
<?php snippet('footer') ?>
