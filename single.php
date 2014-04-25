<?php

/*
 * This is the single file for the three stirrups theme
 */

get_header(); ?>

        <section id="site-content" class="col-md-8">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'index'); ?>
            <?php comments_template(); ?>
        <?php endwhile; ?>
        </section><!-- end #site-content -->

<?php

get_sidebar();
get_footer();
