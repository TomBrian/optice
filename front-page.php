<?php get_header() ?>
<div class="front-nav-scroll">
    <?php optice_get_light_navbar(); ?>
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
            <!-- <img src="<?php //echo get_template_directory_uri() ?>/src/images/hero-waves.svg" class="d-none d-md-block d-lg-block d-xl-block" class="img" alt=""> -->
        </div>
    </div>
</div>

<div class="container-fluid p-3 contact-wrapper">
    <div class="contact flex">
        <?php get_template_part( 'templates/contact','form' )?>
        <div class="text">
         <div class="text-lg my-2">
         Are you ready to talk to an expert? <br><br>
            <b class="em-text my-1">Give us a call</b><br>
            <b class="phone">(+254)42456364</b>
            <ul class="my-3">
                <li>Fast response and delivery.</li>
                <li>Transparent development process.</li>
                <li>Quality and secure development.</li>
            </ul>
         </div>
         <div class="footer">
           <p class="all-caps">
               You can also find us on
           </p>
           <div class="socials align-items-center justify-content-center flex">
        <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/fiverr.svg" width="90" height="90" class="mx-3" alt="fiverr">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/freelancer.svg" width="171" height="90" class="mx-3" alt="freelancer">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/upwork.svg" width="90" height="90" class="mx-3" alt="upwork">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/linked.svg" width="40" height="40" class="mx-3" alt="linked in">
        </a>
    </div>
         </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri() ?>/src/js/front-page.js"></script>
<?php get_footer() ?>