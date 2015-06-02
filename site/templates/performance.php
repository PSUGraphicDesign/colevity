<article id="<?= $page->uid() ?>" class="performance-details">
  <? snippet('modal-controls') ?>
  <div class="column half mobile-full">
    <h2><?= $page->title() ?></h2>
    <?= $page->description()->kirbytext() ?>
  </div>
</article>
