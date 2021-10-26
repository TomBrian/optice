<nav class="navbar navbar-expand-md bg-trans p-3">
    <div>
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/logo-light.svg" width="150" height="50" alt="brand">
        </a>
    </div>
    <button class="menu-opener">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/menu-light.svg" width="30" height="30" alt="">
    </button>
    <?php wp_nav_menu(array(
        'theme_location'  => 'primary',
        'depth'           => 5,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
    )); ?>
  <button class="nav-cta p-1 d-none d-md-block d-lg-block d-xl-block">
      <a href="tel:076814" class="nav-cta-link nav-link">Call us</a>
  </button>
</nav>