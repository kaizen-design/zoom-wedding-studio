<section class="projects-about-us-section">
  <div class="container-xl">
    <div class="row justify-content-between">
      <div class="section-content d-flex flex-column col-sm-6 col-md-5 col-xl-4">
        <?php if (get_field('about_subtitle') || get_field('about_title')): ?>
          <h2 class="section-title mb-0 d-flex flex-column">
            <?php if($about_subtitle = get_field('about_subtitle')): ?>
              <small class="text-uppercase" data-aos="fade-right">Guaranteed Quality</small>
            <?php endif; ?>  
            <?php if($about_title = get_field('about_title')): ?>
              <span data-aos="fade-right" data-aos-delay="150" data-aos-anchor-placement="top-bottom">
                <?= $about_title ?>
              </span>
            <?php endif; ?>  
          </h2>
        <?php endif; ?>  
        <?php if($about_description = get_field('about_description')): ?>
          <p class="mt-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
            <?= wp_kses_post($about_description) ?>
          </p>
        <?php endif; ?>  
      </div>
      <div class="col-sm-6 ps-md-0">
        <?php if($about_image = get_field('about_image')): ?>
          <div class="about-us-card position-relative h-100">
            <div class="card-img overflow-hidden h-100">
              <img 
                src="<?= $about_image ?>" 
                class="img-fluid w-100 h-100"
                width="600"
                height="600"
                loading="lazy" 
                alt="" 
                data-aos="fade-left"
              />

            </div>
            <div class="card-caption d-flex justify-content-between align-items-center">
              <?php if($about_image_caption = get_field('about_image_caption')): ?>
                <h3 class="text-uppercase" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                  <?= $about_image_caption ?>
                </h3>
              <?php endif; ?>  
              <ul class="socials-list list-unstyled mb-0 d-flex justify-content-end d-none d-xl-flex">
                <?php if($whatsup = get_field('whatsup', 'option')): ?>
                  <li data-aos="fade-left" data-aos-anchor-placement="top-bottom">
                    <a href="<?= create_whatsapp_link($whatsup) ?>" target="_blank">
                      <svg viewBox="0 0 32 32"><title/><g data-name="wa whatsapp message communication chat" id="wa_whatsapp_message_communication_chat"><path d="M16,3A13,13,0,0,0,4.53,22.13L3,27.74a1,1,0,0,0,.27,1A1,1,0,0,0,4,29a.84.84,0,0,0,.27,0l5.91-1.65a1,1,0,0,0-.53-1.93L5.42,26.56l1.15-4.3a1,1,0,0,0-.1-.76A11,11,0,1,1,16,27a11.23,11.23,0,0,1-1.84-.15,1,1,0,0,0-1.15.82,1,1,0,0,0,.82,1.15A13,13,0,1,0,16,3Z"/><path d="M15,11.21l-1.16-1.6a2.06,2.06,0,0,0-1.5-.84,2.08,2.08,0,0,0-1.62.6l-1.2,1.2a2.81,2.81,0,0,0-.8,2.08c0,1.77,1.36,4,4,6.6,3.09,3,5.23,4,6.69,4a2.7,2.7,0,0,0,2-.81l1.2-1.2a2,2,0,0,0-.24-3.11L20.8,17a2.09,2.09,0,0,0-1.83-.3l-1.49.47a.53.53,0,0,1-.26-.09,11.42,11.42,0,0,1-2.35-2.26.31.31,0,0,1,0-.11c.13-.44.35-1.15.5-1.64A2,2,0,0,0,15,11.21Zm1.29,7.63a2.33,2.33,0,0,0,1.75.2l1.54-.46,1.61,1.25L20,21c-.48.47-2.25.33-5.86-3.21-3-2.91-3.41-4.5-3.41-5.18A.89.89,0,0,1,11,12l1.28-1.19,1.18,1.65c-.16.49-.39,1.22-.51,1.65A2.12,2.12,0,0,0,13,15.51,11.24,11.24,0,0,0,16.33,18.84Z"/></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
                <?php if($instagram = get_field('instagram', 'option')): ?>
                  <li data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="150">
                    <a href="<?= $instagram ?>" target="_blank">
                      <svg viewBox="0 0 32 32"><title/><g data-name="ig instagram insta photo" id="ig_instagram_insta_photo"><path d="M20.45,13.32a1,1,0,0,0-.57,1.3,4,4,0,1,1-2.31-2.3,1,1,0,1,0,.71-1.87,6,6,0,0,0-6.37,9.85,6,6,0,0,0,8.48,0,6,6,0,0,0,1.36-6.41A1,1,0,0,0,20.45,13.32Z"/><circle cx="23" cy="9" r="1"/><path d="M28,9a5,5,0,0,0-4.9-5h0A77.11,77.11,0,0,0,9,4,5,5,0,0,0,4,8.92,91.91,91.91,0,0,0,4,23a5,5,0,0,0,4.9,5h0c2.36.22,4.73.34,7.1.34s4.71-.11,7.05-.34A5,5,0,0,0,28,23.08,87.09,87.09,0,0,0,28,9ZM26,23a3,3,0,0,1-3,3h-.1A71.73,71.73,0,0,1,9,26a3,3,0,0,1-3-3.08A92.4,92.4,0,0,1,6,9,3,3,0,0,1,9.09,6q3.44-.31,6.9-.32T23,6a3,3,0,0,1,3,3.08A85.13,85.13,0,0,1,26,23Z"/></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
                <?php if($facebook = get_field('facebook', 'option')): ?>
                  <li data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <a href="<?= $facebook ?>" target="_blank">
                      <svg viewBox="0 0 32 32"><title/><g data-name="facebook fb face book" id="facebook_fb_face_book"><path d="M24,3H8A5,5,0,0,0,3,8V24a5,5,0,0,0,5,5h8a1,1,0,0,0,1-1V20a1,1,0,0,0-1-1H15V17h1a1,1,0,0,0,1-1V12.5A2.5,2.5,0,0,1,19.5,10H22v2H21a2,2,0,0,0-2,2v2a1,1,0,0,0,1,1h1.72l-.5,2H20a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V21h1a1,1,0,0,0,1-.76l1-4a1,1,0,0,0-.18-.86A1,1,0,0,0,23,15H21V14h2a1,1,0,0,0,1-1V9a1,1,0,0,0-1-1H19.5A4.51,4.51,0,0,0,15,12.5V15H14a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h1v6H8a3,3,0,0,1-3-3V8A3,3,0,0,1,8,5H24a3,3,0,0,1,3,3V24a3,3,0,0,1-3,3H20a1,1,0,0,0,0,2h4a5,5,0,0,0,5-5V8A5,5,0,0,0,24,3Z"/></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
                <?php if($vimeo = get_field('vimeo', 'option')): ?>
                  <li data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="450">
                    <a href="<?= $vimeo ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title/><g data-name="vimeo video media" id="vimeo_video_media"><path d="M24,6a7,7,0,0,0-7,5.83,1,1,0,0,0,.23.82A1,1,0,0,0,18,13h2.31c0,.05,0,.11,0,.19l0,.1a7.28,7.28,0,0,1-2,3.85c-.78.84-1.13.81-1.13.81s-.3-.27-.48-1.09L15,9.51a3.74,3.74,0,0,0-2.38-2.84,3.67,3.67,0,0,0-3.51.52l-5.77,4.5a1,1,0,0,0-.17,1.4,1,1,0,0,0,1.41.18l5.76-4.5A1.66,1.66,0,0,1,12,8.55a1.75,1.75,0,0,1,1.11,1.37l1.61,7.36c.32,1.46,1,2.34,1.91,2.6s2-.2,3.12-1.38a9.09,9.09,0,0,0,2.46-4.69l0-.1a2.28,2.28,0,0,0-.29-2A1.92,1.92,0,0,0,20.36,11h-1A4.79,4.79,0,0,1,24,8a3.13,3.13,0,0,1,3,3c0,4.7-7.42,11.53-10.25,13.75a2.6,2.6,0,0,1-2.34.34A2.13,2.13,0,0,1,13,24L10.06,14.6a3.19,3.19,0,0,0-1.84-2,1,1,0,1,0-.7,1.87,1.18,1.18,0,0,1,.63.73l3,9.38A4.09,4.09,0,0,0,13.81,27a4.89,4.89,0,0,0,1.46.23A4.5,4.5,0,0,0,18,26.34C18.41,26,29,17.63,29,11A5.08,5.08,0,0,0,24,6Z"/></g></svg>
                    </a>
                  </li>
                <?php endif; ?>  
              </ul>
              <?php if (get_field('about_button_text') || get_field('about_button_url')): ?>
                <a data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300" href="<?= get_field('about_button_url') ?>" class="read-more-btn btn btn-primary rounded-0 text-uppercase d-none d-xl-flex">
                  <?= get_field('about_button_text') ?>
                </a>
              <?php endif; ?>  
            </div>
          </div>
        <?php endif; ?>  
      </div>
    </div>
  </div>
</section>