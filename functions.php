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
    wp_enqueue_style('montserrant', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
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
add_theme_support( 'customize-selective-refresh-widgets' );
function optice_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sticky bar', 'optice' ),
        'id'            => 'sticky-sidebar',
        'before_widget' => '<div id="%1$s" class="widget sticky-top %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'optice' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'optice_widgets_init' );
// custom theme functions
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
    return 70;
}
function optice_get_post_meta(){
    global $post;
    return $post->post_author;
}
// Theme supports
function optice_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 );
}
add_action( 'after_setup_theme', 'optice_post_thumbnails' );


// edit post type columns

function optice_edit_entry_columns($columns){
    return array(
        'cb' => '<input type="checkbox" />',
        'title' => __('Title'),
        'username' => __('username'),
        'userphone' => __('Number'),
        'email' => __('Email'),
        'services' => __('userservices'),
        'date' => __('Date')
    );
}
add_action('manage_form_entries_posts_columns','optice_edit_entry_columns');

function custom_columns( $column, $post_id ) {
    switch ( $column ) {
        case 'username':
           echo get_post_meta( $post_id, 'username')[0];
            break;
        case 'userphone':
            echo get_post_meta( $post_id, 'userphone')[0];
            break;
        case 'email':
            echo get_post_meta( $post_id, 'email')[0];
            break;
        case 'services':
            echo get_post_meta( $post_id, 'userservices')[0];
           break;
        }
}
add_action( 'manage_form_entries_posts_custom_column' , 'custom_columns',10,2);
// custom post types and their fields
function optisites_create_post_types() {
    $labels = array(
      'name'               => 'Themes',
      'singular_name'      => 'Theme',
      'menu_name'          => 'Our Themes',
      'name_admin_bar'     => 'Theme',
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New Theme',
      'new_item'           => 'New Theme',
      'edit_item'          => 'Edit Theme',
      'view_item'          => 'View Theme',
      'all_items'          => 'All Themes',
      'search_items'       => 'Search Themes',
      'parent_item_colon'  => 'Parent Theme',
      'not_found'          => 'No Themes Found',
      'not_found_in_trash' => 'No Themes Found in Trash'
    );
  
    $args = array(
      'labels'              => $labels,
      'public'              => true,   // SET TO FALSE IF THE POST TYPE IS PRIVATE
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'show_in_nav_menus'   => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-welcome-widgets-menus',
      'capability_type'     => 'post',
      'hierarchical'        => false,
      'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt','custom-fields', 'comments' ),
      'has_archive'         => true,
      'rewrite'             => array( 'slug' => 'themes' ),
      'query_var'           => true
    );
  
    register_post_type( 'optisites_themes', $args );
    $entry_labels = array(
      'name'               => 'Entries',
      'singular_name'      => 'Entry',
      'menu_name'          => 'Contact Entries',
      'name_admin_bar'     => 'Entry',
      'add_new'            => 'Add New Entry',
      'add_new_item'       => 'Add New Entry',
      'new_item'           => 'New Entry',
      'edit_item'          => 'Edit Entry',
      'view_item'          => 'View Entry',
      'all_items'          => 'All Entries',
      'search_items'       => 'Search Entry',
      'parent_item_colon'  => 'Parent Entry',
      'not_found'          => 'No Entries Found',
      'not_found_in_trash' => 'No Entries Found in Trash'
    );
  
    $entry_args = array(
      'labels'              => $entry_labels,
      'public'              => false,   // SET TO FALSE IF THE POST TYPE IS PRIVATE
      'exclude_from_search' => true,
      'publicly_queryable'  => false,
      'show_ui'             => true,
      'show_in_nav_menus'   => false,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-feedback',
      'capability_type'     => 'post',
      'hierarchical'        => false,
      'supports'            => array( 'title', 'editor', 'author', 'excerpt'),
      'has_archive'         => true,
      'rewrite'             => array( 'slug' => 'projects' ),
      'query_var'           => true
    );
    register_post_type( 'form_entries', $entry_args );
  }
//   register metaboxes
function optisites_custom_meta_boxes(){
    add_meta_box( 'email', 'user email','optice_user_email_field', 'form_entries', 'normal','high');
    add_meta_box( 'username', 'user name','optice_username_field', 'form_entries', 'normal','high');
    add_meta_box( 'userphone', 'user phone number','optice_userphone_field', 'form_entries', 'normal','high');
    add_meta_box( 'userservices', 'services the user is interested in','optice_userservices_field', 'form_entries', 'normal','high');
} 
add_action('add_meta_boxes','optisites_custom_meta_boxes');
function optice_user_email_field() {
	global $post;

	wp_nonce_field( basename( __FILE__ ), 'email' );

	$email = get_post_meta( $post->ID, 'email', true );

	
	echo '<input type="email" name="email" value="' . esc_textarea( $email )  . '" class="widefat">';
}
function optice_username_field() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'username' );

	$username = get_post_meta( $post->ID, 'username', true );

	echo '<input type="text" name="username" value="' . esc_textarea( $username )  . '" class="widefat">';
}
function optice_userphone_field() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'userphone' );

	$userphone = get_post_meta( $post->ID, 'userphone', true );

	echo '<input type="number" name="userphone" value="' . esc_textarea( $userphone )  . '" class="widefat">';
}
function optice_userservices_field() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'userservices' );

	$userservices = get_post_meta( $post->ID, 'userservices', true );

	echo '<textarea name="userservices" class="widefat">'.esc_textarea( $userservices ).'</textarea>';
}
add_action( 'init', 'optisites_create_post_types');  



//save the post custom meta 

// Save the Data
function save_custom_meta($post_id) {
   update_post_meta( $post_id, 'email',$_POST['email']);
   update_post_meta( $post_id, 'username',$_POST['username']);
   update_post_meta( $post_id, 'userphone',$_POST['userphone']);
   update_post_meta( $post_id, 'userservices',$_POST['userservices']);
        }
add_action('save_post', 'save_custom_meta');


// contact form 

add_action('wp_ajax_enquiry', 'optisites_fetch_form_data');
add_action('wp_ajax_nopriv_enquiry', 'optisites_fetch_form_data');
function optisites_fetch_form_data()
{

$new_entry = array(
    'post_title' => 'An Entry from'.$_POST['name'],
    'post_content' => $_POST['message'],
    'post_type' => 'form_entry',
    'post_author' => 1,
    'post_category' => array('entry'),
);
$new_entry_id = wp_insert_post($new_entry);
 $add_query = add_post_meta($new_entry_id, "product_type", "form_entry");
 try {
    // wp_mail error
    if ($add_query) {
        wp_send_json_success('successful');
    } else {
        wp_send_json_error('failed');
    }
}
// global error
catch (Exception $e) {
    wp_send_json_error($e);
}
}

