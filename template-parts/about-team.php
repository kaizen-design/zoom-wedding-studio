<section class="about-team-section">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="section-content col-lg-5 col-xl-4 d-flex flex-column">
        <h2 class="section-title mb-0 d-flex flex-column">
          <small class="section-subtitle text-uppercase" data-aos="fade-left">Our team</small>
          <span data-aos="fade-left" data-aos-delay=150>The people who create your story</span>
        </h2>
        <p class="mb-0" data-aos="fade-left" data-aos-delay=300>Meet our team members - each with their own vision, but united in their desire to create the best and exceeding the expectations of our cherished clients. Even for more intimate weddings, our experts are here to create stunning photos and videos, ensuring that every precious moment is beautifully preserved.</p>
      </div> 
      <div class="col-lg-7">
        <div class="slider-box d-flex flex-column">
          <div class="team-slider swiper">
            <div class="swiper-wrapper d-flex">
              <?php foreach(range(1, 2) as $_i): ?>
                <div class="swiper-slide">
                  <div class="team-card d-flex flex-column overflow-hidden" data-aos="fade-up">
                    <div class="card-img overflow-hidden ratio ratio-1x1">
                      <img 
                        src="<?= get_template_directory_uri() ?>/assets/tmp/team/member-1.webp" 
                        class="img-fluid" 
                        width="190"
                        height="190"
                        loading="lazy"
                        alt="Jean"
                      />
                    </div>
                    <div class="card-caption d-flex flex-column">
                      <h3 class="mb-0 text-uppercase">Jean</h3>
                      <p class="mb-0">Photographer</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-card d-flex flex-column overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                    <div class="card-img overflow-hidden ratio ratio-1x1">
                      <img 
                        src="<?= get_template_directory_uri() ?>/assets/tmp/team/member-2.webp" 
                        class="img-fluid" 
                        width="190"
                        height="190"
                        loading="lazy"
                        alt="Kate"
                      />
                    </div>
                    <div class="card-caption d-flex flex-column">
                      <h3 class="mb-0 text-uppercase">Kate</h3>
                      <p class="mb-0">Photographer</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-card d-flex flex-column overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-img overflow-hidden ratio ratio-1x1">
                      <img 
                        src="<?= get_template_directory_uri() ?>/assets/tmp/team/member-3.webp" 
                        class="img-fluid" 
                        width="190"
                        height="190"
                        loading="lazy"
                        alt="Maria"
                      />
                    </div>
                    <div class="card-caption d-flex flex-column">
                      <h3 class="mb-0 text-uppercase">Maria</h3>
                      <p class="mb-0">Photographer</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-card d-flex flex-column overflow-hidden" data-aos="fade-up" data-aos-delay="450">
                    <div class="card-img overflow-hidden ratio ratio-1x1">
                      <img 
                        src="<?= get_template_directory_uri() ?>/assets/tmp/team/member-4.webp" 
                        class="img-fluid" 
                        width="190"
                        height="190"
                        loading="lazy"
                        alt="Denis"
                      />
                    </div>
                    <div class="card-caption d-flex flex-column">
                      <h3 class="mb-0 text-uppercase">Denis</h3>
                      <p class="mb-0">Videographer</p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>  
            </div>
          </div>
          <div class="slider-footer d-flex align-items-center">
            <a href="#" class="btn btn-primary btn-lg d-flex align-items-center me-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
              Book Us
              <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
                <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
              </svg>
            </a>
            <span class="slides-counter d-none d-sm-flex" data-aos="fade-left" data-aos-anchor-placement="top-bottom">01 / <span class="total">11</span></span>
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