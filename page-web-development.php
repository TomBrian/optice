<?php get_header(); ?>
<div class="container">
    <div class="page-header-text my-5">
        <h1><?php the_title() ?></h1>
        <p class="text-muted">
            At Optisites we offer a variety of modern web development services to our clients.
            Our development process is geared towards high performance and top notch User Experience.
            We also offer custom development services for predesigned websites in all areas.
        </p>
    </div>
    <div class="text-center py-5">
        <h2>Web development services</h2>
    </div>
    <div class="container">
        <div class="clientele-hero container flex">
            <div class="text">
                <h1 class="my-3">Custom Wordpress development.</h1>
                <p class="my-3 text-muted">
                    Wordpress has made the process of creating a website very easy through the use of themes.
                    About eighty percent of your website's design is determined by your theme of choice.
                    This limits your website's potential to stand out.
                    Custom wordpress developments is one of our main services where we build our your website from scratch
                    through custom theme development.
                </p>
            </div>
            <div class="image" id="blog-c">
                <img src="<?php echo get_theme_file_uri() ?>/src/images/wordpress.jpg ?>" alt="wordpress development">
            </div>
        </div>
        <div class="clientele-hero container flex">
            <div class="image" id="blog-c">
                <img src="<?php echo get_theme_file_uri() ?>/src/images/e-commerce.jpg ?>" alt="e-commerce">
            </div>
            <div class="text">
                <h1 class="my-3">E-commerce development.</h1>
                <p class="my-3 text-muted">
                    More people are shopping online.Make your products available to people online through our ecommerce development.
                    We mainly use wordpress woocommerce in e-commerce development.
                    Woocommerce gives us the flexibility to build stores for custom products
                </p>
            </div>
        </div>
        <div class="clientele-hero container flex">
            <div class="text">
                <h1 class="my-3">Wordpress integration.</h1>
                <p class="my-3 text-muted">
                    We help clients transform their existing static websites to wordpress themes giving them access to all the great
                    features offered by wordpress.
                    This gives you the freedom to create new pages and even use page builders on them.
                </p>
            </div>
            <div class="image" id="blog-c">
                <img src="<?php echo get_theme_file_uri() ?>/src/images/blog-c.jpg ?>" alt="Blog Content">
            </div>
        </div>
        <div class="clientele-hero container flex">
            <div class="image" id="blog-c">
                <img src="<?php echo get_theme_file_uri() ?>/src/images/webdev.jpg ?>" alt="Web development">
            </div>
            <div class="text">
                <h1 class="my-3">Web application development.</h1>
                <p class="my-3 text-muted">
                    We help clients bring their ideas to life through fullstack web app development.
                    We use tools such as laravel,react and vue JS.
                    This service has alot of limitations based on how extensive the idea’s functionality is.
                </p>
            </div>
        </div>
        <div class="container my-5 text-center">
            <h3>Looking of a custom web development solution ?</h3>
            <a href="<?php echo bloginfo('url') ?>/contact-us">
                <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn big-button-dark">
                    Request a free quote
                </button>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>