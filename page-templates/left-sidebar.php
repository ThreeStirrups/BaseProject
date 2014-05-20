<?php

/*
 * Template Name: Left Sidebar
 * This is a template with a default left sidebar
 */

get_header();
get_sidebar();
?>

    <section id="site-content" class="col-md-8 col-lg-9">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'page'); ?>
        <?php endwhile; ?>
    </section><!-- end #site-content -->

<?php


get_footer();
