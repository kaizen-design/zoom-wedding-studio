<?php 
$args = [
  'post_type' => 'projects', 
  'posts_per_page' => -1,
  'status' => 'published'
];
$projects = get_posts($args);
?>

<?php if ( $projects ): ?>
  <section class="projects-section">
    <div class="container-xl d-flex flex-column">
      <?php if (get_field('projects_title') || get_field('projects_description')): ?>
        <div class="section-header d-flex flex-column align-items-center text-center">
          <?php if($projects_title = get_field('projects_title')): ?>
            <h2 class="mb-0" data-aos="fade-up">
              <?= $projects_title ?>
            </h2>
          <?php endif; ?>  
          <?php if($projects_description = get_field('projects_description')): ?>
            <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
              <?= wp_kses_post($projects_description) ?>
            </p>
          <?php endif; ?>
        </div>
      <?php endif; ?>  
      <div class="project-list row">
        <?php $delay = 0; ?>
        <?php foreach($projects as $k => $project): ?>
          <?php 
            $post_id = $project->ID;
            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'project-thumb' );
          ?>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
            <a href="<?= get_permalink($post_id) ?>" class="project-card card text-white">
              <img 
                src="<?= $image_url[0] ?>" 
                class="card-img img-fluid"
                width="270"
                height="400"
                loading="lazy" 
                alt="<?= get_the_title($post_id) ?>" 
              />
              <div class="card-img-overlay d-flex flex-column align-items-center justify-content-end">
                <h3 class="card-title mb-0"><?= get_the_title($post_id) ?></h3>
                <?php if(get_field('project_hours', $post_id) || get_field('project_category', $post_id)): ?>
                  <ul class="card-meta list-unstyled mb-0 d-flex justify-content-center">
                    <?php if($hours = get_field('project_hours', $post_id)): ?>
                      <li><?= $hours ?></li>
                    <?php endif; ?>  
                    <?php if($category = get_field('project_category', $post_id)): ?>
                      <li><?= $category ?></li>
                    <?php endif; ?>  
                  </ul>
                <?php endif; ?>  
              </div>
            </a>
          </div>
          <?php $delay = $k % 4 === 0 ? 0 : $delay + 150; ?>
        <?php endforeach; ?>
      </div>
      <a href="#" class="btn btn-primary btn-lg d-flex align-items-center align-self-center" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
        Load more
        <svg style="enable-background:new 0 0 128 128;" width="15" height="15" viewBox="0 0 128 128" xml:space="preserve"><g><path d="M96.1,103.6c-10.4,8.4-23.5,12.4-36.8,11.1c-10.5-1-20.3-5.1-28.2-11.8H44v-8H18v26h8v-11.9c9.1,7.7,20.4,12.5,32.6,13.6   c1.9,0.2,3.7,0.3,5.5,0.3c13.5,0,26.5-4.6,37-13.2c19.1-15.4,26.6-40.5,19.1-63.9l-7.6,2.4C119,68.6,112.6,90.3,96.1,103.6z"/><path d="M103,19.7c-21.2-18.7-53.5-20-76.1-1.6C7.9,33.5,0.4,58.4,7.7,81.7l7.6-2.4C9,59.2,15.5,37.6,31.9,24.4   C51.6,8.4,79.7,9.6,98,26H85v8h26V8h-8V19.7z"/></g></svg>
      </a>
    </div>
  </section>
<?php endif; ?>  