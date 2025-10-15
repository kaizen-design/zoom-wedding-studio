<?php if($project_video = get_field('project_video')): ?>
  <section class="project-video" data-aos="fade-up">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="ratio ratio-16x9">
            <?= $project_video ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  