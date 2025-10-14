<?php if($project_description = get_field('project_description')): ?>
  <section class="project-description" data-aos="fade-up">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <?= wp_kses_post($project_description) ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  