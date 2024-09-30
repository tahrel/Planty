<?php
// chargement du CSS
function my_generatepress_child_enqueue_scripts() {
   
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'my_generatepress_child_enqueue_scripts' );

function add_admin_menu_item($items, $args) {
    // Vérifiez si l'utilisateur est connecté et a le rôle d'administrateur
    if (is_user_logged_in() && current_user_can('administrator')) {
        // Ajoutez l'élément de menu "Admin"
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
        // $items .= '<li><a href="' . admin_url() . '">Admin</a></li>' . $items;

        // $items = '<li><a href="' . admin_url() . '">Admin</a></li>' . $items;

    }
    return $items;
}

// Utilisez le filtre 'wp_nav_menu_items' pour ajouter l'élément au menu
add_filter('wp_nav_menu_items', 'add_admin_menu_item', 10, 2);

