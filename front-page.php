<?php get_header() ?>
<div class="front-nav-scroll">
    <?php optice_get_light_navbar(); ?>
</div>
<div class="hero-wrap">
    <div class="parallax-window hero" data-parallax="scroll" data-image-src="<?php echo get_theme_file_uri() ?>/src/images/hero.jpg">
        <!-- navbar dark version -->
        <?php include(dirname(__FILE__) . "/templates/nav-trans.php"); ?>
        <div class="hero-content">
            <div class="hero-text text-left">
                <h1 class="my-1">
                    A <span class="em">full service</span> Web development and digital marketing agency that helps you grow revenue.

                </h1>
                <p class="all-caps text-light my-4 w-full">
                    Search engine optimization | web development | custom wordpress development and wordpress integration |
                    content marketing
                </p>
                <a href="<?php bloginfo('url') ?>/contact-us">
                    <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn hero-cta">
                        lets get started
                    </button>
                </a>
            </div>
        </div>
        <div class="hero-waves">
            <img src="<?php echo get_theme_file_uri() ?>/src/images/hero-waves.svg" class="d-none d-md-block d-lg-block d-xl-block" class="img" alt="">
        </div>
    </div>
</div>
<div class="container-fluid after-hero">
    <div class="text text-left">
        <div class="pep container-fluid text-center">
            <h2 class="lg:m-5">We prioritize Quality </h2>
            <p>We are User Experience(UX) enthusiasts focused on building purpose-driven beautiful websites.
                We major in wordpress which is by far the most popular and powerful content management system for dynamic websites.
                We work with wordpress PHP-APIs giving us the flexibility we need to tailor your website according to all your needs.
            </p>
            <div class="buttons flex my-4 justify-content-center">
                <a href="<?php echo bloginfo('url') ?>/contact-us">
                    <button class="btn btn-lg mx-2 btn-primary main">
                        Get a quote
                    </button>
                </a>
                <a href="<?php echo bloginfo('url') ?>/about">
                    <button class="btn btn-lg mx-2 btn-outline-primary notmain">
                        About us
                    </button>
                </a>
            </div>
        </div>
        <div class="cards services container-fluid flex">
            <div class="card p-3 m-2 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fab fa-searchengin"></i> SEO</span>
                </div>
                <div class="para">
                    <p>
                        Your sites visibilty on search engines depends on a number of factors.
                        From the code and site structure to the content that you site serves.
                        We have studied all these factors and continue to do so. We use this
                        knowledge to help clients rank better on Search Engines as it is the most
                        effective way of marketing.
                    </p>
                </div>
                <hr>
                <strong class="em my-1">Popular Features</strong>
                <ul class="list">
                    <li>Site speed optimization</li>
                    <li>Keyword research</li>
                    <li>Link building</li>
                </ul>
                    <a href="<?php echo bloginfo('url') ?>/services/search-engine-optimization">
                        <button class="btn btn-primary main"><b>View Service</b></button>
                    </a>
            </div>
            <div class="card p-3 m-2 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fas fa-drafting-compass"></i> Web design</span>
                </div>
                <div class="para">
                    <p>
                        Your website's User Interface plays a huge role in assuring the visitor that you can deliver what you claim you can.
                        At Optisites we are User Experience enthusiasts focused on not only how good your website
                        looks but also how well it suits the brand and user alike.


                    </p>
                </div>
                <hr>
                <strong class="em my-1">Popular Features</strong>
                <ul class="list">
                    <li>e-commerce design</li>
                    <li>landing page design</li>
                    <li>form design</li>
                </ul>
                    <a href="<?php echo bloginfo('url') ?>/services/web-design">
                        <button class="btn btn-primary main"><b>View Service</b></button>
                    </a>
            </div>
            <div class="card p-3 m-2 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fas fa-code"></i> Web development</span>
                </div>
                <div class="para">
                    <p>
                        At Optisites we offer a variety of modern web development services to our clients.
                        Our development process is geared towards high performance and top notch User Experience.
                        We also offer custom development services for predesigned websites in all areas.
                    </p>
                </div>
                <hr>
                <strong class="em my-1">Popular Features</strong>
                <ul class="list">
                    <li>Static website design</li>
                    <li>Wordpress integration</li>
                    <li>Laravel web app development</li>
                </ul>
                <a href="<?php echo bloginfo('url') ?>/services/web-development">
                        <button class="btn btn-primary main"><b>View Service</b></button>
                </a>
            </div>
            <div class="card p-3 m-2 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fas fa-paragraph"></i> Content Marketing</span>
                </div>
                <div class="para">
                    <p>
                        Your websites content plays a huge part on whether it serves its purpose.
                        At optisites we help create a content design system that gives your site's visitors
                        clarity on the kinds of services or products you offer.
                        This clarity is crucial in generating leads.
                    </p>
                </div>
                <hr>
                <strong class="em my-1">Popular Features</strong>
                <ul class="list">
                    <li>profesional Finance content writing</li>
                    <li>General content writing</li>
                </ul>
                <a href="<?php echo bloginfo('url') ?>/services/content-marketing">
                    <button class="btn btn-primary main"><b>View Service</b></button>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="mission p-5 my-5 text-center">
    <p class="text-muted"><b>Our mission</b></p>
    <h3>
        Help businesses and online stores build a strong digital presence.
    </h3>
</div>
<div class="process my-4 container flex">
    <div class="image" style="background-image:url('<?php echo get_theme_file_uri() ?>/src/images/process.jpg');">
    </div>
    <div class="text">
        <h3>We work with you. Not just for you</h3>
        <p class="text-left my-4">
            We are transparent through out our development process.
            We use project management platforms and prototypes to show our progress through out our development roadmap
        </p>
        <a href="<?php echo bloginfo('url') ?>/blog">
            <button class="btn btn-primary">Learn more</button>
        </a>
    </div>
</div>
<div class="jumbotron  jumbotron-em text-center">
    <h4> Need help implementing your marketing strategy? Let us help.</h4>
    <a href="<?php echo bloginfo('url') ?>/contact-us">
        <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn big-button-dark">
            Tell us about your project
        </button>
    </a>
</div>
<h3 class="text-center my-4">
    From our <a href="<?php echo bloginfo('url') ?>/blog"><span class="em">blog</span></a>
</h3>
<?php $args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3
);
?>
<div class="container home-catalogue justify-content-center flex">
    <?php
    $query2 = new WP_Query($args);
    ?>
    <?php if ($query2->have_posts()) :
        while ($query2->have_posts()) : $query2->the_post() ?>
            <?php get_template_part('templates/blog', 'card') ?>
    <?php
        endwhile;
    endif; ?>
</div>
<script src="<?php echo get_theme_file_uri() ?>/src/js/front-page.js"></script>
<?php get_footer() ?>