<?php

/**
 * Handles content for Sebo Base Theme
 */

?>
    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>

        <header class="entry-header">
            <?php if(is_singular()) :?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php else: ?>
            <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
            <?php endif; ?>
        </header>

        <div class="entry-content">
        <?php if(is_singular()) :?>
            <?php the_content(); ?>
        <?php else: ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>
        </div>

        <footer class="entry-footer">
        </footer>
    </article>
