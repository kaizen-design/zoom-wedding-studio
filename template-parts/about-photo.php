<section class="about-photo-section">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="section-content col-lg-11 col-xl-10 d-flex flex-column position-relative">
        <div class="about-photo-slider swiper">
          <div class="swiper-wrapper">
            <?php foreach(range(1, 4) as $_slide): ?>
              <div class="swiper-slide">
                <div class="about-photo-grid">
                  <div class="photo-card overflow-hidden">
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/tmp/about-slider/about-image-1.webp" 
                      class="img-fluid w-100 h-100" 
                      width="370"
                      height="564"
                      alt="<?= bloginfo('name') ?>"
                      loading="lazy"
                    />
                  </div>
                  <div class="photo-card overflow-hidden">
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/tmp/about-slider/about-image-2.webp" 
                      class="img-fluid w-100 h-100" 
                      width="270"
                      height="250"
                      alt="<?= bloginfo('name') ?>"
                      loading="lazy"
                    />
                  </div>
                  <div class="photo-card overflow-hidden">
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/tmp/about-slider/about-image-3.webp" 
                      class="img-fluid w-100 h-100" 
                      width="270"
                      height="250"
                      alt="<?= bloginfo('name') ?>"
                      loading="lazy"
                    />
                  </div>
                  <div class="photo-card overflow-hidden">
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/tmp/about-slider/about-image-4.webp" 
                      class="img-fluid w-100 h-100" 
                      width="570"
                      height="284"
                      alt="<?= bloginfo('name') ?>"
                      loading="lazy"
                    />
                  </div>
                </div>
              </div>
            <?php endforeach; ?>  
          </div>
        </div>     
        <div class="swiper-pagination position-static d-flex text-start"></div>
      </div> 
    </div>
  </div>
</section>