<?php get_header(); ?>
<div class="container">
    <div class="page-header-text my-5">
        <h1><?php the_title() ?></h1>
        <p class="text-muted">
            Your sites visibilty on search engines depends on a number of factors.
            From the code and site structure to the content that you site serves.
            We have studied all these factors and continue to do so.
            We use this knowledge to help clients rank better on Search Engines
            as it is the most effective way of marketing.
        </p>
    </div>
    <div class="text-center container p-5">
        <h3>Search Engine Optimization one of the most effective yet cheapest form of marketing</h3>
    </div>
    <h5 class="text-center nunito my-4">Our SEO services</h5>
    <div class="clientele-hero container flex">
        <div class="image">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/keywords.jpg ?>" alt="Keyword research at Optisites">
        </div>
        <div class="text">
            <h1 class="my-3">Keyword research and building.</h1>
            <p class="my-3 text-muted">
                We conduct an extensive keyword research on keywords that rank best in your niche.
                We then implement the keywords on your web page titles,urls and content.
                Good use of keywords helps the algorithms used in ranking identify you by your
                niche and rank you according to relevance.
                Poor use of keywords can get your site penalized by search Engines.
            </p>
        </div>
    </div>
    <div class="clientele-hero container flex">
        <div class="text">
            <h1 class="my-3"> Search engine performance tracking.</h1>
            <p class="my-3 text-muted">
                We help set up the right tools to track your website’s traffic.
                These can be both free and premium depending on some factors or the client’s preference.
                Tracking your site’s traffic helps you judge your marketing strategy’s effectiveness.
            </p>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/tracking.png ?>" alt="Search engine performance tracking.">
        </div>
    </div>
    <div class="clientele-hero container flex">
        <div class="image">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/sanitization.png ?>" alt="Code sanitization.">
        </div>
        <div class="text">
            <h1 class="my-3">Code sanitization.</h1>
            <p class="my-3 text-muted">
                We review your website’s code and correct the development issues affecting your site’s
                visibility on search engines.
                This service’s cost and duration may vary according to the size of your codebase.
            </p>
        </div>
    </div>
    <div class="clientele-hero container flex">
        <div class="text">
            <h1 class="my-3">Speend testing and optimization.</h1>
            <p class="my-3 text-muted">
                Slow websites have higher bounce rates (rates at which visitors leave the site without completing an action).
                This could harm your sites SEO as well as your conversion rates. Slow speed can be as a result of many things
                e.g Heavy resources and render blocking resources, large image files, non-friendly file types e.t.c. We help fix all these issues and guarantee speed.
            </p>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/speed.png ?>" alt="Speend testing and optimization.">
        </div>
    </div>
</div>
<div class="jumbotron  jumbotron-em text-center">
    <h4>Looking of a custom Search Engine Optimization solution ?</h4>
    <a href="<?php echo bloginfo('url') ?>/contact-us">
        <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn big-button-dark">
            Request a free quote
        </button>
    </a>
</div>
<?php get_footer(); ?>