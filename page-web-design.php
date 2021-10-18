<?php get_header(); ?>
<div class="container">
    <div class="page-header-text my-5">
        <h1><?php the_title() ?></h1>
        <p class="text-muted">
            Your websites User Interface represents your aesthetic. It plays a huge role in assuring the visitor that you can deliver what you claim you can.
            Good UI/UX is also key to generating leads and improving your sites accessibility. At Optisites we are User Experience enthusiasts focused on not only how good your website looks but also how well it suits the brand and user alike.
        </p>
    </div>
    </div>
    <div class="container my-5 p-2">
        <h2 class="text-center">
            Optisites builds modern UX-driven Designs.
        </h2>
    </div>
    <div class="container d-y-w">
       <strong class="my-2">Does your website.</strong>
       <ul>
           <li class="my-1"><i class="fas fa-exclamation-circle text-danger"></i><span class="text-muted mx-2">Feel outdated or not fit for the intended purpose ?  </span></li>
           <li class="my-1"><i class="fas fa-exclamation-circle text-danger"></i><span class="text-muted mx-2">Not generate enough leads or improve profitablity ? </span></li>
           <li class="my-1"><i class="fas fa-exclamation-circle text-danger"></i><span class="text-muted mx-2">Have a broken interface ? </span></li>
           <li class="my-1"><i class="fas fa-exclamation-circle text-danger"></i><span class="text-muted mx-2">Fail to captivate Visitors ? </span></li>
       </ul>
       <div class="container my-5 py-3 text-center">
       <h3 class="text-center">We can help redesign or build a new one for you</h3>
       <!-- <a href="<?php //bloginfo( 'url' )?>/contact-us">
       <button class="px-4 py-3 my-4 shadow-sm animate__animated animate__pulse animate__infinite btn big-button-dark">
                   Let us help
       </button> -->
    </div> </div>
       <div class="design-contact container-fluid bg-light flex justify-content-center align-items-center">
       <?php get_template_part('templates/contact', 'form') ?>
       </div>
    <h3 class="text-center my-3">Our design process</h3>
    <div class="container-fluid flex process-cards">
        <div class="process-card">
            <div class="number">
                1
            </div>
            <h4 class="title my-3">Research</h4>
            <p class="text-muted">
                We conduct an extensive research on trending design systems that best suits your field
                . This helps us understand your website’s purpose better and pick the right tools for the job
            </p>
        </div>
        <div class="process-card">
            <div class="number">
                2
            </div>
            <h4 class="title my-3">Wireframing</h4>
            <p class="text-muted">
            We define the ideal site layout for your web pages for good content design.
            This process can either be done on paper  or using design softwares .
             We make these wireframes available to the client
            </p>
        </div>
        <div class="process-card">
            <div class="number">
                3
            </div>
            <h4 class="title my-3">Setting up tools</h4>
            <p class="text-muted">
            We work with a variety of tools depending on the project or client prefferences.
             We make sure to pick the tools that not only save you money but also help us deliver top quality services
            </p>
        </div>
        <div class="process-card">
            <div class="number">
                4
            </div>
            <h4 class="title my-3">Prototyping</h4>
            <p class="text-muted">
            Prototyping can be a tedious process.We often see clients interested in our development services
             requesting us to skip this process to reduce the time and cost it takes for us to deliver the real website.  
            </p>
        </div>
        <div class="process-card">
            <div class="number">
                5
            </div>
            <h4 class="title my-3">Development</h4>
            <p class="text-muted">
            The development process is the last and the longest process. 
            This is done by our team of web developers each with their set of skills. 
            Read more about <a href="<?php bloginfo( 'url' )?>/services/web-development" class="text-primary">web development</a>  
            </p>
        </div>
        <div class="process-card">
            <div class="number">
                6
            </div>
            <h4 class="title my-3">Delivery</h4>
            <p class="text-muted">
            After development, We deliver the website and help in deployment.
              We take payments through paypal,Mpesa or our <a href="<?php bloginfo( 'url' )?>/contact-us" class="text-primary">listed freelance platforms</a> 
            </p>
        </div>
    </div>
<?php get_footer(); ?>