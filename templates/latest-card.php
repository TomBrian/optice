<div class="blog-card latest-card">
    <div class="image">
        <?php the_post_thumbnail(['400', '200']) ?>
    </div>
    <div class="text">
        <?php the_title('<strong class="card-title">', '</strong>'); ?>
        <div class="categories text-muted flex">
            <?php the_category('', 'multiple') ?>
        </div>
       <hr>
       <small class="text-muted font-weight-bold author">By <?php the_author() ?></small>
        <div class="excerpt text-muted my-3">
            <?php the_excerpt() ?>
        </div>
        
    </div>
</div>