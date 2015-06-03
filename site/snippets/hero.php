<section class="hero" style="background-image: url('<?= $page->hero_image() ?>');">
  <article class="centered-layout">
    <div class="column two-thirds">
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
        <div class= "buy-tickets-button">
          <?= $featured->purchase_tickets_link() ?>
        </div>
        <div class="learn">
          <h2>Learn more</h2>
        </div>
        <div id="triangle-down"></div>
      </div>
      </div>
    </div>

  </article>
</section>
