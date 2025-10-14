<section class="projects-services-section">
  <div class="container-xl">
    <div class="row align-items-lg-center">
      <div class="section-image position-relative col-md-7 col-lg-6">
        <?php if($services_image = get_field('services_image')): ?>
          <img 
            src="<?= $services_image ?>" 
            class="img-fluid w-100 d-none d-md-block"
            width="570"
            height="740"
            loading="lazy" 
            alt="Wedding Services" 
            data-aos="fade-right"
          />
        <?php endif; ?>  
        <?php if($services_image_mobile = get_field('services_image_mobile')): ?>  
          <img 
            src="<?= $services_image_mobile ?>" 
            class="img-fluid w-100 h-100 d-md-none"
            width="767"
            height="474"
            loading="lazy" 
            alt="Wedding Services" 
            data-aos="fade-up"
          />
        <?php endif; ?>  
        <span class="square" data-aos="fade-right" data-aos-delay="300"></span>
      </div>
      <div class="section-content position-relative d-flex flex-column col-md-5 col-lg-6">
        <?php if (get_field('services_subtitle') || get_field('services_title')): ?>
          <h2 class="section-title mb-0 d-flex flex-column">
            <?php if($services_subtitle = get_field('services_subtitle')): ?>
              <small class="text-uppercase" data-aos="fade-left">
                <?= $services_subtitle ?>
              </small>
            <?php endif; ?>  
            <?php if($services_title = get_field('services_title')): ?>
              <span data-aos="fade-left" data-aos-delay="150" data-aos-anchor-placement="top-bottom">
                <?= $services_title ?>
              </span>
            <?php endif; ?>  
          </h2>
        <?php endif; ?>  
        <?php if($services_description = get_field('services_description')): ?>
          <p data-aos="fade-left" data-aos-delay="300" data-aos-anchor-placement="top-bottom">
            <?= wp_kses_post($services_description) ?>
          </p>
        <?php endif; ?>   
        <?php if( have_rows('services') ): ?>
          <div class="project-services-list d-flex align-self-end">
            <?php $delay = 0; ?>
            <?php while( have_rows('services') ): the_row(); ?>
              <?php
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
                $text = get_sub_field('text');
              ?>
              <a href="#" class="list-item d-flex flex-sm-column align-items-center text-center" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                <?php if($icon): ?>
                  <div class="item-icon d-flex justify-content-center align-items-center">
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/images/project-services/<?= $icon ?>.webp" 
                      class="img-fluid"
                      width="90"
                      height="90"
                      loading="lazy" 
                      alt="<?= $title ?>" 
                    />
                  </div>
                <?php endif; ?>  
                <?php if($title || $text): ?>
                  <div class="item-meta d-flex flex-column">
                    <?php if($title): ?>
                      <h3 class="text-uppercase"><?= $title ?></h3>
                    <?php endif; ?> 
                    <?php if($text): ?> 
                      <p><?= $text ?></p>
                    <?php endif; ?>  
                  </div>
                <?php endif; ?>  
              </a>
              <?php $delay += 300; ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>  
      </div>
    </div>
  </div>
</section>