<?php

/*
 * Template Name: Home Page
 * This is the front page file for the Sebo Marketing base theme
 */

get_header(); ?>

    <section id="site-content">
        <div id="home-slider">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <?php layerslider('homepage') ?>
                    </div>
                </div>

            </div><!-- end #site-content .container -->
        </div>

        <div class="container clearfix offset-top-2">
            <?php the_content(); ?>
        </div>
    </section><!-- end #site-content -->

<?php

get_footer();
