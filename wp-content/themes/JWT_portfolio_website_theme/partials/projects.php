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
            $live = NULL;

            if(the_field('live_url')){
              $live = "<a href=\"#\" class=\"btn btn-live btn-block\"> <i class=\"fas fa-satellite-dish\"></i> Live Demo</a>";
            } else {
              $live = "<a href=\"#\" class=\"btn btn-live btn-block disabled \"> <i class=\"fas fa-tools\"></i> No Live Demo</a>";
            }

            ?>

            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img src="<?php the_field('site_image'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php the_title() ?></h5>
                  <p class="card-text"><?php echo wp_trim_words(get_the_content(), 12) ?></p>
                  <a href="#" class="btn btn-github btn-block"> <i class="fab fa-github"></i> GitHub Repo</a>
                  <?php echo $live ?>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>
      </div>

</section>

<hr class="m-0">