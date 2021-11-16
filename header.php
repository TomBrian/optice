<!DOCTYPE html>
<html lang="en">
<head>
  <!-- kanai theme header -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="<?php
 if (get_the_excerpt() != '') {
   echo get_the_excerpt();
 } else {
   echo bloginfo( 'description' );
 }
?>"/>
<link rel="shortcut icon" href="<?php echo get_theme_file_uri()?>/src/images/favicon.svg" type="image/x-icon">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head()?>
<title><?php the_title()?></title>
<!-- kanai theme header end -->
</head>
<body <?php body_class()?>>
<?php if ( ! is_front_page()) {
             optice_get_light_navbar();
}
else{
  // optice_get_banner();
}
?>
<div class="menu-overlay">
</div>