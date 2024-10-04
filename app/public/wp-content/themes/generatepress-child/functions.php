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
        // Convertir la chaîne d'éléments de menu en tableau
        $menu_items = explode('</li>', $items); // Divise chaque item de menu
        // Retirer les éléments vides (au cas où)
        $menu_items = array_filter($menu_items);
        
        // Définir l'élément Admin
        $admin_item = '<li><a href="' . admin_url() . '">Admin</a>';
        
        // Insérer l'élément Admin après le premier élément du tableau (ou à l'endroit souhaité)
        array_splice($menu_items, 1, 0, $admin_item); // Insère après le premier élément
        
        // Reconstruire la chaîne HTML des éléments de menu
        $items = implode('</li>', $menu_items) . '</li>'; // Reconstituer la liste des éléments
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_menu_item', 10, 2);





