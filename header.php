<?php

/*
* This is the header file for the three stirrups base theme
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php // Insert Title ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="site-container" class="">
    <header id="site-header">
        <div class="container clearfix">
            <div id="header-left" class="col-md-4">
                <?php if(is_front_page()) : ?>
                    <h1 id="site-title"><?php bloginfo('name');?></h1>
                <?php else: ?>
                    <a href="<?php bloginfo('url');?>" ><h2 id="site-title"><?php bloginfo('name');?></h2></a>
                <?php endif; ?>
                <h2 id="site-description"><?php bloginfo('description'); ?></h2>
            </div>
            <div id="header-right" class="col-md-8">

            </div>
            <nav id="site-navigation" class="clearfix">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </nav>
        </div>
    </header><!-- end #site-header -->

    <main id="site-main" class="">
        <div class="container clearfix">