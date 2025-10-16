<?php
$pricing_plans = array();
$desired_order = array( 'photovideo', 'photo', 'video' );

$categories = get_terms(array(
  'taxonomy' => 'pricing_plan_category',
  'hide_empty' => true,
));

usort( $categories, function( $a, $b ) use ( $desired_order ) {
  $pos_a = array_search( $a->slug, $desired_order );
  $pos_b = array_search( $b->slug, $desired_order );
  
  if ( $pos_a === false ) $pos_a = PHP_INT_MAX;
  if ( $pos_b === false ) $pos_b = PHP_INT_MAX;

  return $pos_a - $pos_b;
} );

foreach ($categories as $category) {
  $posts_query = new WP_Query(array(
    'post_type' => 'pricing_plans',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
      array(
        'taxonomy' => 'pricing_plan_category',
        'field' => 'term_id',
        'terms' => $category->term_id,
      ),
    ),
    'posts_per_page' => -1,
  ));

  if ($posts_query->have_posts()) {
    $posts = array();
    while ($posts_query->have_posts()) {
      $posts_query->the_post();
      $posts[] = get_the_ID();
    }
    wp_reset_postdata();

    $pricing_plans[$category->name] = $posts;
  }
}
?>
<?php if ($pricing_plans): ?>
  <section class="pricing-plans-section">
    <div class="container-xl d-flex flex-column position-relative">
      <div class="section-header row gx-6">
        <?php if($pricing_title = get_field('pricing_title')): ?>
          <div class="col-lg-6 col-xl-5 text-center text-lg-end">
            <h2 class="section-title mb-0 text-uppercase" data-aos="fade-right">
              <?= $pricing_title ?>
            </h2>
          </div>
        <?php endif; ?>  
        <?php if (get_field('pricing_description') || get_field('pricing_note')): ?>
          <div class="col-lg-6 section-description d-flex flex-column text-center text-lg-start">
            <?php if($pricing_description = get_field('pricing_description')): ?>
              <p class="mb-0" data-aos="fade-left">
                <?= wp_kses_post($pricing_description) ?>
              </p>
            <?php endif; ?>    
            <?php if($pricing_note = get_field('pricing_note')): ?>
              <p class="lead mb-0" data-aos="fade-left" data-aos-delay="300">
                <strong><?= $pricing_note ?></strong>
              </p>
             <?php endif; ?>  
          </div>
        <?php endif; ?>  
      </div>
      <div class="pricing-tabs-section d-flex flex-column">
        <div class="btn-group d-flex justify-content-center align-self-sm-center" role="group" aria-label="Pricing radio toggle button group" data-aos="fade-up">
          <?php $i = true; ?>
          <?php foreach($pricing_plans as $k => $plans): ?>
            <input
              type="radio"
              class="btn-check"
              name="pricing"
              id="pricing-<?= sanitize_string($k) ?>"
              value="<?= $k ?>"
              autocomplete="off"
              <?= $i ? 'checked' : '' ?>>
            <label
              class="btn btn-outline-primary"
              for="pricing-<?= sanitize_string($k) ?>">
              <?= $k ?>
            </label>
            <?php $i = false; ?>
          <?php endforeach; ?>
        </div>
        <div class="tab-content position-relative">
          <?php $i = true; ?>
          <?php foreach($pricing_plans as $k => $plans): ?>
            <div class="tab-pane fade <?= $i ? 'show active' : '' ?>" id="pricing-<?= sanitize_string($k) ?>-tab" role="tabpanel" aria-labelledby="pricing-<?= sanitize_string($k) ?>">
              <div class="row justify-content-center">
                <?php $delay = 0; ?>
                <?php foreach($plans as $plan_id): ?>
                  <div class="col-sm-6 col-xl-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>" data-aos-anchor-placement="top-bottom">
                    <div class="pricing-plan-card d-flex flex-column align-items-center text-center h-100">
                      <h3 class="plan-title mb-0 d-flex flex-column align-items-center text-uppercase w-100">
                        <svg width="59" height="50" viewBox="0 0 59 50">
                          <image width="59" height="50" xlink:href="data:img/png;base64,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" />
                        </svg>
                        <?= get_the_title($plan_id) ?>
                      </h3>
                      <?php if($description = get_field('description', $plan_id)): ?>
                        <p class="plan-subtitle mb-0 text-center w-100 text-uppercase">
                          <?= $description ?>
                        </p>
                      <?php endif; ?>  
                      <?php if( have_rows('highlights', $plan_id) ): ?>
                        <ul class="plan-general-features-list list-unstyled mb-0 d-flex flex-column">
                          <?php while( have_rows('highlights', $plan_id) ): the_row(); ?>
                            <li><?= get_sub_field('highlight', $plan_id) ?></li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>  
                      <?php if( have_rows('features', $plan_id) ): ?>
                        <ul class="plan-features-list list-unstyled mb-0 d-flex flex-column">
                          <?php while( have_rows('features', $plan_id) ): the_row(); ?>
                            <li><?= get_sub_field('feature', $plan_id) ?></li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>  
                      <a href="#contact" class="btn btn-primary btn-lg d-flex align-items-center justify-content-center mt-auto w-100">
                        Get a quote
                        <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
                          <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F" />
                        </svg>
                      </a>
                    </div>
                  </div>
                  <?php $delay += 300; ?>
                <?php endforeach; ?>
              </div>
            </div>
            <?php $i = false; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>