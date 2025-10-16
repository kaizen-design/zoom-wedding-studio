<?php if($additional_services = get_field('additional_services')): ?>
  <section class="pricing-addons-section">
    <div class="container-xl position-relative">
      <div class="row align-items-stretch">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="addons-card d-flex flex-column h-100" data-aos="fade-right">
            <?php if (get_field('services_subtitle') || get_field('services_title')): ?>
              <h2 class="card-title mb-0 d-flex flex-column align-items-center text-center text-uppercase">
                <?php if($services_subtitle = get_field('services_subtitle')): ?>
                  <small class="card-subtitle">
                    <?= $services_subtitle ?>
                  </small>
                <?php endif; ?>  
                <?php if($services_title = get_field('services_title')): ?>  
                  <?= $services_title ?>
                <?php endif; ?>  
              </h2>
            <?php endif; ?>  
            <?php if( have_rows('additional_services') ): ?>
              <ul class="pricing-addons-list list-unstyled mb-0 d-flex flex-column">
                <?php while( have_rows('additional_services') ): the_row(); ?>
                  <?php
                    $title = get_sub_field('title');
                    $price = get_sub_field('price');
                    $description = get_sub_field('description');
                  ?>
                  <li class="list-item d-flex flex-column">
                    <?php if($title || $price): ?>
                      <div class="item-header d-flex justify-content-between align-items-center">
                        <?php if($title): ?>
                          <h3 class="item-title mb-0"><?= $title ?></h3>
                        <?php endif; ?>   
                        <?php if($price): ?>  
                          <span class="item-price mb-0"><?= $price ?></span>
                        <?php endif; ?>   
                      </div>
                    <?php endif; ?>  
                    <?php if($description): ?>
                      <p class="item-description mb-0">
                        <?= $description ?>
                      </p>
                    <?php endif; ?>  
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>  
          </div>
        </div>
        <?php if (get_field('addon_image_1') || get_field('addon_image_2')): ?>
          <div class="col-md-4 col-lg-3 col-xl-4 image-column d-none d-md-flex flex-column" data-aos="fade-left">
            <?php if($addon_image_1 = get_field('addon_image_1')): ?>
              <div class="zoom-image-card overflow-hidden">
                <img 
                  src="<?= $addon_image_1 ?>" 
                  class="card-img img-fluid w-100 h-100"
                  width="370"
                  height="564"
                  loading="lazy" 
                  alt="" 
                />  
              </div> 
            <?php endif; ?>  
            <?php if($addon_image_2 = get_field('addon_image_2')): ?>
              <div class="zoom-image-card overflow-hidden">
                <img 
                  src="<?= $addon_image_2 ?>" 
                  class="card-img img-fluid w-100 h-100"
                  width="370"
                  height="242"
                  loading="lazy" 
                  alt="" 
                />  
              </div> 
            <?php endif; ?>   
          </div>
        <?php endif; ?>  
        <?php if (get_field('addon_image_3') || get_field('addon_image_4')): ?>
          <div class="d-none col-lg-3 col-xl-3 image-column d-lg-flex flex-column" data-aos="fade-left" data-aos-delay="300">
            <?php if($addon_image_3 = get_field('addon_image_3')): ?>
              <div class="zoom-image-card overflow-hidden">
                <img 
                  src="<?= $addon_image_3 ?>" 
                  class="card-img img-fluid w-100 h-100"
                  width="270"
                  height="403"
                  loading="lazy" 
                  alt="" 
                />  
              </div> 
            <?php endif; ?>  
            <?php if($addon_image_4 = get_field('addon_image_4')): ?>
              <div class="zoom-image-card overflow-hidden">
                <img 
                  src="<?= $addon_image_4 ?>" 
                  class="card-img img-fluid w-100 h-100"
                  width="270"
                  height="403"
                  loading="lazy" 
                  alt="" 
                />  
              </div> 
            <?php endif; ?>  
          </div>
        <?php endif; ?>  
      </div>
    </div>
  </section>
<?php endif; ?>  