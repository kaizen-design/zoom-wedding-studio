<?php if($services = get_field('services')): ?>
  <section class="services-section" data-aos="fade-up">
    <div class="container-xl">
      <div class="services-box d-flex flex-column">
        <?php if($services_title = get_field('services_title')): ?>
          <h2 class="section-title text-uppercase mb-0 text-center position-relative d-flex justify-content-center">
            <span class="position-relative">Our Services</span>
          </h2>
        <?php endif; ?>  
        <div class="row">
          <div class="col-4 col-md-3 col-lg-2 offset-xl-1" data-aos="fade-right" data-aos-delay="150" data-aos-anchor-placement="top-bottom">
            <img 
              src="<?= get_template_directory_uri() ?>/assets/images/bird.webp" 
              class="img-fluid" 
              loading="lazy"
              alt="<?= get_field('services') ?>"
              width="153"
              height="153"
            />
          </div>
          <div class="col-8 col-md-9 col-lg-10 col-xl-9 section-content d-flex flex-column">
            <?php if($services_description = get_field('services_description')): ?>
              <p class="mb-0" data-aos="fade-left" data-aos-delay="150" data-aos-anchor-placement="top-bottom">
                <?= wp_kses_post($services_description) ?>
              </p>
            <?php endif; ?>
            <?php if( have_rows('services') ): ?>  
              <ul class="services-list list-unstyled mb-0 d-flex flex-column flex-lg-row align-items-lg-center">
                <?php 
                  $total_rows = count( get_field('services') );
                  $current_row = 0;
                  $delay = 300; 
                ?>
                <?php while( have_rows('services') ): the_row(); ?>
                  <?php
                    $service = get_sub_field('service');
                    $current_row++;
                    $is_last = ($current_row === $total_rows);
                  ?>
                  <li class="d-flex align-items-center" data-aos="fade-left" data-aos-delay="<?= $delay ?>" data-aos-anchor-placement="top-bottom">
                    <svg class="d-lg-none" viewBox="0 0 256 256"><rect fill="none" height="256" width="256"/><path d="M176,32a60,60,0,0,0-48,24A60,60,0,0,0,20,92c0,71.9,99.9,128.6,104.1,131a7.8,7.8,0,0,0,3.9,1,7.6,7.6,0,0,0,3.9-1,314.3,314.3,0,0,0,51.5-37.6C218.3,154,236,122.6,236,92A60,60,0,0,0,176,32Z"/></svg>
                    <?= $service ?>
                  </li>
                  <?php if( !$is_last ): ?>
                    <?php $delay += 150; ?>
                    <li class="d-none d-lg-flex" data-aos="fade-left" data-aos-delay="<?= $delay ?>" data-aos-anchor-placement="top-bottom">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect fill="none" height="256" width="256"/><path d="M176,32a60,60,0,0,0-48,24A60,60,0,0,0,20,92c0,71.9,99.9,128.6,104.1,131a7.8,7.8,0,0,0,3.9,1,7.6,7.6,0,0,0,3.9-1,314.3,314.3,0,0,0,51.5-37.6C218.3,154,236,122.6,236,92A60,60,0,0,0,176,32Z"/></svg>
                    </li>
                  <?php endif; ?>  
                  <?php $delay += 150; ?>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>  
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  