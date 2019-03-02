<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
    <div class="w-100">
    <h1 class="mb-0">Jamie
        <span class="text-primary">Wright</span>
    </h1>
    
    <?php
        $aboutPage = new WP_Query(array(
            'pagename' => 'about'
        ));

        while($aboutPage->have_posts()){
            $aboutPage->the_post(); ?>

            <div class="subheading mb-5"> <?php echo the_field('address_line_1')?> · <?php echo the_field('address_line_2')?> · <?php echo the_field('phone_number')?> ·
                <a href="mailto:<?php echo the_field('email')?>?Subject=Saw%20your%20portfolio.%20I%20loved%20it!!!"><?php echo the_field('email')?></a>
            </div>
    

            <p class="lead mb-5"><?php the_content() ?></p>

        <?php } ?>
    </div>
</section>

<hr class="m-0">