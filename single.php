<?php get_header() ?>
<div class="container-fluid p-4 container single-header">
    <div class="left">
        <div class="categories flex">
            <?php the_category() ?>
        </div>
       <div class="share-mobile flex lg-none">
       <div class="my-3">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" data-template="https://www.facebook.com/sharer/sharer.php?u=_LINK_" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <div class="my-3">
            <a href="https://twitter.com/intent/tweet?text=<?php echo the_title() ?> /<?php echo the_permalink() ?>/" data-template="https://twitter.com/intent/tweet?text=_TITLE_ / _LINK_" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <div class="my-3">
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink() ?>/&amp;title=<?php the_title() ?>&amp;source=LinkedIn" data-template="https://www.linkedin.com/shareArticle?mini=true&amp;url=_LINK_&amp;title=_TITLE_&amp;source=LinkedIn" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <div class="my-3">
            <a target="_blank" href="mailto:?subject=<?php echo the_title() ?>&amp;body=<?php echo the_permalink() ?>/" data-template="mailto:?subject=_TITLE_&amp;body=_LINK_" title="Digital Marketing Guide for Crypto and Blockchain Companies — From Mining to ICO Marketing">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
       </div>
        <div class="all-caps post-meta text-muted">
            <small>
                <b>
                    by: <?php
                        $id = optice_get_post_meta();
                        echo get_the_author_meta('nicename', $id);
                        ?> | UPDATED: <?php echo get_the_date() ?>
                </b>
            </small>
        </div>
        <h1><?php echo the_title() ?></h1>
    </div>
</div>
<div class="flex single-page-content-wrapper">
    <div class="p-5 bg-white sticky-top share">
        <div class="my-3">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" data-template="https://www.facebook.com/sharer/sharer.php?u=_LINK_" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <div class="my-3">
            <a href="https://twitter.com/intent/tweet?text=<?php echo the_title() ?> /<?php echo the_permalink() ?>/" data-template="https://twitter.com/intent/tweet?text=_TITLE_ / _LINK_" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <div class="my-3">
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink() ?>/&amp;title=<?php the_title() ?>&amp;source=LinkedIn" data-template="https://www.linkedin.com/shareArticle?mini=true&amp;url=_LINK_&amp;title=_TITLE_&amp;source=LinkedIn" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <div class="my-3">
            <a target="_blank" href="mailto:?subject=<?php echo the_title() ?>&amp;body=<?php echo the_permalink() ?>/" data-template="mailto:?subject=_TITLE_&amp;body=_LINK_" title="Digital Marketing Guide for Crypto and Blockchain Companies — From Mining to ICO Marketing">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
    </div>
    <div class="container p-3 blog-post">
        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-responsive" alt="<?php echo the_title() ?>">
        <?php the_content() ?>
        <h3>About the author</h3>
        <div class="author-card shadow-sm p-4">
            <div class="avatar mx-4">
                <?php echo get_avatar(get_the_author_meta('user_email', $id), 150); ?>
            </div>
            <div class="text text-left p-2">
                <a href="<?php echo get_the_author_meta('user_url', $id); ?>">
                    <b class="my-4"> <?php echo get_the_author_meta('display_name', $id); ?></b>
                </a>
                <p class="bio my-3">
                    <?php echo get_the_author_meta('user_description', $id); ?>
                </p>
                <p>
                    <?php
                    $facebook = get_the_author_meta('facebook', $post->post_author);
                    $twitter = get_the_author_meta('twitter', $post->post_author);
                    $linked = get_the_author_meta('linkedin', $post->post_author);
                    if ($facebook != '') {
                    ?>
                        <a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i>
                        </a></a>
                    <?php
                    }
                    ?>
                    <?php
                    if ($twitter != '') {
                    ?>
                        <a href="<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i>
                        </a></a>
                    <?php
                    }
                    ?>
                    <?php
                    if ($linked != '') {
                    ?>
                        <a href="<?php echo $linked; ?>" target="_blank"><i class="fab fa-linkedin"></i>
                        </a></a>
                    <?php
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="comment-section">
            <?php comments_template( )?>
        </div>
        <div class="lg-none sidebar">
            <?php get_template_part('templates/single', 'sidebar') ?>
        </div>
    </div>
    <div id="blog-sidebar" class="sidebar py-5 px-3 sm-none">
        <?php get_template_part('templates/single', 'sidebar') ?>
    </div>
</div>
<?php get_footer() ?>