<div class="container-fluid site-footer px-3">
    <div class="container flex footer-links">
        <div class="socials">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/logo-light.svg" width="150" class="my-4" height="50px" alt="logo">
            <p>
                Optisites is a full service web design and digital solutions agency based in Nairobi Kenya focused on building a strong digital prescence for our clients.
            </p>
            <ul class="links my-3">
                <li class="my-2"><i class="fab fa-facebook"></i> &nbsp;&nbsp;&nbsp;optisites</li>
                <li class="my-2"><i class="fab fa-twitter"></i> &nbsp;&nbsp;&nbsp;optisites</li>
                <li class="my-2"><i class="fab fa-linkedin"></i> &nbsp;&nbsp;&nbsp;optisites</li>
                <li class="my-2"><i class="fas fa-envelope"></i> &nbsp;&nbsp;&nbsp;admin@optisites.com</li>
            </ul>
        </div>
        <div class="fast-links my-3 px-3 flex">
            <div class="lg-col">
                <strong>
                    Blog
                </strong>
                <ul class="my-3">
                <?php
    $args['posts_per_page'] = 6;
    $query2 = new WP_Query($args);
    ?>
    <?php if ($query2->have_posts()) :
      while ($query2->have_posts()) : $query2->the_post() ?>
       <li class="my-2"> <a href="<?php echo the_permalink()?>"><?php echo the_title() ?></a> </li>
    <?php
      endwhile;
    endif; ?>
                </ul>
            </div>
            <div class="sm-col mx-3">
                <strong>
                    Services
                </strong>
                <ul class="my-3">
                <li class="my-2"> <a href="<?php bloginfo( 'url' )?>/services/web-design">Web design</a> </li>
                <li class="my-2"> <a href="<?php bloginfo( 'url' )?>/services/web-development">Web development</a> </li>
                <li class="my-2"> <a href="<?php bloginfo( 'url' )?>/services/search-engine-optimization">SEO</a> </li>
                <li class="my-2"> <a href="<?php bloginfo( 'url' )?>/services/content-writing">content writing</a> </li>
                </ul>
            </div>
            <div class="sm-col">
                <strong>
                    Who we serve
                </strong>
                <ul>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#e-commerce">E-commerce</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#law-firms">Law firms</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#healthcare">Healthcare</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#fashion-and-beauty">Fashion and beauty</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#manufacturing">Manufacturing</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#real-estate">Real Estate</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#education">Education</a></li>
                    <li class="my-3"><a href="<?php bloginfo( 'url' )?>/who-we-serve#personal-brands">Personal brands</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copyright text-center container-fluid">
<small>
        &copy; <?php echo Date('Y');?>  Optisites web design and digital solutions  |  privacy policy
    </small><br>
<small>Built with ♥ in Kenya by Optisites</small>
</div>
<?php wp_footer() ?>
</body>
</html> 