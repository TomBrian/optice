<div class="blog-card">
    <a href="<?php echo the_permalink() ?>">
        <?php the_post_thumbnail(['400', '200']) ?>
    </a>
    <div class="categories all-caps text-muted my-2 flex">
<?php the_category( '','multiple' )
?>
</div>
    <div class="date all-caps my-1 text-muted">
        <?php the_date() ?>
    </div>
    <div class="my-2"> <a href="<?php echo the_permalink() ?>"><?php the_title('<strong class="card-title">', '</strong>'); ?></a></div>
</div>