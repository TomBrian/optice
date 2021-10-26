<nav class="navbar sticky-top bg-white shadow-sm navbar-expand-md p-2">
    <div>
        <a class="navbar-brand" href="<?php echo bloginfo('url') ?>">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/logo-dark.svg" width="150" height="50" alt="brand">
        </a>
    </div>
    <button class="menu-opener">
        <img src="<?php echo get_template_directory_uri() ?>/src/images/menu-dark.svg" width="30" height="30" alt="">
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
      <a href="tel:0768148398" class="nav-cta-link nav-link">Call us</a>
</button>
</nav>