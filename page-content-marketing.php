<?php get_header(); ?>
<div class="container">
    <div class="page-header-text my-5">
        <h1><?php the_title() ?></h1>
        <p class="text-muted">
            Your websites content plays a huge part on whether it serves its purpose.
            At optisites we help create a content design system that gives your sites visitors clarity on the kinds of services or products you offer.
            This clarity is crucial in generating leads.
            Not only does great content attract clients it also favors your sites SEO performance.
            We help create and fix your websites content to favor your sites performance.
        </p>
    </div>
    <div class="container my-5 p-2">
        <h3 class="text-center">
            Optisites Helps you create content that not only generate leads but also
            works great on SEO
        </h3>
    </div>
    <h5 class="text-center nunito my-4">Types of content</h5>
    <div class="clientele-hero container flex">
        <div class="text">
            <h1 class="my-3">General webpage content.</h1>
            <p class="my-3 text-muted">
                This is the General webpage content.It serves the same purpose as a manual.
                It describes your site's purpose and directs the visitor to Call To Actions.
                We write valuable, Keyword rich content to help rank in SEO.We focus
                on the content consistency and relevance to ensure that the content serves
                its purpose as well as helping in SEO and improving the User Experience.
            </p>
        </div>
        <div class="image" id="general-c">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/general-c.jpg ?>" alt="General Content">
        </div>
    </div>
    <div class="clientele-hero container flex">
        <div class="image" id="blog-c">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/blog-c.jpg ?>" alt="Blog Content">
        </div>
        <div class="text">
            <h1 class="my-3"> Blog Post Content.</h1>
            <p class="my-3 text-muted">
                A blog is key in generating new leads to your services.Blog posts attract visitors from various sources.
                Running a successful blog requires quality content to not only help in attracting Clients
                but also in Search Engine Optimization.Blog posts also help create personal relations with prospective clients.
                At Optisites we help create quality blog content for your site. This is done after thorough research on the field of interest.
            </p>
        </div>
    </div>
</div>
<div class="jumbotron  jumbotron-em text-center">
    <h4>Do you need valuable website content?</h4>
    <a href="<?php echo bloginfo('url') ?>/contact-us">
        <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn big-button-dark">
            Request a free quote
        </button>
</a>
</div>
<?php get_footer(); ?>