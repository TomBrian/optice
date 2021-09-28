<?php get_header() ?>
<div class="container page-header px-4">
    <h1 class="my-2"><?php the_title() ?></h1>
    <div class="image-cover" >
        <img src="<?php echo the_post_thumbnail_url()?>" class="img-responsive" alt="<?php the_title()?>">
    </div>
</div>
<div class="container single-post text-left">
    <div class="container">
        <?php the_content() ?>
    </div>
</div>
<?php get_footer() ?>