<?php

/*
 * This is the single file for the Sebo Marketing base theme
 */

?>
    <?php if(is_active_sidebar('primary-sidebar')): ?>
        <div id="sidebar" class="widget-area col-md-4">
            <?php dynamic_sidebar('primary-sidebar'); ?>
        </div>
    <?php endif; ?>