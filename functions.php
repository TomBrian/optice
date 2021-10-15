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
    wp_enqueue_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap');
    wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
    wp_enqueue_style('serif', 'https://fonts.googleapis.com/css2?family=PT+Serif&display=swap');
    wp_enqueue_style('main', get_template_directory_uri() . '/src/css/main.css');
    //    javascript
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array('jquery'));
    wp_enqueue_script('parallax', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array('jquery'));
}

add_action('init', 'kanai_enqueue_resources');
// load scripts
require dirname(__FILE__)  . '/src/scripts/custom-post-types.php';
require dirname(__FILE__)  . '/src/scripts/contact-form.php';
require dirname(__FILE__)  . '/src/scripts/customizer.php';
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
// sidebars
// selective refresh 
add_theme_support('customize-selective-refresh-widgets');
function optice_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sticky bar', 'optice'),
        'id'            => 'sticky-sidebar',
        'before_widget' => '<div id="%1$s" class="widget sticky-top %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'optice'),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'optice_widgets_init');
// custom theme functions
function optice_get_light_navbar()
{
    include(dirname(__FILE__) . "/templates/nav-light.php");
}
function optice_get_banner()
{
    include(dirname(__FILE__) . "/templates/banner.php");
}
function optice_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'optice_custom_excerpt_length', 30);
function optice_custom_loop_new_excerpt_length($length)
{
    return 70;
}
function optice_get_post_meta()
{
    global $post;
    return $post->post_author;
}
// Theme supports
function optice_post_thumbnails()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150);
}
add_action('after_setup_theme', 'optice_post_thumbnails');
