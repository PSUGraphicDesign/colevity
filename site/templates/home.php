<? snippet('header') ?>

<main>
  <section class="hero">
    <article class="centered-layout">
      <div class="column half">
        <h1><?= $site->title() ?></h1>
      </div>
    </article>
  </section>

  <? # Upcoming / Most Recent Performance ?>

  <section class="upcoming">
    <article class="centered-layout">
      <div class="column full">
        <h2>Upcoming</h2>
        <h3><?= $next_performance->title() ?></h3>
        <div class="event-info">
          <span class="info time">
            <?= $next_performance->time() ?>
          </span>
          <span class="info date">
            <?= $next_performance->date('M j, Y') ?>
          </span>
          <span class="info time">
            <?= $next_performance->location()->json('address') ?>
          </span>
        </div>
      </div>
    </article>
  </section>

  <? # Programs ?>

  <section class="programming">
    <article>
      <div class="column half">
        <h3>Workshops</h3>
        <ul>
          <? foreach ( $workshops as $workshop ) { ?>
            <li><?= $workshop->title() ?></li>
          <? } ?>
        </ul>
      </div>
      <div class="column half">
        <h3>Classes</h3>
        <ul>
          <? foreach ( $classes as $class ) { ?>
            <li><?= $class->title() ?></li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
  
  <? # Members ?>

  <section class="troupe-members">
    <article>
      <? foreach ( $troupe as $member ) { ?>
        <div class="column quarter troupe-member">
          <h4><?= $member->name() ?></h4>
          <div class="profile-image">
            <?= html::img($member->profile_image()->url()) ?>
          </div>
        </div>
      <? } ?>
    </article>
  </section>

</main>

<? snippet('footer') ?>
