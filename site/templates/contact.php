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

<h1><?= $page->title()->html() ?></h1>

        <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="website" id="website" name="website">
            </div>
            <div class="field">
                <label for="name">
                    Name <abbr title="required">*</abbr>
                </label>
                <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="email">
                    Email <abbr title="required">*</abbr>
                </label>
                <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="text">
                    Text <abbr title="required">*</abbr>
                </label>
                <textarea id="text" name="text" required>
                    <?= $data['text']?? '' ?>
                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php endif ?>

        <br><br><br>



  
</main>

<?php snippet('footer') ?>
