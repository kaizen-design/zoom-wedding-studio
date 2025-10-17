<?php if (get_field('marquee_line_1') || get_field('marquee_line_2')): ?>
  <section class="marquee-section">
    <div class="container-xl d-flex flex-column align-items-center text-center">
      <?php if($marquee_line_1 = get_field('marquee_line_1')): ?>
        <h2 class="mb-0 text-uppercase animated-text">
          <?= $marquee_line_1 ?>
        </h2>  
      <?php endif; ?>
      <?php if($marquee_line_2 = get_field('marquee_line_2')): ?>  
        <h2 class="mb-0 text-uppercase animated-text alt-direction">
          <?= $marquee_line_2 ?>
        </h2>  
      <?php endif; ?>  
    </div>
  </section>
<?php endif; ?>  