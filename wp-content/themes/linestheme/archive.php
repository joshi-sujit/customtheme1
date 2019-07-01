<?php get_header(); ?>

<div class="container pt-5">
    <h2><?php single_cat_title() ?></h2>

    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="card">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('smallest'); ?>" alt="<?php the_post_thumbnail_caption() ?>" />

                <?php endif; ?>

                <div class="card-body">
                    <h5 class="card-title"><?php the_title('<span class="test">', '</span>', true); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endwhile;
    endif; ?>

</div>


<?php get_footer(); ?>