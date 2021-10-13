<?php get_header()?>

<div class="container contact-wrapper">
    <div class="contact flex">
        <?php get_template_part('templates/contact', 'form') ?>
        <div class="text mx-4">
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
                <div class="socials align-items-center justify-content-left flex">
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
<div class="jumbotron jumbotron-em services-w-b text-center">
  <div class="text">
    <h3>Services without borders</h3>
    <p>Our talents are accessible to anyone anywhere. We are available for virtual meetings on patforms like Google Meet or any other platform the client chooses.
      Physical meetings are only possible to those around central Kenya.
  </div>
  </p>
</div>
<div class="jumbotron jumbotron-em text-center">
    <h3 class="my-4">Follow Optisites</h3>
    <span class="socials text-primary">
    <a href="#" class="mx-3">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="#" class="mx-3">
      <i class="fab fa-facebook"></i>
    </a>
    <a href="#" class="mx-3">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="#" class="mx-3">
      <i class="fab fa-instagram"></i>
    </a>
   </span>
</div>
<?php get_footer()?>