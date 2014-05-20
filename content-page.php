<?php

/**
 * Handles content for pages for Sebo Base Theme
 */

?>

<div id="page-<?php the_ID();?>" <?php post_class(); ?>>


    <div class="page-content">
        <?php the_content(); ?>
    </div>

    <footer class="page-footer">
    </footer>
</div>