<?php if($hero_image = get_field('hero_image')): ?>
  <header class="hero-banner position-relative z-1 has-overlay">
    <img 
      src="<?= $hero_image ?>" 
      alt="<?php the_title() ?>" 
      class="hero-img position-absolute z-0 top-0 bottom-0 start-0 end-0 object-fit-cover mx-auto img-fluid"
    />
    <div class="container-xl h-100 position-relative z-1 d-flex flex-column align-items-end">
      <?php if($hero_title = get_field('hero_title')): ?>
        <h1 class="display-2 text-end" data-aos="fade-left">
          <?= $hero_title ?>
        </h1>
      <?php endif; ?>  
    </div>
  </header>
<?php endif; ?>  