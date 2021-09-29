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
                A <span class="em">full service</span> digital agency that helps businesses build a strong presence.
                   
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
        <!-- <div class="hero-waves">
            <img src="<?php //echo get_template_directory_uri()?>/src/images/hero-waves.svg" class="d-none d-md-block d-lg-block d-xl-block" class="img" alt="">
        </div> -->
    </div>
</div>
<div class="container-fluid after-hero">
    <div class="text text-left">
    <div class="pep container-fluid text-center">
        <h2 class="lg:m-5">We prioritize <span class="em">Quality</span> </h2>
        <p>We are  User Experience(UX) enthusiasts focused on building purpose-driven beautiful websites.
            We major in wordpress which is by far the most popular and powerful content management  system for dynamic websites.
             We work with wordpress PHP-APIs giving us the flexibility we need to tailor your website according to all your needs.
        </p>
        <div class="buttons flex my-4 justify-content-center">
            <button class="btn btn-lg mx-2 btn-primary main">
                Get a quote
            </button>
            <button class="btn btn-lg mx-2 btn-outline-primary notmain">
                About us
            </button>
        </div>
 </div>
        <div class="cards services container-fluid flex">
            <div class="card p-3 m-3 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fab fa-searchengin"></i> SEO</span>
                </div>
                <div class="para">
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, amet adipisci! Facere
                      , assumenda nostrum, quae rem odit aperiam, nisi eius eos tenetur magni cum!
                  </p>
                </div>
                <hr>
                  <strong class="em my-1">Popular Features</strong>
                  <ul class="list">
                      <li>Full SEO audit</li>
                      <li>Keyword research</li>
                      <li>Link building</li>
                  </ul>
                  <div class="button my-2">
                      <button class="btn btn-primary main"><b>View Service</b></button>
                  </div>
            </div>
            <div class="card p-3 m-3 bg-white shadow-sm">
                <div class="title text-center">
                <span class="card-title text-center"><i class="fas fa-drafting-compass"></i> Web design</span>
                </div>
                <div class="para">
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, amet adipisci! Facere
                      , assumenda nostrum, quae rem odit aperiam, nisi eius eos tenetur magni cum!
                  </p>
                </div>
                <hr>
                  <strong class="em my-1">Popular Features</strong>
                  <ul class="list">
                      <li>e-commerce design</li>
                      <li>landing page design</li>
                      <li>form design</li>
                  </ul>
                  <div class="button my-2">
                      <button class="btn btn-primary main"><b>View Service</b></button>
                  </div>
            </div>
            <div class="card p-3 m-3 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fas fa-code"></i> Web development</span>
                </div>
                <div class="para">
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, amet adipisci! Facere
                      , assumenda nostrum, quae rem odit aperiam, nisi eius eos tenetur magni cum!
                  </p>
                </div>
                <hr>
                  <strong class="em my-1">Popular Features</strong>
                  <ul class="list">
                      <li>Static website design</li>
                      <li>Wordpress integration</li>
                      <li>Laravel web app development</li>
                  </ul>
                  <div class="button my-2">
                      <button class="btn btn-primary main"><b>View Service</b></button>
                  </div>
            </div>
            <div class="card p-3 m-3 bg-white shadow-sm">
                <div class="title text-center">
                    <span class="card-title text-center"><i class="fas fa-paragraph"></i> Content creation</span>
                </div>
                <div class="para">
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, amet adipisci! Facere
                      , assumenda nostrum, quae rem odit aperiam, nisi eius eos tenetur magni cum!
                  </p>
                </div>
                <hr>
                  <strong class="em my-1">Popular Features</strong>
                  <ul class="list">
                      <li>profesional Finance content writing</li>
                      <li>General content writing</li>
                  </ul>
                  <div class="button my-2">
                      <button class="btn btn-primary main"><b>View Service</b></button>
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
    <div class="image" style="background-image:url('<?php echo get_template_directory_uri() ?>/src/images/process.jpg');">
    </div>
    <div class="text">
    <h3>We work with you. Not just for <span class="em">you</span></h3>
    <p class="text-left my-4">
    We are transparent throgh out our development process.
    We use project management platforms and prototypes to show our progress through out our development roadmap
    </p>
    <button class="btn btn-primary">Learn more</button>
    </div>
</div>
<div class="container-fluid contact-wrapper">
    <div class="contact flex">
        <?php get_template_part('templates/contact', 'form') ?>
        <div class="text">
            <div class="text-lg my-5">
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