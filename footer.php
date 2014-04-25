<?php

/*
* This is the footer file for the three stirrups theme
*/

?>
        </div><!-- end #main.container -->
    </main><!-- end #site-main -->

    <footer id="site-footer">
        <div class="container clearfix">
            <div class="footer-left col-md-6">
                Copyright &copy; <?php echo date('Y'); ?>
            </div>
            <div class="footer-right col-md-6">
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
            </div>
        </div>
    </footer><!-- end #site-footer -->
</div><!-- end #site-container -->

<?php wp_footer(); ?>
</body>
</html>