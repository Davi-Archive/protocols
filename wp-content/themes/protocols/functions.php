<?php

function load_scripts_for_the_site()
{
    // stylesheets
    wp_register_style('register-style', get_stylesheet_uri());
    wp_enqueue_style('register-style');

    // javascript
    // load HEader
    wp_enqueue_script('sscript', get_template_directory_uri() . '/js/s.js', [], null, false);
    wp_enqueue_script('select2', get_template_directory_uri() . '/js/select2.min.js', [], null, false);
    wp_enqueue_script('other', get_template_directory_uri() . '/js/other.js', [], null, false);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], null, false);


    // Load in footer
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.js', [], null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', [], null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('other2', get_template_directory_uri() . '/js/other2.js', [], null, true);
    wp_enqueue_script('perfect-scrollbar', get_template_directory_uri() . '/js/perfect-scrollbar.min.js', [], null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts_for_the_site');




// Funçoes para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'food_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// Habilitar Menu
add_theme_support('menus');

// Registrar Menu
function register_my_menu()
{
    register_nav_menus(array(
        'menu_principal' => __('Menu Principal'),
    ));
}
add_action('init', 'register_my_menu');
