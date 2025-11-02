<?php
function IREV_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('IREV-style', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version);
    wp_enqueue_script('IREV-script', get_template_directory_uri() . '/assets/js/main.js', [], $theme_version, true);
}
add_action('wp_enqueue_scripts', 'IREV_scripts');

function IREV_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'IREV_admin_bar');

function IREV_register_menus() {
    register_nav_menu('header_menu', __('Header Menu', 'IREV-theme'));
    register_nav_menu('footer_menu', __('Footer Menu', 'IREV-theme'));
}
add_action('after_setup_theme', 'IREV_register_menus');

add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', '__return_false');