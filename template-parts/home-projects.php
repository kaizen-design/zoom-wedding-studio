<?php if($projects = get_field('projects')): ?>
  <section class="projects-section">
    <div class="container-xl d-flex flex-column">
      <?php if (get_field('projects_subtitle') || get_field('projects_title')): ?>
        <h2 class="section-title d-flex flex-column align-items-center text-center mb-0">
          <?php if($projects_subtitle = get_field('projects_subtitle')): ?>
            <span class="section-subtitle" data-aos="fade-up">
              <?= $projects_subtitle ?>
            </span>
          <?php endif; ?>
          <?php if($projects_title = get_field('projects_title')): ?>  
            <span data-aos="fade-up" data-aos-delay="300">
              <?= $projects_title ?>
            </span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>  
      <div class="project-list row">
        <?php $delay = 0; ?>
        <?php foreach($projects as $post_id): ?>
          <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'project-thumb' ); ?>
          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
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
          <?php $delay += 300 ?>
        <?php endforeach; ?>
      </div>
      <?php if (get_field('projects_button_text') && get_field('projects_button_url')): ?>
        <a href="<?= get_field('projects_button_url') ?>" class="btn btn-primary btn-lg d-flex align-items-center align-self-center" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
          <?= get_field('projects_button_text') ?>
          <svg class="svg-arrow-right" width="15" height="15" viewBox="0 0 24 24" fill="none">
            <path d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z" fill="#0F0F0F"/>
          </svg>
        </a>
      <?php endif; ?>  
    </div>
  </section>
<?php endif; ?>  