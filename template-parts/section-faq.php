<?php
$faq_list = array();
$desired_order = array( 'general', 'photo', 'video' );

$categories = get_terms(array(
  'taxonomy' => 'faq_categories',
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
    'post_type' => 'faq',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
      array(
        'taxonomy' => 'faq_categories',
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

    $faq_list[$category->name] = $posts;
  }
}
?>
<?php if($faq_list): ?>
  <section class="faq-section">
    <div class="container-xl">
      <div class="row gy-6">
        <div class="section-header col-md-5 col-lg-4 d-flex flex-column pe-lg-0">
          <?php if (get_field('faq_subtitle') || get_field('faq_title')): ?>
            <h2 class="section-title mb-0 d-flex flex-column">
              <?php if($faq_subtitle = get_field('faq_subtitle')): ?>
                <small class="section-subtitle text-uppercase" data-aos="fade-right">
                  <?= $faq_subtitle ?>
                </small>
              <?php endif; ?>   
              <?php if($faq_title = get_field('faq_title')): ?>  
                <span data-aos="fade-right" data-aos-delay=150>
                  <?= $faq_title ?>
                </span>
              <?php endif; ?> 
            </h2>
          <?php endif; ?>  
          <?php if($faq_description = get_field('faq_description')): ?>
            <p class="mb-0" data-aos="fade-right" data-aos-delay=300>
              <?= wp_kses_post($faq_description) ?>
            </p>
          <?php endif; ?>  
          <?php if (get_field('help_widget_title') || get_field('help_widget_links')): ?>
            <div class="flex-grow-1">
              <div class="help-widget d-flex flex-column" data-aos="fade-right">
                <?php if($help_widget_title = get_field('help_widget_title')): ?>
                  <h3 class="widget-title mb-0">
                    <?= $help_widget_title ?>
                  </h3>
                <?php endif; ?>  
                <?php if( have_rows('help_widget_links') ): ?> 
                  <ul class="link-list list-unstyled mb-0 d-flex">
                    <?php while( have_rows('help_widget_links') ): the_row(); ?>
                      <?php
                        $text = get_sub_field('text');
                        $url = get_sub_field('url');
                      ?>
                      <li>
                        <a href="<?= $url ?>"><?= $text ?></a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>  
              </div>
            </div>  
          <?php endif; ?>  
        </div>
        <div class="section-content col-md-7 col-lg-6 offset-lg-1 d-flex flex-column px-lg-0 position-relative">
          <?php foreach($faq_list as $_category => $_faq_items): ?>
            <div class="faq-single-category d-flex flex-column">
              <h3 class="mb-0 category-title text-uppercase" data-aos="fade-left"><?= $_category ?></h3>
              <ul class="faq-list list-unstyled mb-0 d-flex flex-column" data-aos="fade-left" data-aos-delay="150">
                <?php foreach($_faq_items as $_k => $post_id): ?>
                  <li class="list-item d-flex flex-column">
                    <a class="faq-title accordion d-flex justify-content-between align-items-center <?= $_k === 0 ? 'open' : '' ?>" href="#">
                      <?= get_the_title($post_id) ?>
                      <svg class="caret" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="_::before" data-name="&amp;::before" width="30" height="30" viewBox="0 0 30 30">
                        <defs>
                          <style>
                            .caret-arrow-bg {
                              fill: #b9af99;
                              fill-opacity: 0;
                            }
                          </style>
                        </defs>
                        <rect id="bg:transparent" class="caret-arrow-bg" width="30" height="30"/>
                        <image id="_::before-2" data-name="&amp;::before" x="9" y="11" width="13" height="8" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAICAYAAAAiJnXPAAAAeElEQVQYlYXNsQnCQAAF0GcQHMYl7CNuYHNLiAuIg1imshbJIkELezsrEQnmIFzu8Jf/8/izEIJCKnxyUzVpftnghcNkKaAeNFhgj+M/FMEbW3TYpXCMxmCNE1Y5GFEKrkP/yME5lgUQE2E7wHv/9MQFdQak8IzbFwwdILbbDihNAAAAAElFTkSuQmCC"/>
                      </svg>
                    </a>
                    <div class="faq-content panel">
                      <?= get_the_content(null, false, $post_id) ?>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>  
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  