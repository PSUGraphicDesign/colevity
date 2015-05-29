<article class="modal-controls">
  <div class="column full">
    <div class="close">
      <i class="fa fa-close"></i>
    </div>
  </div>
</article>

<article id="<?= $page->uid() ?>" class="troupe-member-details">
  <div class="column half">
    <h3><?= $page->title() ?></h3>
    <?= $page->bio()->kirbytext() ?>
  </div>
  <div class="column half">
    <?= html::img($page->profile_image()->url(), ['alt' => $page->title()]) ?>
  </div>
</article>
