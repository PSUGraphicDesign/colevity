<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?= css('assets/css/colevity.css') ?>
  <?= js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>

</head>
<body class="<?= CL::body_classes() ?>">
  <header>
    <? if ( $page->isHomePage() ) snippet('hero', ['featured' => $featured_performance]) ?>
    <section class="logo">
      <article>
        <div class="column full">
          <?= html::img('/assets/images/logo-background.png', ['alt' => $site->title()]) ?>
        </div>
      </article>
    </section>
    <? snippet('menu') ?>
  </header>
