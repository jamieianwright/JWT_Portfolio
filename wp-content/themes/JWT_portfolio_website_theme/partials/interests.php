<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
    <div class="w-100">
    <h2 class="mb-5">Interests</h2>
        <?php
        $interestsPage = new WP_Query(array(
            'pagename' => 'interests'
        ));

        while($interestsPage->have_posts()){
            $interestsPage->the_post(); ?>

            <?php the_content() ?>

        <?php } ?>
    </div>
</section>

<hr class="m-0">