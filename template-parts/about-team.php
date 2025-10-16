<?php if($team = get_field('team')): ?>
  <section class="about-team-section">
    <div class="container-xl">
      <div class="row align-items-center gy-4">
        <div class="section-content col-lg-5 col-xl-4 d-flex flex-column">
          <?php if (get_field('team_subtitle') || get_field('team_title')): ?>
            <h2 class="section-title mb-0 d-flex flex-column">
              <?php if($team_subtitle = get_field('team_subtitle')): ?>
                <small class="section-subtitle text-uppercase" data-aos="fade-left">
                  <?= $team_subtitle ?>
                </small>
              <?php endif; ?>  
              <?php if($team_title = get_field('team_title')): ?>  
                <span data-aos="fade-left" data-aos-delay=150>
                  <?= $team_title ?>
                </span>
              <?php endif; ?>  
            </h2>
          <?php endif; ?>  
          <?php if($team_description = get_field('team_description')): ?>
            <p class="mb-0" data-aos="fade-left" data-aos-delay=300>
              <?= wp_kses_post($team_description) ?>
            </p>
          <?php endif; ?>  
        </div> 
        <div class="col-lg-7">
          <div class="slider-box d-flex flex-column">
            <?php if( have_rows('team') ): ?>
              <div class="team-slider swiper">
                <div class="swiper-wrapper d-flex">
                  <?php $delay = 0; ?>
                  <?php while( have_rows('team') ): the_row(); ?>
                    <?php
                      $photo = wp_get_attachment_image_url( get_sub_field('photo'), 'thumbnail' );
                      $name = get_sub_field('name');
                      $title = get_sub_field('title');
                    ?>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                      <div class="team-card d-flex flex-column overflow-hidden">
                        <?php if($photo): ?>
                          <div class="card-img overflow-hidden ratio ratio-1x1">
                            <img 
                              src="<?= $photo ?>" 
                              class="img-fluid" 
                              width="200"
                              height="200"
                              loading="lazy"
                              alt="<?= $name ?>"
                            />
                          </div>
                        <?php endif; ?>  
                        <?php if($name || $title): ?>
                          <div class="card-caption d-flex flex-column">
                            <?php if($name): ?>
                              <h3 class="mb-0 text-uppercase"><?= $name ?></h3>
                            <?php endif; ?>  
                            <?php if($title): ?>
                              <p class="mb-0"><?= $title ?></p>
                            <?php endif; ?>  
                          </div>
                        <?php endif; ?>  
                      </div>
                    </div>
                    <?php $delay += 150; ?>
                  <?php endwhile; ?>  
                </div>
              </div>
            <?php endif; ?>  
            <div class="slider-footer d-flex align-items-center">
              <?php if (get_field('team_button_text') && get_field('team_button_url')): ?>
                <a href="<?= get_field('team_button_url') ?>" class="btn btn-primary btn-lg d-flex align-items-center me-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                  <?= get_field('team_button_text') ?>
                  <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
                    <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
                  </svg>
                </a>
              <?php endif; ?>  
              <span class="slides-counter d-none d-sm-flex" data-aos="fade-left" data-aos-anchor-placement="top-bottom">01 / <span class="total">11</span></span>
              <ul class="slider-controls list-unstyled mb-0 d-flex align-items-center" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
                <li>
                  <a href="#" class="slide-prev">
                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><polyline points="15 18 9 12 15 6"/></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="slide-next">
                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><polyline points="15 18 9 12 15 6"/></svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  