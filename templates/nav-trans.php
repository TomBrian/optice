<nav class="navbar navbar-expand-md p-3">
    <div>
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/logo-light.svg" width="118" height="50" alt="brand">
        </a>
    </div>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/menu-light.svg" width="40" height="40" alt="">
    </button>
    <?php wp_nav_menu(array(
        'theme_location'  => 'primary',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
    )); ?>
  <button class="nav-cta p-1 d-none d-md-block d-lg-block d-xl-block">
      <a href="#" class="nav-cta-link nav-link">Hire us</a>
  </button>
</nav>