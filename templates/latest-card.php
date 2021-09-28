<div class="blog-card latest-card">
    <div class="image">
    <a href="<?php echo the_permalink()?>">
        <?php the_post_thumbnail(['400', '200']) ?>
    </a>
    </div>
    <div class="text">
       <a href="<?php echo the_permalink()?>"><?php the_title('<strong class="card-title">', '</strong>'); ?></a>
        <div class="date all-caps my-1 text-muted">
<?php the_date()?>
</div>
       <hr>
       <small class="text-muted font-weight-bold author">By <?php the_author() ?></small>
        <div class="excerpt my-3">
            <?php the_excerpt() ?>
        </div>
           <div class="categories all-caps text-muted my-2 flex">
<?php the_category( '','multiple' )
?>
</div>
    </div>
</div>