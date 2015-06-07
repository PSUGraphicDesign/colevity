<? snippet('header') ?>

<main>

  <? # About ?>

  <section id="about" class="about dark" style="background-image: url('<?= $about->hero_image() ?>');">
    <article class="centered-layout">
      <div class="column three-quarters mobile-full">
        <div class="tagline">
          <?= $about->tagline()->kirbytext() ?>
        </div>
      </div>
      <div class="column half tablet-two-thirds mobile-full">
        <div class="mission">
          <?= $about->mission()->kirbytext() ?>
        </div>
        <div class="history">
          <?= $about->history()->kirbytext() ?>
        </div>
      </div>
    </article>
  </section>

  <? # Programs ?>

  <section id="programming" class="programming">
    <article>
      <div class="column full section-label">
        <h2>Programming</h2>
      </div>
    </article>
    <article>
      <div class="column third">
        <h3>Upcoming Shows</h3>
        <h4><?= $next_performance->title() ?></h4>
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
          <?= $next_performance->purchase_tickets_link('blue full-width') ?>
        </div>
      </div>
      <div class="column third">
        <h3>Classes</h3>
        <div class="class-tagline">
          <h4><?= $classes->tagline()->kirbytext() ?></h4>
        </div>
        <div class="class-description">
          <?= $classes->description()->kirbytext() ?>
        </div>
        <div class="class-attend">
          <a href="<?= $classes->class_url() ?>" class="button blue full-width" target="_blank">Sign up</a>
        </div>
      </div>
      <div class="column third">
        <h3>Workshops</h3>
        <ul>
          <? foreach ( $workshops as $workshop ) { ?>
            <li>
              <h4><?= html::a($workshop->workshop_url(), $workshop->title()) ?></h4>
              <div class="workshop-info">
                <span class="workshop time">
                  <?= $workshop->time() ?>
                </span>
                <span class="workshop date">
                  <?= $workshop->date('M j, Y') ?>
                </span>
                <span class="workshop location">
                  <?= $workshop->location()->json('address')?>
                </span>
              </div>
              <div class="workshop-description">
                <?= $workshop->description()->kirbytext() ?>
              </div>
              <div class= "workshop-attend">
              <a href="<?= $workshop->workshop_url() ?>" class=" button blue full-width" target="_blank">Sign up</a>
              </div>
            </li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
  
  <? # Members ?>

  <section id="members" class="troupe-members">
    <article>
      <div class="column full section-label">
        <h2>Members</h2>
      </div>
    </article>
    <article class="centered-layout">
      <? foreach ( $troupe as $member ) { ?>
        <div class="column quarter tablet-third mobile-half">
          <div class="troupe-member" style="background-image: url('<?= $member->profile_image_thumb()->url() ?>')" data-modal-url="<?= $member->url() ?>">
            <h4>
              <small><?= $member->role()->html() ?></small>
              <?= $member->name()->html() ?>
            </h4>
          </div>
        </div>
      <? } ?>
    </article>
  </section>

  <? # Giving ?>

  <section id="support" class="dark giving" style="background-image: url('<?= $giving->hero_image() ?>');">

    <article class="centered-layout">

      <div class="column half mobile-full">

        <div class="giving-title">
          <?= $giving->title()->kirbytext() ?>
        </div>

        <div class="giving-info">
          <?= $giving->ask()->kirbytext() ?>
        </div>

        <div class="giving-options">

          <div class="giving-donate">

            <a href="<?= $giving->class_url() ?>" class="button beige" target="_blank">Donate</a>

          </div>

        </div>

      </div>

    </article>

  </section>

  <? # Performances ?>

  <section id="performances" class="performances">
    <article>
      <div class="column full section-label">
        <h2>Performances</h2>
      </div>
    </article>
    <article class="centered-layout">
      <? foreach ( $performances as $performance ) { ?>
        <div class="column quarter tablet-third mobile-half">
          <div class="performance" data-modal-url="<?= $performance->url() ?>">
            <h4><?= $performance->title() ?></h4>
          </div>
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
      <div id="mc_embed_signup" class="mc_embed_signup">
        <form action="//colevity.us11.list-manage.com/subscribe/post?u=54ae54ebe59c8fd27d9bf3e9f&amp;id=5d9579d8ad" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mc-embedded-subscribe-form" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
  
            <input type="email" value="" name="EMAIL" class="mc_email" id="mce-EMAIL" placeholder="email address" required>
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_54ae54ebe59c8fd27d9bf3e9f_5d9579d8ad" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
</form>
</div>

<!--End mc_embed_signup-->
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

  <? # Modal Container ?>

  <section id="modal" class="modal"></section>

</main>

<? snippet('footer') ?>
