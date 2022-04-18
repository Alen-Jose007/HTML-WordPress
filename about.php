<?php
/* Template Name: About Xtra */
get_header();
?>
<?php
$hero = get_field('box-1');
$hero1 = get_field('box-2');
$hero3 = get_field('box-3');
?>

<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->
        <div class="row tm-row">
            <div class="col-12">
                <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                    <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                    <button class="tm-search-button" type="submit">
                        <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row tm-row tm-mb-45">
            <div class="col-12">
                <hr class="tm-hr-primary tm-mb-55">
                <img src="<?php bloginfo('template_directory'); ?>/img/about-01.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
        <div class="row tm-row tm-mb-40">
            <div class="col-12">
                <div class="mb-4">
                    <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">About this xtra blog</h2>
                    <p>
                        You can immediately download
                        <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog Template</a>
                        from TemplateMo website for 100% free of charge. Etiam vehicula, tortor ac eleifend tincidunt, diam neque pellentesque ipsum,
                        a geugiat eros mauris eget lorem. Quisque in
                        bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. Aliquam lorem mi, maximus at iaculis ut, viverra vel
                        mauris. Duis congue luctus metus, sodales tincidunt lectus fringilla ut. Nunc tempus at magna sed vestibulum.
                    </p>
                    <p>
                        Proin et arcu ligula. Praesent quis erat eu est solliditudin tristique ut in arcu. Donec bibendum ex id ligula semper dictum.
                        Proin malesuada luctus auctor. Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in
                        malesuada nulla magna ut enim. Morbi lacinia magna sed sapien auctor, vitae luctus nunc cursus.
                    </p>
                </div>
            </div>
        </div>
        <div class="row tm-row tm-mb-120">
            <div class="col-lg-4 tm-about-col">
                <div class="tm-bg-gray tm-about-pad">
                    <div class="text-center tm-mt-40 tm-mb-60">
                        <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>
                    </div>
                    <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo $hero['title']; ?></h2>
                    <p class="mb-0 tm-line-height-short">
                        <?php echo $hero['description']; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 tm-about-col">
                <div class="tm-bg-gray tm-about-pad">
                    <div class="text-center tm-mt-40 tm-mb-60">
                        <i class="fas fa-users-cog fa-4x tm-color-primary"></i>
                    </div>
                    <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo $hero1['title']; ?></h2>
                    <p class="mb-0 tm-line-height-short">
                        <?php echo $hero1['description']; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 tm-about-col">
                <div class="tm-bg-gray tm-about-pad">
                    <div class="text-center tm-mt-40 tm-mb-60">
                        <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>
                    </div>
                    <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo $hero3['title']; ?></h2>
                    <p class="mb-0 tm-line-height-short">
                        <?php echo $hero3['description']; ?>
                    </p>
                </div>
            </div>
        </div>

        <?php
        $team1 = get_field('team-memeber-1');
        $team2 = get_field('team-memeber-2');
        $team3 = get_field('team-memeber-3');
        $team4 = get_field('team-memeber-4');

        ?>
        <div class="row tm-row tm-mb-60">
            <div class="col-12">
                <hr class="tm-hr-primary  tm-mb-55">
            </div>
            <div class="col-lg-6 tm-mb-60 tm-person-col">
                <div class="media tm-person">
                    <img src="<?php echo esc_url( $team1['image']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                    <div class="media-body">
                        <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team1['name']; ?></h2>
                        <h3 class="tm-h3 mb-3"><?php echo $team1['sub-title']; ?></h3>
                        <p class="mb-0 tm-line-height-short">
                            <?php echo $team1['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tm-mb-60 tm-person-col">
                <div class="media tm-person">
                    <img src="<?php echo esc_url( $team2['image']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                    <div class="media-body">
                        <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team2['name']; ?></h2>
                        <h3 class="tm-h3 mb-3"><?php echo $team2['sub-title']; ?></h3>
                        <p class="mb-0 tm-line-height-short">
                            <?php echo $team2['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tm-mb-60 tm-person-col">
                <div class="media tm-person">
                    <img src="<?php echo esc_url( $team3['image']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                    <div class="media-body">
                        <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team3['name']; ?></h2>
                        <h3 class="tm-h3 mb-3"><?php echo $team3['sub-title']; ?></h3>
                        <p class="mb-0 tm-line-height-short">
                            <?php echo $team3['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tm-mb-60 tm-person-col">
                <div class="media tm-person">
                <img src="<?php echo esc_url( $team4['image']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                    <div class="media-body">
                        <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team4['name']; ?></h2>
                        <h3 class="tm-h3 mb-3"><?php echo $team4['sub-title']; ?></h3>
                        <p class="mb-0 tm-line-height-short">
                            <?php echo $team4['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php get_footer(); ?>