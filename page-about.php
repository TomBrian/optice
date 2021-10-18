<?php get_header() ?>
<div class="container py-5 about-hero flex">
  <div class="text">
    <h1 class="my-3">Grow your business with a digital agency you can trust.</h1>
    <p class="my-3">We are a team of dedicated freelancers focused on <b>helping businesses build a strong digital presence</b>.
      We offer a variety of services ranging from web development,web design,content creation and Search Engine Optimization.
      We are not only focused on helping businesses and individuals reach a wider audience but also create great experiences by User Experience driven development and design.</p>
    <a href="<?php echo bloginfo('url') ?>/contact-us">
      <button class="btn btn-primary text-lg">
        Lets get started
      </button>
    </a>
  </div>
  <div class="image">
    <img src="<?php echo get_template_directory_uri() ?>/src/images/process.jpg" alt="Optisites">
  </div>
</div>
<div class="container py-5 about-hero flex">
  <div class="image">
    <img src="<?php echo get_template_directory_uri() ?>/src/images/kanban.jpg" alt="Optisites">
  </div>
  <div class="text">
    <h1 class="my-3">Taking you throughout our development process.</h1>
    <p class="my-3">
      Transparency is a major key to client satisfaction.We use project management softwares to indicate the development process.
      We also offer unlimited revisions during the first month after our delivery.We use freelance platforms such as fiverr and upwork for payment and delivery.
    </p>
    <a href="<?php echo bloginfo('url') ?>/contact-us">
      <button class="btn btn-primary text-lg">
        Contact us to learn more
      </button>
    </a>
  </div>
</div>
<div class="jumbotron text-center">
  <div class="text">
    <h3>Tools we use</h3>
    <div class="tools py-5 justify-content-center flex">
      <a href="http://www.google.com/search?q=Wordpress+CMS" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/wordpress.svg" width="70" height="70" alt="wordpress">
      </a>
      <a href="http://www.google.com/search?q=Laravel" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/laravel.svg" width="70" height="70" alt="laravel">
      </a>
      <a href="http://www.google.com/search?q=vue+js" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/vue.svg" width="70" height="70" alt="vue js">
      </a>
      <a href="http://www.google.com/search?q=Tailwind+CSS" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/tailwind.svg" width="116.36" height="70" alt="tailwind css">
      </a>
      <a href="http://www.google.com/search?q=Javascript" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/js.svg" width="70" height="70" alt="js">
      </a>
      <a href="http://www.google.com/search?q=Hypertext+Preprocessor" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/php.svg" width="70" height="70" alt="php">
      </a>
      <a href="http://www.google.com/search?q=Bootstrap" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/bootstrap.svg" width="70" height="70" alt="bootstrap">
      </a>
      <a href="http://www.google.com/search?q=CSS" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/css.svg" width="70" height="70" alt="css">
      </a>
      <a href="http://www.google.com/search?q=HTML" class="m-3" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/tools/html.svg" width="70" height="70" alt="html">
      </a>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-em services-w-b text-center">
  <div class="text">
    <h3>Services without borders</h3>
    <p>Our talents are accessible to anyone anywhere. We are available for virtual meetings on patforms like Google Meet or any other platform the client chooses.
      Physical meetings are only possible to those around central Kenya.
  </div>
  </p>
</div>
<?php get_footer() ?>