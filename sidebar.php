<?php

/*
 * This is the sidebar for the three stirrups theme
 */

?>
    <?php if(is_active_sidebar('primary-sidebar')): ?>
        <div id="sidebar" class="widget-area col-md-4">
            <?php dynamic_sidebar('primary-sidebar'); ?>
        </div>
    <?php endif; ?>