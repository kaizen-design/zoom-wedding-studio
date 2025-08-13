<section class="masonry-section">
  <div class="container-xl d-flex flex-column">
    <div class="section-header d-flex flex-column align-items-center text-center">
      <h2 class="section-title h1 mb-0">Wedding Photography</h2>
      <p class="mb-0">Each newlywed couple is a precious page from a huge wedding album that we create every day, every week, year after year!</p>
    </div>  
    <div class="masonry-grid row" data-masonry='{"percentPosition": true }'>
      <?php foreach(range(1, 15) as $_i): ?>
        <div class="col-lg-3">
          <a 
            href="<?= get_template_directory_uri() ?>/assets/tmp/gallery/gallery-<?= $_i ?>.webp" 
            class="masonry-card card"
            data-fslightbox="gallery"
          >
            <img 
              src="<?= get_template_directory_uri() ?>/assets/tmp/gallery/gallery-<?= $_i ?>.webp" 
              class="w-100 img-fluid" 
              alt="" 
              loading="lazy" 
            />
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="#" class="btn btn-primary btn-lg d-flex align-items-center align-self-center">
      View all
      <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
        <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
      </svg>
    </a>
  </div>
</section>