<?php
$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
if ($pagekids) {
$firstchild = $pagekids[0];
wp_redirect(get_permalink($firstchild->ID));
}
?>
<?php get_header()?>
<h1 class="m-5"><?php the_title()?></h1>
<?php the_content()?>
<?php get_footer()?>