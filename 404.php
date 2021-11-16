<?php
wp_redirect(get_home_url());
?>
<?php get_header()?>
<h1 class="m-5"><?php the_title()?></h1>
<?php the_content()?>
<?php get_footer()?>