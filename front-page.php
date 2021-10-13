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
                A <span class="em">full service</span> Web development and digital solutions agency that helps businesses build a strong presence.
                   
                </h1>
                <p class="all-caps text-light my-4 w-full">
                    Technical seo audit | websites development | wordpress integration & THEME DEVELOPMENT |
                    content writing
                </p>
                <a href="<?php bloginfo( 'url' )?>/contact-us">
                <button class="px-4 py-3 my-1 animate__animated animate__pulse animate__infinite btn hero-cta">
                  lets get started
                </button>
                </a>
            </div>
        </div>
        <div class="hero-waves">
            <img src="<?php echo get_template_directory_uri()?>/src/images/hero-waves.svg" class="d-none d-md-block d-lg-block d-xl-block" class="img" alt="">
        </div>
    </div>
</div>
<div class="container-fluid after-hero">
    <div class="text text-left">
    <div class="pep container-fluid text-center">
        <h2 class="lg:m-5">We prioritize Quality </h2>
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
            <div class="card p-3 m-2 bg-white shadow-sm">
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
            <div class="card p-3 m-2 bg-white shadow-sm">
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
            <div class="card p-3 m-2 bg-white shadow-sm">
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
            <div class="card p-3 m-2 bg-white shadow-sm">
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
    <h3>We work with you. Not just for you</h3>
    <p class="text-left my-4">
    We are transparent through out our development process.
    We use project management platforms and prototypes to show our progress through out our development roadmap
    </p>
    <button class="btn btn-primary">Learn more</button>
    </div>
</div> 
<div class="jumbotron  jumbotron-em text-center">
    <h4>We are one click away</h4>
    <h3 class="animate__animated animate__infinite">call us on 0798388488</h3>
</div>
     <h3 class="text-center my-4">
         From our <a href="<?php echo bloginfo( 'url' )?>/blog"><span class="em">blog</span></a>
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
<script src="<?php echo get_template_directory_uri() ?>/src/js/front-page.js"></script>
<?php get_footer() ?>