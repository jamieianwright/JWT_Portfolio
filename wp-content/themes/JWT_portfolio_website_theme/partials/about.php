<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
    <div class="w-100">
    <h1 class="mb-0">Jamie
        <span class="text-primary">Wright</span>
    </h1>
    

    <div class="subheading mb-5"> 24 Euston Drive · Derby, DE1 3TL · 07872 592 594 ·
        <a href="mailto:someone@example.com?Subject=Saw%20your%20portfolio.%20I%20loved%20it!!!">jamieianwright@googlemail.com</a>
    </div>
    <?php
        $aboutPage = new WP_Query(array(
            'pagename' => 'about'
        ));

        while($aboutPage->have_posts()){
            $aboutPage->the_post(); ?>

            <p class="lead mb-5"><?php the_content() ?></p>

        <?php } ?>
    </div>
</section>

<hr class="m-0">