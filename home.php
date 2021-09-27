<?php get_header()?>
<?php $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 1
            );
            $query = new WP_Query($args);
            ?>
<div class="container latest-container my-3">
<?php if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post() ?>
        <?php
          add_filter( 'excerpt_length', 'optice_custom_loop_new_excerpt_length', 40 );
        get_template_part( 'templates/latest','card');
        remove_filter( 'excerpt_length', 'optice_custom_loop_new_excerpt_length', 40 );
        ?>
        <?php
        endwhile;
 endif;?>
</div>
<div class="container all-cards flex">
<?php if (have_posts()) :
        while (have_posts()) : the_post() ?>
        <?php get_template_part( 'templates/blog','card')?>
        <?php
        endwhile;
 endif;?>
</div>
<?php get_footer()?>