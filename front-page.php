<?php get_header() ?>
<div class="front-nav-scroll">
    <?php kanai_get_light_navbar(); ?>
</div>
<div class="hero-wrap">
    <div class="hero">
        <!-- navbar dark version -->
        <?php include(dirname(__FILE__) . "/templates/nav-trans.php"); ?>
        <div class="hero-content">
            <div class="hero-text text-center">
                <h1 class="my-1">We Help Create <span class="em">unforgettable</span> Experiences for your Audience on the web</h1>
                <p class="all-caps text-light my-1">
                    Technical seo audit | websites development | wordpress integration & THEME DEVELOPMENT |
                    Fintech technical writing
                </p>
                <button class="px-4 py-3 my-1 btn hero-cta">
                    Lets get started
                </button>
            </div>
        </div>
        <div class="hero-waves">
            <img src="<?php echo get_template_directory_uri() ?>/src/images/hero-waves.svg" class="img" alt="">
        </div>
    </div>
    <div class="after-hero container-fluid text-center">
        <div class="text">
            <h2>you get <span class="em">quality</span></h2>
            <p class="text-muted my-3">
                We are User Experience(UX) enthusiasts focused on building purpose-driven beautiful websites.
                We major in wordpress which is by far the most popular and powerful content management system for dynamic websites.
                We work with wordpress-PHP APIs giving us the flexibility we need to tailor your website according to all your needs.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="belt flex">
            <div class="text-center belt-card mx-2">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/rocket.svg" width="50" height="50" alt="speed">
                </div>
                <h3 class="em my-2">Speed</h3>
                <div class="text">
                    <p class="text-muted">
                        Your site’s performance is critical for well, everything.
                        Google uses your site’s speed as one of the factors for SEO.
                        Fast websites also reduce bounce rates hence better conversion rates.
                    </p>
                </div>
            </div>
            <div class="text-center belt-card mx-2">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/ux.svg" width="50" height="50" alt="user experence">
                </div>
                <h3 class="em my-2">User Experience</h3>
                <div class="text">
                    <p class="text-muted">
                        We build purpose driven designs.Our clean design system are guaranteed to turn visitors to clients.
                        We are also very keen on the tools we use and how negatively they might affect your sites UX
                    </p>
                </div>
            </div>
            <div class="text-center belt-card mx-2">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/shield.svg" width="50" height="50" alt="security">
                </div>
                <h3 class="em my-2">Security</h3>
                <div class="text">
                    <p class="text-muted">
                        Your websites security is a crucial factor for your success on the web.
                        That is why we are keen in secure development.
                        We make sure thet we use secure tools and plugins or develop our own if we have to.
                    </p>
                </div>
            </div>
            <div class="text-center belt-card mx-2">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/belt/transparency.svg" width="50" height="50" alt="transparency">
                </div>
                <h3 class="em my-2">Transparency</h3>
                <div class="text">
                    <p class="text-muted">
                        We are transparent throgh out our development process.
                        We use project management platforms and prototypes to show our progress through out our development roadmap
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us py-3 my-3 flex container">
        <div class="form">
            <form action="" class="shadow-sm p-3">
                <h4 class="my-3 text-center">Contact us</h4>
                <div class="flex my-3">
                    <input type="text" name="fname" class="form-control" placeholder="first name" required>
                    <input type="text" name="sname" class="form-control" placeholder="second name" required>
                </div>
                <input type="email" name="email" class="form-control my-3" placeholder="your email address" required>
                <input type="tel" name="phone" class="form-control my-3" placeholder="your phone number" required>
                <div class="form-group my-3">
                    <select class="form-control" name="method" id="method-select" required>
                        <option value="">How should we reply ?</option>
                        <option>Give me a call</option>
                        <option>Send me an email</option>
                    </select>
                </div>
                <textarea name="message" id="" class="form-control my-3" required>Your message...</textarea>
                <button type="submit" class="submit px-4 py-2">Send</button>
            </form>
        </div>
        <div class="links">
            <div class="features my-3">
                <ul>
                    <li class="flex my-2 align-items-center">
                        <div class="mx-3"><i class="fas fa-check"></i></div>
                        <div class="text text-muted"> Clean Design</div>
                    </li>
                    <li class="flex my-2 align-items-center">
                        <div class="mx-3"><i class="fas fa-check"></i></div>
                        <div class="text text-muted"> Custom Website development</div>
                    </li>
                    <li class="flex my-2 align-items-center">
                        <div class="mx-3"><i class="fas fa-check"></i></div>
                        <div class="text text-muted"> Search engine optimization</div>
                    </li>
                    <li class="flex my-2 align-items-center">
                        <div class="mx-3"><i class="fas fa-check"></i></div>
                        <div class="text text-muted">Content creation</div>
                    </li>
                    <li class="flex my-2 align-items-center">
                        <div class="mx-3"><i class="fas fa-check"></i></div>
                        <div class="text text-muted">Hosting and deployment</div>
                    </li>
                    <li class="flex my-2 align-items-center">
                        <div class="mx-3"><i class="fas fa-check"></i></div>
                        <div class="text text-muted">Wordpress integration</div>
                    </li>
                </ul>
            </div>
            <small class="text-muted my-4">
                You can also find us on
            </small>
            <div class="platforms flex align-items-center my-2">
                <div>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/src/images/upwork.svg" width="100" height="26.4" alt="upwork">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/src/images/fiverr.svg" width="100" height="100" alt="fiverr">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/src/images/freelancer.svg" width="193" height="60" alt="freelancer">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/src/images/linked.svg" width="50" height="50" alt="linked in">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri() ?>/src/js/front-page.js"></script>
<?php get_footer() ?>