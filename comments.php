<?php

/**
 * This is the comments template for the three stirrups theme
 */

?>

<div class="entry-comments">
    <?php if(have_comments()) : ?>
        <ol class="comment-list">
        <?php
            wp_list_comments( array(
                'style' => 'ol',
                'avatar_size' => 40,
            ));
        ?>
        </ol>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>