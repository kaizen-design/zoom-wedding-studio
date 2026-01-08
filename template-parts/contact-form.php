<section class="contact-form-section">
  <div class="container-xl">
    <div class="row">
      <?php if($contact_image = get_field('contact_image')): ?>
        <div class="d-none d-md-flex col-md-6" data-aos="fade-right">
          <img 
            src="<?= get_template_directory_uri() ?>/assets/tmp/contact-img.webp" 
            alt="<?= get_field('contact_title') ?>" 
            class="section-img object-fit-cover img-fluid w-100 h-100"
            width="570"
            height="771"
            loading="lazy"
          />
        </div>
      <?php endif; ?>  
      <div class="section-content col-md-6 d-flex flex-column">
        <?php 
          $form_title = get_field('contact_title') ? get_field('contact_title') : get_field('form_title', 'option');
          $form_description = get_field('contact_description') ? get_field('contact_description') : get_field('form_description', 'option');
        ?>
        <?php if($form_title): ?>
          <h2 class="section-title mb-0 text-center" data-aos="fade-left">
            <?= $form_title ?>
          </h2>
        <?php endif; ?>
        <?php if($form_description): ?>
          <p class="mb-0 text-center" data-aos="fade-left" data-aos-delay="150">
            <?= wp_kses_post($form_description) ?>
          </p>
        <?php endif; ?>  
        <form id="wedding-contact-form" class="contact-form d-flex flex-column" data-aos="fade-left" data-aos-delay="300">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="service" id="service-photo-video" value="Photo+Video" autocomplete="off" checked>
            <label class="btn btn-outline-success" for="service-photo-video">Photo+Video</label>
            <input type="radio" class="btn-check" name="service" id="service-photo" value="Photo" autocomplete="off">
            <label class="btn btn-outline-success" for="service-photo">Photo</label>
            <input type="radio" class="btn-check" name="service" id="service-video" value="Video" autocomplete="off">
            <label class="btn btn-outline-success" for="service-video">Video</label>
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
          <div class="form-footer d-flex flex-column flex-sm-row align-items-center">
            <button type="submit" class="btn btn-primary btn-lg">Send</button>
            <small>By clicking on the “Send” button you confirm your consent to the processing of personal data.</small>
          </div>
        </form>
      </div>
    </div>
  </div>  
</section>