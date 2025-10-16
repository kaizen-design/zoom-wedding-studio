<?php if($video = get_field('video', false, false)): ?>
  <section class="about-video-section">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="section-content col-lg-11 col-xl-10 d-flex flex-column">
          <?php if (get_field('video_title') || get_field('video_description')): ?>
            <div class="section-header d-flex flex-column align-items-center text-center">
              <?php if($video_title = get_field('video_title')): ?>
                <h2 class="section-title mb-0" data-aos="fade-up">
                  <?= $video_title ?>
                </h2>
              <?php endif; ?>  
              <?php if($video_description = get_field('video_description')): ?>  
                <p class="mb-0" data-aos="fade-up" data-aos-delay="150">
                  <?= wp_kses_post($video_description) ?>
                </p>
              <?php endif; ?>  
            </div>
          <?php endif; ?>  
          <div class="section-video ratio ratio-16x9" data-aos="fade-up" data-aos-delay="300">
            <iframe src="<?= $video ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" title="The Caspers Wedding Highlight"></iframe>
          </div>  
        </div> 
      </div>
    </div>
  </section>
<?php endif; ?>