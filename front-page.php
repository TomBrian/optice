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
        <div data-aos="zoom-in-up" class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/seo.svg" width="50" height="50" alt="seo">
           </div>
           <h3>SEO</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
               Aut reiciendis 
               repellendus explicabo laudantium atque tempora reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
        <div data-aos="zoom-in-up" class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/figma.svg" width="50" height="50" alt="seo">
           </div>
           <h3>Web Design</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aut reiciendis 
               repellendus explicabo laudantium atque tempora reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
        <div data-aos="zoom-in-up" class="service-card my-4 text-center p-2 shadow-sm">
           <div class="icon p-2">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/code.svg" width="50" height="50" alt="seo">
           </div>
           <h3>Web Development</h3>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aut reiciendis 
               repellendus explicabo laudantium atque tempora reprehenderit 
               vitae veniam consequatur consequuntur!</p>
        </div>
        <div data-aos="zoom-in-up" class="service-card my-4 text-center p-2 shadow-sm">
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
<div class="socials container align-items-center justify-content-center flex">
<a href="#">
    <img src="<?php echo get_template_directory_uri() ?>/src/images/fiverr.svg" width="100" height="100" class="mx-3" alt="fiverr">
</a>
<a href="#">
    <img src="<?php echo get_template_directory_uri() ?>/src/images/freelancer.svg" width="181" height="100" class="mx-3" alt="freelancer">
</a> 
<a href="#">
    <img src="<?php echo get_template_directory_uri() ?>/src/images/upwork.svg" width="100" height="100" class="mx-3" alt="upwork">
</a>
<a href="#">
    <img src="<?php echo get_template_directory_uri() ?>/src/images/linked.svg" width="50" height="50" class="mx-3" alt="linked in">
</a>
</div>
<div class="pep container flex p-4 text-center">
      <div class="bulb" data-aos="fade-right">
          <img src="<?php echo get_template_directory_uri() ?>/src/images/pep-bulb.svg" width="332" height="340" alt="pep bulb">
      </div>
      <div class="text text-left">
          <h3 class="my-4">you Get <span class="em">Quality</span></h3>
          <p class="text-muted">
          We are  User Experience(UX) enthusiasts focused on building purpose-driven beautiful websites.
          We major in wordpress which is by far the most popular and powerful content management  system for dynamic websites. 
          We work with wordpress as a PHP framework giving us the flexibility we need to tailor your website according to all your needs.
          </p>
      </div>
</div>
<div class="container-fluid">
    <div class="belt flex">
        <div class="belt-card text-center p-2">
            <div class="icon">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/rocket.svg" width="50" height="50" alt="pep bulb">
            </div>
            <h3 class="m-3">
                Speed
            </h3>
            <p>
            Your site’s performance is critical for well, everything. Google uses your site’s speed as one of the factors for SEO.
             Fast websites also reduce bounce rates hence better conversion rates. 
            </p>
        </div>
        <div class="belt-card text-center p-2">
            <div class="icon">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/ux.svg" width="50" height="50" alt="pep bulb">
            </div>
            <h3 class="m-3">
                User Experience
            </h3>
            <p>
            We build purpose driven designs.Our clean design system are guaranteed to turn visitors to clients.
            We are also very keen on the tools we use and how negatively they might affect your sites UX
            </p>
        </div>
        <div class="belt-card text-center p-2">
            <div class="icon">
               <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/shield.svg" width="50" height="50" alt="pep bulb">
            </div>
            <h3 class="m-3">
                Security
            </h3>
            <p>
            Your websites security is a crucial factor for your success in the web.
             That is why we are keen in secure development. 
            We make sure thet we  use secure tools and plugins. 
            </p>
        </div>
        <div class="belt-card text-center p-2">
            <div class="icon">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/transparency.svg" width="50" height="50" alt="pep bulb">
            </div>
            <h3 class="m-3">
                Transparency
            </h3>
            <p>
            We are transparent throgh out our development process.
            We use project management platforms and prototypes to show our progress through out our development roadmap 
            </p>
        </div>
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