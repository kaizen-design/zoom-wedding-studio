<section class="contact-section position-relative">
  <div class="container-xl">
     <div class="row justify-content-between align-items-center gy-4">
        <div class="section-content col-md-6" data-aos="fade-right">
          <form class="contact-form d-flex flex-column">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="service" id="service-photo-video" value="Photo+Video" autocomplete="off" checked>
              <label class="btn btn-outline-primary" for="service-photo-video">Photo+Video</label>
              <input type="radio" class="btn-check" name="service" id="service-photo" value="Photo" autocomplete="off">
              <label class="btn btn-outline-primary" for="service-photo">Photo</label>
              <input type="radio" class="btn-check" name="service" id="service-video" value="Video" autocomplete="off">
              <label class="btn btn-outline-primary" for="service-video">Video</label>
            </div>
            <input type="text" class="form-control" name="name" placeholder="Full name(s)*" autocomplete="off" required />
            <div class="row">
              <div class="col-sm-6">
                <input type="email" class="form-control" name="email" placeholder="Email*" autocomplete="off" required />
              </div>
              <div class="col-sm-6">
                <input type="tel" class="form-control" name="phone" placeholder="Phone*" autocomplete="off" required />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control" name="date" placeholder="Wedding Date*" autocomplete="off" required />
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="address" placeholder="Venue Address (Optional)" autocomplete="off" />
              </div>
            </div>
            <textarea class="form-control" name="message" rows="4" placeholder="Your message" autocomplete="off"></textarea>
            <div class="form-footer d-flex flex-column flex-lg-row align-items-center">
              <button type="submit" class="btn btn-primary btn-lg">Send</button>
              <small>By clicking on the “Send” button you confirm your consent to the processing of personal data.</small>
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex flex-column">
          <?php if (get_field('form_subtitle', 'option') || get_field('form_title', 'option')): ?>
            <h2 class="section-title mb-0 d-flex flex-column">
              <?php if($form_subtitle = get_field('form_subtitle', 'option')): ?> 
                <span class="section-subtitle" data-aos="fade-left">
                  <?= $form_subtitle ?>
                </span>
              <?php endif; ?>  
              <?php if($form_title = get_field('form_title', 'option')): ?> 
                <span class="text-uppercase" data-aos="fade-left" data-aos-delay="150">
                  <?= $form_title ?>
                </span>
              <?php endif; ?>  
            </h2>
          <?php endif; ?>
          <?php if($form_description = get_field('form_description', 'option')): ?> 
            <p data-aos="fade-left" data-aos-delay="300" data-aos-anchor-placement="top-bottom">
              <?= wp_kses_post($form_description) ?>
            </p>
          <?php endif; ?>  
        </div>
     </div>
  </div>
</section>