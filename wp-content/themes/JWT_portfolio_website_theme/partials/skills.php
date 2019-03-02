<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
    <div class="w-100">
    <h2 class="mb-5">Skills</h2>

    <div class="subheading mb-3">Programming Languages &amp; Tools</div>
    <ul class="list-inline dev-icons">
        <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-react"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-html5"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-git"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-node"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
        </li>
        <li class="list-inline-item">
            <i class="fab fa-php"></i>
        </li>
    </ul>

    <?php
        $skillsPage = new WP_Query(array(
            'pagename' => 'skills'
        ));

        while($skillsPage->have_posts()){
            $skillsPage->the_post(); ?>

            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                <i class="fa-li fa fa-check"></i>
                <?php echo the_field('work_flow_item_1') ?></li>
                <li>
                <i class="fa-li fa fa-check"></i>
                <?php echo the_field('work_flow_item_2') ?></li>
                <li>
                <i class="fa-li fa fa-check"></i>
                <?php echo the_field('work_flow_item_3') ?></li>
                <li>
                <i class="fa-li fa fa-check"></i>
                <?php echo the_field('work_flow_item_4') ?></li>
            </ul>
            </div>

    <?php } ?>
</section>

<hr class="m-0">