<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>
    <?php do_action( 'wp_body_open' ); ?>
     <!-- mis a jour -->
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/plantylogo.png" alt="Planty Logo">
                </a>
            

            <nav class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu',
                ) );
                ?>
            </nav>
        </div>
        </div>
    </header>

    <div <?php generate_do_attr( 'page' ); ?>>
        <?php do_action( 'generate_inside_site_container' ); ?>
        <div <?php generate_do_attr( 'site-content' ); ?>>
            <?php do_action( 'generate_inside_container' ); ?>
        