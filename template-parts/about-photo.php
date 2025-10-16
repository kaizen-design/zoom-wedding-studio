<?php if($photo_gallery = get_field('photo_gallery')): ?>
  <?php 
    $chunks = array_chunk($photo_gallery, 4);
  ?>
  <section class="about-photo-section">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="section-content col-lg-11 col-xl-10 d-flex flex-column position-relative">
          <div class="about-photo-slider swiper">
            <div class="swiper-wrapper">
              <?php foreach($chunks as $chunk): ?>
                <div class="swiper-slide">
                  <div class="about-photo-grid">
                    <?php $delay = 0; ?>
                    <?php foreach($chunk as $k => $image): ?>
                      <?php 
                        $width = '';
                        $height = '';
                        switch ($k) {
                          case 0:
                            $width = 370;
                            $height = 564;
                            break;
                          case 1:
                            $width = 270;
                            $height = 250;
                            break;
                          case 2:
                            $width = 270;
                            $height = 250;
                            break;
                          case 3:
                            $width = 570;
                            $height = 284;
                            break;
                          default:
                            break;          
                        }  
                      ?>
                      <div class="photo-card overflow-hidden" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <img 
                          src="<?= esc_url( $image['url'] ) ?>" 
                          class="img-fluid w-100 h-100" 
                          width="<?= $width ?>"
                          height="<?= $height ?>"
                          alt="<?= esc_attr($image['alt']) ? esc_attr($image['alt']) : bloginfo('name') ?>"
                          loading="lazy"
                        />
                      </div>
                      <?php $delay += 150; ?>
                    <?php endforeach; ?>
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
<?php endif; ?>  