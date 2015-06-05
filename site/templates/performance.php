<article id="<?= $page->uid() ?>" class="performance-details">
  <? snippet('modal-controls') ?>
  <div class="column half mobile-full">
    <h2><?= $page->title() ?></h2>
    <?= $page->description()->kirbytext() ?>
  </div>
  <? if ( $images->count() ) { ?>
    <div class="column full slideshow">
      <div class="slides">
        <? foreach ( $images as $image ) { ?>
          <div class="slide">
            <?= html::img(thumb($image, ['width' => 1500])->url()) ?>
          </div>
        <? } ?>
      </div>
      <div class="slideshow-controls">
        <div class="prev">
          <i class="fa fa-chevron-left"></i>
        </div>
        <div class="next">
          <i class="fa fa-chevron-right"></i>
        </div>
      </div>
    </div>
  <? } ?>
</article>
