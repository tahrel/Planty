<?php
// chargement du CSS
function my_generatepress_child_enqueue_scripts() {
   
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'my_generatepress_child_enqueue_scripts' );
