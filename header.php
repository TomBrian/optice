<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="<?php bloginfo('description')?>"/>
<!-- tailwind messes with wordpress admin dashboard styles when enqueued in functions.php -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/src/images/favicon.svg" type="image/x-icon">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>

<!-- -->
<?php wp_head()?>
<title>
<?php if (is_front_page()) {
                bloginfo('name');
            } elseif (is_home()) {
                bloginfo('title');
            } else {
                the_title();
            } ?> | <?php bloginfo('description') ?>
</title>
</head>
<body>
<?php if ( ! is_front_page()) {
             optice_get_light_navbar();
}
else{
   optice_get_banner();
}
?>