<?php get_header() ?>

<div class="container-fluid py-5">
    <div class="container blog-header">
        <strong class="all-caps text-muted"><?php single_cat_title();?></strong>
        <h1 class="mx-2 my-4 text-left">
            Explore the latest stories about what is happening in the world of web and technology.From news,tutorials to updates and everything you need to know about.
        </h1>
        <hr>
        <div class="container cats">
        <a href="<?php bloginfo('url')?>/blog"><div class="badge p-3 all-caps badge-light">All</div></a>
            <?php
            $categories = get_categories();
            $selected_cat =  $wp_query->query['category_name'];
            foreach ($categories as $category) {
                if (strval($category->slug) == strval($selected_cat)) {
                    echo '<a href="' . get_category_link($category->term_id) . '"><div class="badge p-3 all-caps badge-primary">' . $category->name . '</div></a>';
                } else {
                    echo '<a href="' . get_category_link($category->term_id) . '"><div class="badge p-3 all-caps badge-light">' . $category->name . '</div></a>';
                }
            } ?>
        </div>

    </div>

    <?php $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 1,
        'category_name' => $category->name
    );
    $query = new WP_Query($args);
    ?>
    <div class="container-fluid latest-container my-3">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post() ?>
                <?php
                add_filter('excerpt_length', 'optice_custom_loop_new_excerpt_length', 100);
                get_template_part('templates/latest', 'card');
                remove_filter('excerpt_length', 'optice_custom_loop_new_excerpt_length', 100);
                ?>
        <?php
            endwhile;
        endif; ?>
    </div>
    <div class="container-fluid all-cards flex">
        <?php
        $args['posts_per_page'] = -1;
        $query2 = new WP_Query($args);
        ?>
        <?php if ($query2->have_posts()) :
            while ($query2->have_posts()) : $query2->the_post() ?>
                <?php get_template_part('templates/blog', 'card') ?>
        <?php
            endwhile;
        endif;?>
    </div>
</div>
<?php get_footer() ?>