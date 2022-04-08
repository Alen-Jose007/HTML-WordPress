<?php get_header(); ?>
<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->
        <div class="row tm-row">
            <div class="col-12">
            <?php get_search_form(); ?>
            </div>
        </div>
        <div class="row tm-row">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a class="effect-lily tm-post-link tm-pt-60" href="<?php the_permalink() ?>">
                            <div class="tm-post-link-inner">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
                            </div>
                            <span class="position-absolute tm-new-badge">New</span>
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                        </a>
                        <p class="tm-pt-30">
                            <?php the_content();  ?>
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary">Travel . Events</span>
                            <span class="tm-color-primary">June 24, 2020</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>36 comments</span>
                            <span>by Admin Nat</span>
                        </div>
                    </article>
            <?php } // end while
            } // end if
            ?>


        </div>

        <?php get_footer(); ?>