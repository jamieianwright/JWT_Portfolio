<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>

        <?php 
          $jobs = new WP_Query(array(
            'post_type' => 'Experience',
            'orderby' => 'start_date',
            'order' => 'ASC',
          ));

          while($jobs->have_posts()) {
            $jobs->the_post();
            $formattedEndDate = 'Present';

            if(get_field('end_date')){
              $endDate = new DateTime(get_field('end_date'));
              $formattedEndDate = $endDate->format('F').' '.$endDate->format('Y');
            }
            ?>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-0"><?php echo the_title()?></h3>
                <div class="subheading mb-3"><?php echo the_field('institution')?></div>
                <p><?php echo the_content() ?></p>
              </div>
              <div class="resume-date text-md-right">
                <?php $startDate = new DateTime(get_field('start_date')); ?>
                <span class="text-primary"><?php echo $startDate->format('F').' '.$startDate->format('Y')?> - <?php echo $formattedEndDate ?></span>
              </div>
            </div>

          <?php } ?>

      </div>

    </section>

    <hr class="m-0">