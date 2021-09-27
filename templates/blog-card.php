<div class="blog-card">
<?php the_post_thumbnail(['400', '200']) ?>
<div class="categories text-muted my-2 flex">
<?php the_category( '','multiple' )?>
</div>
<div><?php the_title('<strong class="card-title">','</strong>');?></div>
<hr>
<small class="text-muted font-weight-bold author">By <?php the_author()?></small>
</div>