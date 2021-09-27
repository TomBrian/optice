<?php
// https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
/**
 * @package kanai
 * **/
function kanai_enqueue_resources()
{
    // css
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.css');
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    wp_enqueue_style('montserrant', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    wp_enqueue_style('main', get_template_directory_uri() . '/src/css/main.css');
    //    javascript
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array('jquery'));
    wp_enqueue_script('parallax', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array('jquery'));
}

add_action('init', 'kanai_enqueue_resources');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/src/scripts/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
// register navigation
register_nav_menus(array(
    'primary' => __('Navmenu', 'Kanai'),
));

function optice_get_light_navbar()
{
    include(dirname(__FILE__) . "/templates/nav-light.php");
}
function optice_get_banner()
{
    include(dirname(__FILE__) . "/templates/banner.php");
}
function optice_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'optice_custom_excerpt_length', 30 );
function optice_custom_loop_new_excerpt_length($length){
    return 50;
}
// Theme supports
add_theme_support('post-thumbnails');