<?php

/*
 * Template Name: Full Width
 * This is the Index file for the Sebo Marketing base theme
 */

get_header(); ?>

        <section id="site-content">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'index'); ?>
        <?php endwhile; ?>
        </section><!-- end #site-content -->

<?php

get_footer();
