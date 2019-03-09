<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="projects">
      <div class="w-100">
        <h2 class="mb-5">Projects</h2>
        <div class="row">

        <?php 
          $projects = new WP_Query(array(
            'post_type' => 'projects'
          ));

          while($projects->have_posts()) {
            $projects->the_post(); 
            $live = get_field('live_url');

              if($live){
                $disable = null;
                $icon = "fa-satellite-dish";
                $text = "Live Demo";
              } else {
                $disable = "disabled";
                $icon = "fa-tools";
                $text = "No Live Demo";
              }

            ?>

            <div class="col-md-6 col-xl-4">
              <div class="card" style="width: 18rem;">
                <img src="<?php the_field('site_image'); ?>" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title"><?php the_title() ?></h5>
                  <p class="card-text"><?php echo  the_field('project_description') ?></p>
                    <a href="<?php echo the_field('github_url')?>" target="_blank" class="btn btn-github btn-block"> <i class="fab fa-github"></i> GitHub Repo</a>
                    <a href="<?php echo $live ?>" class="btn btn-live btn-block <?php echo $disable ?>"> <i class="fas <?php echo $icon?>"></i> <?php echo $text ?></a>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>
      </div>

</section>

<hr class="m-0">