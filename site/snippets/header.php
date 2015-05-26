<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?= css('assets/css/colevity.css') ?>

  <?= js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
  <?= js('https://maps.googleapis.com/maps/api/js?v=3.exp') ?>
  <?= js('/assets/js/colevity.js') ?>

  <link rel="stylesheet" href="../../assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css">

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
