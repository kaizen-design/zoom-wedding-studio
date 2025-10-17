<?php if($gallery = get_field('gallery')): ?>
  <section class="masonry-section">
    <div class="container-xl d-flex flex-column">
      <?php if (get_field('gallery_title') || get_field('gallery_description')): ?>
        <div class="section-header d-flex flex-column align-items-center text-center">
          <?php if($gallery_title = get_field('gallery_title')): ?>
            <h2 class="section-title h1 mb-0" data-aos="fade-up">
              <?= $gallery_title ?>
            </h2>
          <?php endif; ?>
          <?php if($gallery_description = get_field('gallery_description')): ?>
            <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
              <?= wp_kses_post($gallery_description) ?>
            </p>
          <?php endif; ?>  
        </div> 
      <?php endif; ?>
      <div class="masonry-grid row">
        <?php foreach($gallery as $image): ?>
          <?php 
            $thumbnail_url = wp_get_attachment_image_url( $image['ID'], 'medium' );
            $large_url = wp_get_attachment_image_url( $image['ID'], 'large' );
          ?>
          <div class="col-6 col-sm-4 col-lg-3" data-aos="fade-up">
            <a 
              href="<?= esc_url( $large_url ) ?>" 
              class="masonry-card card"
              data-fslightbox="gallery"
            >
              <img 
                src="<?= esc_url($thumbnail_url) ?>" 
                class="w-100 img-fluid" 
                alt="<?= esc_attr($image['alt']) ? esc_attr($image['alt']) : get_the_title() ?>"
              />
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <?php if (get_field('gallery_button_text') && get_field('gallery_button_url')): ?>
        <a href="<?= get_field('gallery_button_url') ?>" class="btn btn-primary btn-lg d-flex align-items-center align-self-center" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
          <?= get_field('gallery_button_text') ?>
          <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
            <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
          </svg>
        </a>
      <?php endif; ?>  
    </div>
  </section>
<?php endif; ?>