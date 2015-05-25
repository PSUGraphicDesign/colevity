<? snippet('header') ?>

<main>

  <? # About ?>

  <section id="about" class="about">
    <article class="centered-layout tagline">
      <div class="column three-quarters">
        <!-- <div class="title">
          <?= $about->title()->kirbytext() ?>
        </div> -->
        <?= $about->tagline()->kirbytext() ?>
      </div>
    </article>
    <article class="centered-layout mission">
      <div class="column three-quarters">
        <?= $about->mission()->kirbytext() ?>
      </div>
    </article>
    <article class="centered-layout history">
      <div class="column half tablet-three-quarters mobile-full">
        <?= $about->history()->kirbytext() ?>
      </div>
    </article>
  </section>

  <? # Upcoming / Most Recent Performance ?>

  <section id="upcoming" class="upcoming">
    <article>
      <div class="column full">
        <h2>Upcoming</h2>
      </div>
    </article>
    <article class="centered-layout">
      <div class="column full">
        <h3><?= $next_performance->title() ?></h3>
        <div class="event-info">
          <span class="info time">
            <?= $next_performance->time() ?>
          </span>
          <span class="info date">
            <?= $next_performance->date('M j, Y', 'opening_date') ?>
          </span>
          <span class="info time">
            <?= $next_performance->location()->json('address') ?>
          </span>
        </div>
        <div class="event-description">
          <?= $next_performance->description()->kirbytext() ?>
        </div>
        <div class="event-attend">
          <?= $next_performance->purchase_tickets_link() ?>
        </div>
      </div>
    </article>
  </section>

  <? # Programs ?>

  <section id="programming" class="programming">
    <article>
      <div class="column full">
        <h2>Programs</h2>
      </div>
    </article>
    <article>
      <div class="column half">
        <h3>Workshops</h3>
        <ul>
          <? foreach ( $workshops as $workshop ) { ?>
            <li>
              <h4><?= html::a($workshop->url(), $workshop->title()) ?></h4>
              <div class="workshop-info">
                <span class="workshop time">
                  <?= $workshop->time() ?>
                </span>
                <span class="workshop day">
                  <?= $workshop->day() ?>
                </span>
                <span class="workshop location">
                  <?= $workshop->location()->json('address')?>
                </span>
              </div>
              <div class="workshop-description">
                <?= $workshop->description()->kirbytext() ?>
              </div>
            </li>
          <? } ?>
        </ul>
      </div>
      <div class="column half">
        <h3>Classes</h3>
        <ul>
          <? foreach ( $classes as $class ) { ?>
            <li>
              <h4><?= html::a($class->url(), $class->title()) ?></h4>
                <div class="class-info">
                <span class="class time">
                  <?= $class->time() ?>
                </span>
                <span class="class day">
                  <?= $class->day() ?>
                </span>
              </div>
              <?= $class->description()->kirbytext() ?>
            </li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
  
  <? # Members ?>

  <section id="members" class="troupe-members">
    <article>
      <div class="column full">
        <h2>Members</h2>
      </div>
    </article>
    <article class="centered-layout">
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

  <? # Giving ?>

  <section id="support" class="giving">
    <article class="centered-layout">
      <div class="column half">
        <?= $giving->ask()->kirbytext() ?>
      </div>
    </article>
  </section>

  <? # Performances ?>

  <section id="performances" class="performances">
    <article>
      <div class="column full">
        <h2>Performances</h2>
      </div>
    </article>
    <article class="centered-layout">
      <? foreach ( $performances as $performance ) { ?>
        <div class="column quarter">
          <h4><?= html::a($performance->url(), $performance->title()->html()) ?></h4>
        </div>
      <? } ?>
    </article>
  </section>

  <? # Contact ?>

  <section id="contact" class="contact">
    <article class="centered-layout">
      <div class="column half">
        <?= html::img('/assets/images/CoLevity-Tealblock.jpg', ['alt' => $site->title()]) ?>
        <?= $contact->outreach()->kirbytext() ?>
      </div>
      <div class="newsletter-signup column half" >
        <?= $contact->newsletter_cta()->kirbytext() ?>
      </div>
    </article>
  </section>

  <? # Location ?>

  <section class="location">
    <article class="map">
      <div data-center-lat="<?= $contact->location()->json('lat') ?>" data-center-lng="<?= $contact->location()->json('lng') ?>" data-zoom="<?= c::get('place.defaults.zoom') ?>" id="map-canvas" class="map-canvas"></div>
    </article>
    <article class="contact-info">
      <div class="column third">
        <h5>Contact Us</h5>
        <div class="address">
          <?= $contact->address()->kirbytext() ?>
        </div>
        <div class="phone">
          <?= $contact->phone()->html() ?>
        </div>
        <div class="email">
          <?= $contact->email()->html() ?>
        </div>
        <div class="social-media">
          <? foreach ($contact->social_media()->yaml() as $link ) { ?>
            <?= CL::social_media_icon_for($link) ?>
          <? } ?>
        </div>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
