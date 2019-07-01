<?php get_header(); ?>

<div class="container pt-5">
    <h2><?php the_title() ?></h2>

    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid" alt="<?php the_post_thumbnail_caption() ?>" />

    <?php endif; ?>

    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
    endif; ?>

</div>


<?php get_footer(); ?>