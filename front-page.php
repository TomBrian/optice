<?php get_header() ?>
<div class="front-nav-scroll">
    <?php kanai_get_light_navbar(); ?>
</div>
<div class="hero-wrap">
    <div class="parallax-window hero" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/src/images/hero.jpg">
        <!-- navbar dark version -->
        <?php include(dirname(__FILE__) . "/templates/nav-trans.php"); ?>
        <div class="hero-content">
            <div class="hero-text text-left">
                <h1 class="my-1">
                    We Help Create <span class="em">unforgettable</span> Experiences for your Audience on the web
                </h1>
                <p class="all-caps text-light my-4 w-full">
                    Technical seo audit | websites development | wordpress integration & THEME DEVELOPMENT |
                    content writing
                </p>
                <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn hero-cta">
                    Lets get started
                </button>
            </div>
        </div>
        <div class="hero-waves">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/hero-waves.svg" class="d-none d-md-block d-lg-block d-xl-block" class="img" alt="">
        </div>
    </div>
</div>
<div class="services-wrapper container-fluid">
    <div class="services p-2 flex">
        <div class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/seo.svg" width="50" height="50" alt="seo">
           </div>
           <h3>SEO</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
               Aut reiciendis 
               repellendus explicabo laudantium atque tempora reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
        <div class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/figma.svg" width="50" height="50" alt="seo">
           </div>
           <h3>Web Design</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aut reiciendis 
               repellendus explicabo laudantium atque tempora reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
        <div class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/code.svg" width="50" height="50" alt="seo">
           </div>
           <h3>Web Development</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aut reiciendis 
               repellendus explicabo laudantium atque tempora reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
        <div class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/content.svg" width="50" height="50" alt="seo">
           </div>
           <h3>Content creation</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut reiciendis 
               repellendus explicabo laudantium atque tempora
                reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
    </div>
</div>
<script>
    function onSubmit(token) {
        document.getElementById("protected").submit();
    }
</script>
<script src="<?php echo get_template_directory_uri() ?>/src/js/front-page.js"></script>
<?php get_footer() ?>