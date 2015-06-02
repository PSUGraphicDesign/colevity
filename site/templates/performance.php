<article id="<?= $page->uid() ?>" class="performance-details">
  <? snippet('modal-controls') ?>
  <div class="column half mobile-full">
    <h3><?= $page->title() ?></h3>
    <?= $page->description()->kirbytext() ?>
  </div>
</article>
