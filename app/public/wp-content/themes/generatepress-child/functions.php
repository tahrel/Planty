<?php
// chargement du CSS
function my_generatepress_child_enqueue_scripts() {
   
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'my_generatepress_child_enqueue_scripts' );


function add_admin_menu_item($items, $args) {
    
    if (is_user_logged_in() && current_user_can('administrator')) {
        
        $menu_items = explode('</li>', $items); 
        $menu_items = array_filter($menu_items);
        
        
        $admin_item = '<li><a href="' . admin_url() . '">Admin</a>';
        
        
        array_splice($menu_items, 1, 0, $admin_item); // Insère après le premier élément
        
       
        $items = implode('</li>', $menu_items) . '</li>'; 
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_menu_item', 10, 2);





