<article id="<?= $page->uid() ?>" class="performance-details">
  <? snippet('modal-controls') ?>
  <div class="column half mobile-full">
    <h2><?= $page->title() ?></h2>
    <?= $page->description()->kirbytext() ?>
  </div>
  <? if ( $images->count() ) { ?>
    <div class="column full">
      <div class="slideshow">
        <? foreach ( $images as $image ) { ?>
          <div class="slide">
            <?= html::img(thumb($image, ['width' => 1500])->url()) ?>
          </div>
        <? } ?>
      </div>
    </div>
  <? } ?>
</article>
