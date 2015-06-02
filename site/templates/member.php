
<article id="<?= $page->uid() ?>" class="troupe-member-details">
  <? snippet('modal-controls') ?>
  <div class="column half tablet-two-thirds mobile-full">
    <h3><?= $page->title() ?></h3>
    <?= $page->bio()->kirbytext() ?>
  </div>
  <div class="column half tablet-third mobile-full">
    <?= html::img($page->profile_image()->url(), ['alt' => $page->title()]) ?>
  </div>
</article>
