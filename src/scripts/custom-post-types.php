<?php
// edit post type columns

function optice_edit_entry_columns($columns)
{
  return array(
    'cb' => '<input type="checkbox" />',
    'title' => __('Title'),
    'username' => __('username'),
    'userphone' => __('Number'),
    'email' => __('Email'),
    'services' => __('Services'),
    'date' => __('Date')
  );
}
add_action('manage_form_entries_posts_columns', 'optice_edit_entry_columns');

function custom_columns($column, $post_id)
{
  switch ($column) {
    case 'username':
      echo get_post_meta($post_id, 'username')[0];
      break;
    case 'userphone':
      echo get_post_meta($post_id, 'userphone')[0];
      break;
    case 'email':
      echo get_post_meta($post_id, 'email')[0];
      break;
    case 'services':
      echo get_post_meta($post_id, 'userservices')[0];
      break;
  }
}
add_action('manage_form_entries_posts_custom_column', 'custom_columns', 10, 2);
// custom post types and their fields
function optisites_create_post_types()
{
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
    'supports'            => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    'has_archive'         => true,
    'rewrite'             => array('slug' => 'themes'),
    'query_var'           => true
  );

  register_post_type('optisites_themes', $args);
  $entry_labels = array(
    'name'               => 'Entries',
    'singular_name'      => 'Entry',
    'menu_name'          => 'Form Entries',
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
    'show_ui'             => true,
    'show_in_nav_menus'   => false,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 7,
    'menu_icon'           => 'dashicons-feedback',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array('title', 'editor', 'author', 'excerpt'),
    'has_archive'         => true,
    'rewrite'             => array('slug' => 'projects'),
    'query_var'           => true
  );
  register_post_type('form_entries', $entry_args);
}
//   register metaboxes
function optisites_custom_meta_boxes()
{
  add_meta_box('email', 'user email', 'optice_user_email_field', 'form_entries', 'normal', 'high');
  add_meta_box('username', 'user name', 'optice_username_field', 'form_entries', 'normal', 'high');
  add_meta_box('userphone', 'user phone number', 'optice_userphone_field', 'form_entries', 'normal', 'high');
  add_meta_box('userservices', 'services the user is interested in', 'optice_userservices_field', 'form_entries', 'normal', 'high');
}
add_action('add_meta_boxes', 'optisites_custom_meta_boxes');
function optice_user_email_field()
{
  global $post;

  wp_nonce_field(basename(__FILE__), 'email');

  $email = get_post_meta($post->ID, 'email', true);


  echo '<input type="email" name="email" value="' . esc_textarea($email)  . '" class="widefat">';
}
function optice_username_field()
{
  global $post;
  wp_nonce_field(basename(__FILE__), 'username');

  $username = get_post_meta($post->ID, 'username', true);

  echo '<input type="text" name="username" value="' . esc_textarea($username)  . '" class="widefat">';
}
function optice_userphone_field()
{
  global $post;
  wp_nonce_field(basename(__FILE__), 'userphone');

  $userphone = get_post_meta($post->ID, 'userphone', true);

  echo '<input type="number" name="userphone" value="' . esc_textarea($userphone)  . '" class="widefat">';
}
function optice_userservices_field()
{
  global $post;
  wp_nonce_field(basename(__FILE__), 'userservices');

  $userservices = get_post_meta($post->ID, 'userservices', true);

  echo '<textarea name="userservices" class="widefat">' . esc_textarea($userservices) . '</textarea>';
}
add_action('init', 'optisites_create_post_types');



//save the post custom meta 

// Save the Data
function save_custom_meta($post_id)
{
  update_post_meta($post_id, 'email', $_POST['email']);
  update_post_meta($post_id, 'username', $_POST['username']);
  update_post_meta($post_id, 'userphone', $_POST['userphone']);
  update_post_meta($post_id, 'userservices', $_POST['userservices']);
}
add_action('save_post', 'save_custom_meta');
/**
 * Get posts pending count as per Post Type.
 * @param  string $post_type
 * @return integer            Pending count.
 */
function project_get_pending_items($post_type)
{
  global $wpdb;
  $pending_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = %s AND post_status = 'pending'", $post_type));
  return (int) $pending_count;
}
function notification_bubble_in_my_custom_post_type_menu()
{
  global $menu;
  $pending_items = project_get_pending_items('form_entries');
  //while registering a post type the 'menu_position' is important, here our value was 7
  $menu[7][0] .= $pending_items ? " <span class='update-plugins count-1' title='title'><span class='update-count'>$pending_items</span></span>" : '';
}
add_action('admin_menu', 'notification_bubble_in_my_custom_post_type_menu');
