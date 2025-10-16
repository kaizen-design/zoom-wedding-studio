<section class="advantages-section">
  <div class="container-xl">
     <div class="row">
        <div class="section-content col-md-8 offset-md-3 d-flex flex-column position-relative">
          <?php if (get_field('advantages_subtitle') || get_field('advantages_title')): ?>
            <h2 class="section-title mb-0 d-flex flex-column">
              <?php if($advantages_subtitle = get_field('advantages_subtitle')): ?>
                <small class="section-subtitle text-uppercase" data-aos="fade-left">
                  <?= $advantages_subtitle ?>
                </small>
              <?php endif; ?>  
              <?php if($advantages_title = get_field('advantages_title')): ?>  
                <span data-aos="fade-left" data-aos-delay=150>
                  <?= $advantages_title ?>
                </span>
              <?php endif; ?>  
            </h2>
          <?php endif; ?>  
          <?php if($advantages_description = get_field('advantages_description')): ?>
            <p class="mb-0" data-aos="fade-left" data-aos-delay=300>
              <?= wp_kses_post($advantages_description) ?>
            </p>
          <?php endif; ?>
          <?php if (get_field('advantages_button_text') && get_field('advantages_button_url')): ?>
            <a href="<?= get_field('advantages_button_url') ?>" class="btn btn-primary btn-lg d-flex align-items-center align-self-start" data-aos="fade-left">
              <?= get_field('advantages_button_text') ?>
              <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
                <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
              </svg>
            </a>
          <?php endif; ?>  
          <?php if($advantages_image = get_field('advantages_image')): ?>
            <img 
              src="<?= $advantages_image ?>" 
              class="section-image img-fluid d-none d-lg-block" 
              width="535"
              height="648"
              alt="<?= $advantages_title ?>"
              loading="lazy"
              data-aos="fade-right"
            />
          <?php endif; ?>  
        </div>
     </div>
  </div>
</section>