<?php

/*
 * Template Name: Right Sidebar
 * This is a default template with a default right sidebar
 */

get_header();

?>

    <section id="site-content" class="col-md-8 col-lg-9">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'page'); ?>
        <?php endwhile; ?>
    </section><!-- end #site-content -->

<?php
get_sidebar();

get_footer();
