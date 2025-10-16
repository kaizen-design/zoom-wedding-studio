<section class="about-us-section" <?= get_field('awards_background') ? 'style="background-image: url(' . get_field('awards_background') . ')"' : '' ?>>
  <div class="container-xl">
    <div class="row justify-content-between gy-5">
      <div class="section-content col-md-6 col-xl-5 d-flex flex-column">
        <?php if($awards_subtitle = get_field('awards_subtitle')): ?>
          <h2 class="section-title text-uppercase mb-0" data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?= $awards_subtitle ?></h2>
        <?php endif; ?>  
        <?php if($awards_title = get_field('awards_title')): ?>
          <p class="lead mb-0" data-aos="fade-right" data-aos-delay="150" data-aos-anchor-placement="top-bottom">
            <?= $awards_title ?>
          </p>
        <?php endif; ?>  
        <?php if($awards_description = get_field('awards_description')): ?>
          <p class="mb-0" data-aos="fade-right" data-aos-delay="300" data-aos-anchor-placement="top-bottom">
            <?= wp_kses_post($awards_description) ?>
          </p>
        <?php endif; ?>  
        <?php if (get_field('awards_button_text') && get_field('awards_button_url')): ?>
          <a href="<?= get_field('awards_button_url') ?>" class="btn btn-primary btn-lg d-flex align-items-center align-self-start" data-aos="fade-right" data-aos-delay="450" data-aos-anchor-placement="top-bottom">
            <?= get_field('awards_button_text') ?>
            <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
              <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F" />
            </svg>
          </a>
        <?php endif; ?>  
      </div>
      <div class="col-md-6 col-xl-5 d-flex" data-aos="fade-left">
        <?php if($awards_image = get_field('awards_image')): ?>
          <img
            src="<?= $awards_image ?>"
            class="img-fluid mx-auto"
            alt="<?= get_field('awards_title') ?>"
            width="320"
            height="430"
            loading="lazy" 
          />
        <?php endif; ?>  
      </div>
    </div>
  </div>
</section>