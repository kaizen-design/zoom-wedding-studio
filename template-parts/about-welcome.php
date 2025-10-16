<section class="welcome-section">
  <div class="container-xl">
     <div class="row align-items-start gy-5">
        <div class="col-md-6 col-lg-5 offset-md-2 offset-lg-1 section-content d-flex flex-column position-relative py-lg-6 pe-md-6">
          <?php if (get_field('welcome_subtitle') || get_field('welcome_title')): ?>
            <h2 class="section-title mb-0 d-flex flex-column">
              <?php if($welcome_subtitle = get_field('welcome_subtitle')): ?>
                <small class="section-subtitle text-uppercase" data-aos="fade-left">
                  <?= $welcome_subtitle ?>
                </small>
              <?php endif; ?>  
              <?php if($welcome_title = get_field('welcome_title')): ?>  
                <span data-aos="fade-left" data-aos-delay=150>
                  <?= $welcome_title ?>
                </span>
              <?php endif; ?>  
            </h2>
          <?php endif; ?>  
          <?php if($welcome_description = get_field('welcome_description')): ?>
            <p class="mb-0" data-aos="fade-left" data-aos-delay=300>
              <?= wp_kses_post($welcome_description) ?>
            </p>
          <?php endif; ?>  
        </div>
        <div class="col-7 col-md-4 col-lg-5 col-xl-4 offset-xl-1 section-image position-relative order-md-first">
          <?php if($manager_photo = get_field('manager_photo')): ?>
            <div class="zoom-image-card overflow-hidden" data-aos="fade-right">
              <img 
                src="<?= $manager_photo ?>" 
                class="img-fluid w-100 h-auto" 
                width="370"
                height="564"
                alt="<?= get_field('manager_name') ?>"
                loading="lazy"
              />
            </div>
          <?php endif; ?>  
          <div class="manager-card d-flex flex-column overflow-hidden" data-aos="fade-up" data-aos-delay="150">
            <div class="card-header d-flex flex-column align-items-center text-center">
              <?php if($manager_name = get_field('manager_name')): ?>
                <h3 class="card-title mb-0 text-uppercase"><?= $manager_name ?></h3>
              <?php endif; ?>  
              <?php if($manager_title = get_field('manager_title')): ?>
                <span class="card-meta"><?= $manager_title ?></span>
              <?php endif; ?>  
            </div>
            <div class="card-footer d-flex justify-content-center">
              <ul class="manager-contact-list list-unstyled mb-0 d-flex justify-content-center align-items-center">
                <?php if($manager_whatsup = get_field('manager_whatsup')): ?> 
                  <li>
                    <a href="<?= create_whatsapp_link($manager_whatsup) ?>">
                      <svg viewBox="0 0 32 32"><title></title><g data-name="wa whatsapp message communication chat" id="wa_whatsapp_message_communication_chat"><path d="M16,3A13,13,0,0,0,4.53,22.13L3,27.74a1,1,0,0,0,.27,1A1,1,0,0,0,4,29a.84.84,0,0,0,.27,0l5.91-1.65a1,1,0,0,0-.53-1.93L5.42,26.56l1.15-4.3a1,1,0,0,0-.1-.76A11,11,0,1,1,16,27a11.23,11.23,0,0,1-1.84-.15,1,1,0,0,0-1.15.82,1,1,0,0,0,.82,1.15A13,13,0,1,0,16,3Z"></path><path d="M15,11.21l-1.16-1.6a2.06,2.06,0,0,0-1.5-.84,2.08,2.08,0,0,0-1.62.6l-1.2,1.2a2.81,2.81,0,0,0-.8,2.08c0,1.77,1.36,4,4,6.6,3.09,3,5.23,4,6.69,4a2.7,2.7,0,0,0,2-.81l1.2-1.2a2,2,0,0,0-.24-3.11L20.8,17a2.09,2.09,0,0,0-1.83-.3l-1.49.47a.53.53,0,0,1-.26-.09,11.42,11.42,0,0,1-2.35-2.26.31.31,0,0,1,0-.11c.13-.44.35-1.15.5-1.64A2,2,0,0,0,15,11.21Zm1.29,7.63a2.33,2.33,0,0,0,1.75.2l1.54-.46,1.61,1.25L20,21c-.48.47-2.25.33-5.86-3.21-3-2.91-3.41-4.5-3.41-5.18A.89.89,0,0,1,11,12l1.28-1.19,1.18,1.65c-.16.49-.39,1.22-.51,1.65A2.12,2.12,0,0,0,13,15.51,11.24,11.24,0,0,0,16.33,18.84Z"></path></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
                <?php if($manager_email = get_field('manager_email')): ?>  
                  <li>
                    <a href="mailto:<?= $manager_email ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title/><g data-name="mail email e-mail letter" id="mail_email_e-mail_letter"><path d="M28,13a1,1,0,0,0-1,1v8a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V14a1,1,0,0,0-2,0v8a3,3,0,0,0,.88,2.12A3,3,0,0,0,6,25H26a3,3,0,0,0,2.12-.88A3,3,0,0,0,29,22V14A1,1,0,0,0,28,13Z"/><path d="M15.4,18.8a1,1,0,0,0,1.2,0L28.41,9.94a1,1,0,0,0,.3-1.23,3.06,3.06,0,0,0-.59-.83A3,3,0,0,0,26,7H6a3,3,0,0,0-2.12.88,3.06,3.06,0,0,0-.59.83,1,1,0,0,0,.3,1.23ZM6,9H26a.9.9,0,0,1,.28,0L16,16.75,5.72,9A.9.9,0,0,1,6,9Z"/></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
                <?php if($manager_phone = get_field('manager_phone')): ?>  
                  <li>
                    <a href="tel:<?= format_phone_number($manager_phone) ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title/><g data-name="phone celuler contact call" id="phone_celuler_contact_call"><path d="M27.36,6.15,25.09,3.88a3,3,0,0,0-4.54.35l-2.21,3a3,3,0,0,0-.44,2.66l.13.38c.27.89.62,2,.84,2.74a1,1,0,0,1-.05.7,12.44,12.44,0,0,1-2.08,3,1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0,14.14,14.14,0,0,0,2.46-3.51,2.92,2.92,0,0,0,.17-2.17c-.21-.72-.57-1.86-.85-2.75l-.12-.39A1,1,0,0,1,20,8.44l2.21-3a1,1,0,0,1,1.51-.12l.67.67-2,3.1a1,1,0,0,0,.84,1.54,1,1,0,0,0,.84-.45l1.77-2.74.16.15a2.59,2.59,0,0,1,.68,1.88c0,1.76-1.19,5-6.73,10.44-5.81,5.7-10.42,8-12.33,6.07L5.29,23.68A1,1,0,0,1,5,22.9a1,1,0,0,1,.41-.73l3-2.21a1,1,0,0,1,.88-.15l1.89.59L9.05,21.91a1,1,0,0,0-.24,1.4,1,1,0,0,0,.82.42,1,1,0,0,0,.57-.18L14,20.88a1,1,0,0,0,.25-1.4,1,1,0,0,0-.53-.36v0L9.92,17.9a3,3,0,0,0-2.66.44l-3,2.21a3,3,0,0,0-.35,4.54l2.27,2.28A4.31,4.31,0,0,0,9.3,28.63c2.52,0,6.32-1.75,12-7.32,4.84-4.75,7.31-8.74,7.33-11.86A4.46,4.46,0,0,0,27.36,6.15Z"/></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
              </ul>
            </div>
          </div>
        </div>
     </div>
  </div>
</section>