<?php if($enable_instagram_section = get_field('enable_instagram_section')): ?>
  <section class="project-reels-section">
    <div class="container-xl">
      <div class="row justify-content-between">
        <div class="section-content col-md-5 col-xl-4 d-flex flex-column">
          <?php if (get_field('instagram_subtitle') || get_field('instagram_title')): ?>
            <h2 class="section-title mb-0 d-flex flex-column">
              <?php if($instagram_subtitle = get_field('instagram_subtitle')): ?>
                <small class="section-subtitle text-uppercase" data-aos="fade-right">
                  <?= $instagram_subtitle ?>
                </small>  
              <?php endif; ?>  
              <?php if($instagram_title = get_field('instagram_title')): ?>
                <span data-aos="fade-right" data-aos-delay="150">
                  <?= $instagram_title ?>
                </span>
              <?php endif; ?>  
            </h2>
          <?php endif; ?>  
          <?php if($instagram_description = get_field('instagram_description')): ?>
            <p class="mb-0" data-aos="fade-left" data-aos-delay="300">
              <?= wp_kses_post($instagram_description) ?>
            </p>
          <?php endif; ?>  
        </div>
        <div class="image-section col-md-7 position-relative">
          <div class="row align-items-end gx-6">
            <div class="col-6">
              <?php if($instagram_photo_1 = get_field('instagram_photo_1')): ?>
                <div class="section-img" data-aos="fade-up" data-aos-delay="300">
                  <img 
                    src="<?= $instagram_photo_1 ?>" 
                    alt="<?php the_title() ?>" 
                    class="object-fit-cover img-fluid w-100"
                    width="300"
                    height="530"
                    loading="lazy"
                  />
                </div>
              <?php endif; ?>  
            </div>
            <div class="col-6 d-flex flex-column">
              <?php if($instagram_photo_2 = get_field('instagram_photo_2')): ?>
                <div class="section-img" data-aos="fade-up">
                  <img 
                    src="<?= $instagram_photo_2 ?>" 
                    alt="<?php the_title() ?>" 
                    class="object-fit-cover img-fluid w-100"
                    width="300"
                    height="530"
                    loading="lazy"
                  />
                </div>
              <?php endif; ?> 
              <?php if(get_field('instagram_button_text') && get_field('instagram_button_url')): ?>
                <a href="<?= esc_url(get_field('instagram_button_url')) ?>" target="_blank" class="btn btn-primary btn-lg d-flex align-items-center justify-content-center text-uppercase rounded-0" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
                  <?= get_field('instagram_button_text') ?>
                </a>
              <?php endif; ?>  
            </div>
          </div>  
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  