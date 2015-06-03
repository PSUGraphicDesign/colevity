<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?= css('assets/css/colevity.css') ?>
  <?= css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>

  <?= js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
  <?= js('https://maps.googleapis.com/maps/api/js?v=3.exp') ?>
  <?= js('assets/js/colevity.js') ?>
  <?= js('assets/js/jquery.sticky.js') ?>
  <?= js('assets/js/jquery.flexslider-min.js') ?>

  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

  <script src="//use.typekit.net/dan3ywd.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>


</head>
<body class="<?= CL::body_classes() ?>">
  <header>
    <? if ( $page->isHomePage() ) snippet('hero', ['featured' => $featured_performance]) ?>
    <div id="sticky-nav">
      <section class="logo">
        <article>
          <div class="column full">
            <img src="<?= $site->url() ?>/assets/images/CoLevity-Tealblock.jpg" alt="<?= $site->title() ?>" />
          </div>
        </article>
      </section>
      <? snippet('menu') ?>
   </div>
  </header>
