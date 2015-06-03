<? snippet('header') ?>

<main>

  <? # About ?>

  <section id="about" class="about">
    <article class="centered-layout">
      <div class="column three-quarters">
        <div class="tagline">
          <?= $about->tagline()->kirbytext() ?>
        </div>
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
        <div class="event-attend button blue">
          <?= $next_performance->purchase_tickets_link() ?>
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
        <div class= "class-attend button blue">
          <a href="<?= $classes->class_url() ?>" target="_blank">Sign up</a>
        </div>
      </div>
      <div class="column third">
        <h3>Workshops</h3>
        <ul>
          <? foreach ( $workshops as $workshop ) { ?>
            <li>
              <h4><?= html::a($workshop->url(), $workshop->title()) ?></h4>
              <div class="workshop-info">
                <span class="workshop time">
                  <?= $workshop->time() ?>
                </span>
                <span class="workshop date">
                  <?= $workshop->date() ?>
                </span>
                <span class="workshop location">
                  <?= $workshop->location()->json('address')?>
                </span>
              </div>
              <div class="workshop-description">
                <?= $workshop->description()->kirbytext() ?>
              </div>
              <div class= "workshop-attend button blue">
              <a href="<?= $workshop->workshop_url() ?>" target="_blank">Sign up</a>
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
          <div class="troupe-member" style="background-image: url('<?= $member->profile_image()->url() ?>')" data-modal-url="<?= $member->url() ?>">
            <h4><?= $member->name() ?></h4>
          </div>
        </div>
      <? } ?>
    </article>
  </section>

  <? # Member Modal Container ?>

  <section id="modal" class="modal"></section>

  <? # Giving ?>

  <section id="support" class="giving">

    <article class="centered-layout">

      <div class="column">

        <div class="giving-title">
          <?= $giving->title()->kirbytext() ?>
        </div>

        <div class="giving-info">
          <?= $giving->ask()->kirbytext() ?>
        </div>

        <div class="giving-options">

          <div class="giving-donate">
            <div><input type="submit" value="donate" name="donate" id="donate" class="giving-button"></div>
          </div>

          <div class="giving-volunteer">
            <div><input type="submit" value="volunteer" name="volunteer" id="volunteer" class="giving-button"></div>
          </div>

          <div class="giving-audition">
            <div><input type="submit" value="audition" name="audition" id="audition" class="giving-button"></div>
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
            <form action="//colevity.us11.list-manage.com/subscribe/post?u=5fe793bd09693ad3665579e69&amp;id=28ae5c49b0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mc-embedded-subscribe-form" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
  
                <input type="email" value="" name="EMAIL" class="mc_email" id="mce-EMAIL" class="mc-EMAIL" placeholder="email address" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_5fe793bd09693ad3665579e69_28ae5c49b0" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="conbutton"></div>
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

</main>

<? snippet('footer') ?>
