<?php if($examples = get_field('examples')): ?>
  <section class="slider-section">
    <div class="container-xl d-flex flex-column">
      <?php if (get_field('examples_title') || get_field('examples_description')): ?>
        <div class="section-header row align-items-center">
          <?php if($examples_title = get_field('examples_title')): ?>
            <div class="col-md-6" data-aos="fade-right">
              <h2 class="section-title h1 mb-0">
                <?= $examples_title ?>
              </h2>
            </div>
          <?php endif; ?>  
          <?php if($examples_description = get_field('examples_description')): ?>  
            <div class="col-md-6" data-aos="fade-left">
              <p class="mb-0">
                <?= wp_kses_post($examples_description) ?>
              </p>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>  
      <div class="slider-row row">
        <div class="col-lg-8 col-xl-7 offset-lg-2" data-aos="fade-up">
          <div class="slider-box d-flex flex-column">
            <?php if( have_rows('examples') ): ?>
              <div class="portfolio-slider swiper overflow-visible">
                <div class="swiper-wrapper d-flex">
                  <?php while( have_rows('examples') ): the_row(); ?>
                    <?php
                      $video = get_sub_field('video', false);
                    ?>
                    <?php if($video): ?>
                      <div class="swiper-slide d-flex">
                        <div class="portfolio-slider-card d-flex ratio ratio-16x9">
                          <iframe src="<?= $video ?>" loading="lazy" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                      </div>
                    <?php endif; ?>  
                  <?php endwhile; ?>  
                </div>
              </div>
            <?php endif; ?>  
            <div class="slider-footer d-flex align-items-center">
              <?php if (get_field('examples_button_text') && get_field('examples_button_url')): ?>
                <a href="<?= get_field('examples_button_url') ?>" class="btn btn-primary btn-lg d-flex align-items-center me-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                  <?= get_field('examples_button_text') ?>
                  <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
                    <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
                  </svg>
                </a>
              <?php endif; ?>  
              <span class="slides-counter d-none d-sm-flex" data-aos="fade-left" data-aos-anchor-placement="top-bottom">01 / <span class="total">25</span></span>
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