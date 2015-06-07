<section class="hero" style="background-image: url('<?= $page->hero_image() ?>');">
  <article class="centered-layout wide">
    <div class="column half tablet-two-thirds mobile-full bare">
      <div class="circle">
        <div class="featured-info">
        <h1><?= $featured->title() ?></h1>
        <div class="featured-details">
          <? if (count($featured->all_shows()) > 1 ) { ?>
            <?= date('M jS', strtotime($featured->first_show()['date'])) ?> — <?= date('M jS', strtotime($featured->last_show()['date'])) ?>
          <? } else { ?>
            <?= $featured->date('M jS', 'opening_date') ?>
          <? } ?>
        </div>
        <div class="buy-tickets">
          <?= $featured->purchase_tickets_link() ?>
        </div>
        <div class="learn">
          <h2>Learn more</h2>
          <i class="fa fa-arrow-down"></i>
        </div>
      </div>
      </div>
    </div>

  </article>
</section>
