<?php
/* Block Name:  BlockQuote*/
?>
<div class="container-fluid">
    <main class="tm-main">
        <div class="row tm-row">
            <?php
            if (have_rows('block')) :
                while (have_rows('block')) : the_row();
                    $avathar = get_sub_field('image');
                    $quote = get_sub_field('quote');
                    $author = get_sub_field('author');
            ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">

                        <img src="<?php echo $avathar['url']; ?>" alt="Image" class="img-fluid" height="200px" width="200px">

                        <a class="effect-lily tm-post-link tm-pt-60" href="<?php the_permalink() ?>">
                            <p class="tm-pt-30">
                                <?php echo $quote;  ?>
                            </p>
                        </a>
                        <p class="tm-pt-30">
                            <?php echo $author;  ?>
                        </p>
                    </article>
            <?php endwhile;
            endif;
            ?>


        </div>
    </main>
</div>