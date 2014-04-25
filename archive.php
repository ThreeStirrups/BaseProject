<?php

/*
* This is the Archive file for the Sebo Marketing base theme
*/
get_header(); ?>

    <section id="site-content">
    <?php if (have_posts()) : the_post(); ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'index'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <!-- nothing here -->
    <?php endif; ?>
    </section><!-- end #site-content -->

<?php

get_sidebar();
get_footer();

