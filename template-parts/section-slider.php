<section class="slider-section">
  <div class="container-xl d-flex flex-column">
    <div class="section-header row align-items-center">
      <div class="col-md-6" data-aos="fade-right">
        <h2 class="section-title h1 mb-0">What is your wedding going to look like?</h2>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <p class="mb-0">Our mission is to slow down in the moments that can seem rushed and capture a story worth reliving a thousand times.</p>
      </div>
    </div>
    <div class="slider-row row">
      <div class="col-lg-8 col-xl-7 offset-lg-2" data-aos="fade-up">
        <div class="slider-box d-flex flex-column">
          <div class="portfolio-slider swiper overflow-visible">
            <div class="swiper-wrapper d-flex">
              <?php foreach(range(1, 12) as $_i): ?>
                <div class="swiper-slide">
                  <a 
                    href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" 
                    data-fslightbox="portfolio-slider" 
                    data-poster="<?= get_template_directory_uri() ?>/assets/tmp/portfolio-slider/slide-1.webp"
                    class="portfolio-slider-card d-flex position-relative"
                  >
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/tmp/portfolio-slider/slide-1.webp" 
                      class="img-fluid" 
                      loading="lazy"
                      alt=""
                    />
                    <svg class="card-icon svg-video position-absolute top-50 start-50 translate-middle" width="58" viewBox="0 0 32 32"><title/><g data-name="youtube youtuber video play" id="youtube_youtuber_video_play"><path d="M30,12a5.71,5.71,0,0,0-5.31-5.7C18.92,6,13.06,6,7.33,6.28,4.51,6.28,2,9,2,12a43.69,43.69,0,0,0,0,8.72,5.32,5.32,0,0,0,5.28,5.33h0q4.35.24,8.72.24t8.67-.23A5.34,5.34,0,0,0,30,20.8,31.67,31.67,0,0,0,30,12Zm-2,8.63a.49.49,0,0,0,0,.12,3.36,3.36,0,0,1-3.39,3.34,166,166,0,0,1-17.28,0A3.36,3.36,0,0,1,4,20.65a42,42,0,0,1,0-8.47.45.45,0,0,0,0-.11A3.78,3.78,0,0,1,7.38,8.28c2.86-.13,5.74-.19,8.62-.19s5.76.06,8.62.19h.05c1.71,0,3.33,1.84,3.33,3.79a.76.76,0,0,0,0,.15A30.11,30.11,0,0,1,28,20.61Z"/><path d="M20.79,15.51l-7.14-3.68a1,1,0,1,0-.92,1.78l5.43,2.79-4,2.07V16.4a1,1,0,0,0-2,0v3.72a1,1,0,0,0,1,1,1,1,0,0,0,.46-.11l7.14-3.72a1,1,0,0,0,.54-.89A1,1,0,0,0,20.79,15.51Z"/></g></svg>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a 
                    href="<?= get_template_directory_uri() ?>/assets/tmp/portfolio-slider/slide-2.webp" 
                    data-fslightbox="portfolio-slider" 
                    class="portfolio-slider-card d-flex position-relative"
                  >
                    <img 
                      src="<?= get_template_directory_uri() ?>/assets/tmp/portfolio-slider/slide-2.webp" 
                      class="img-fluid" 
                      loading="lazy"
                      alt=""
                    />
                  </a>
                </div>
              <?php endforeach; ?>  
            </div>
          </div>
          <div class="slider-footer d-flex align-items-center">
            <a href="#" class="btn btn-primary btn-lg d-flex align-items-center me-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
              View all
              <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
                <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
              </svg>
            </a>
            <span class="slides-counter d-none d-sm-flex" data-aos="fade-left" data-aos-anchor-placement="top-bottom">01 / <span class="total">25</span></span>
            <ul class="slider-controls list-unstyled mb-0 d-flex align-items-center" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
              <li>
                <a href="#" class="slide-prev">
                  <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><polyline points="15 18 9 12 15 6"/></svg>
                </a>
              </li>
              <li>
                <a href="#" class="slide-next">
                  <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><polyline points="15 18 9 12 15 6"/></svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>