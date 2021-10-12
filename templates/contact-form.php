<div class="form mx-4 my-4 shadow-sm">
  <form id="protected" class="services-form" method="POST">
    <h3 class="my-3 text-center">Tell us about your project</h3>
    <div class="input-wrapper my-3 flex">
      <input type="text" name="name" placeholder="your full name..." class="form-control name" id="name" required />
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
    </div>
    <div class="input-wrapper my-3 flex">
      <input type="text" name="company" placeholder="company name..." class="form-control" id="company" required />
      <div class="icon">
        <i class="fas fa-home"></i>
      </div>
    </div>
    <div class="input-wrapper my-3 flex">
      <input type="email" name="email" placeholder="email" class="form-control" required />
      <div class="icon">
        <i class="fas fa-envelope"></i>
      </div>
    </div>
    <div class="input-wrapper my-3 flex">
      <input type="tel" name="phone" placeholder="phone number" id="phone" class="form-control" required/>
      <div class="icon">
        <i class="fas fa-phone"></i>
      </div>
    </div>
    <div class="dropdown allow-focus my-3">
      <div class="dropdown-toggle input-wrapper" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="contact-dropdown-text form-control">What services are you interested in ?</div>
      </div>
      <div class="dropdown-menu services-dropdown" aria-labelledby="triggerId">
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input services" id="webDesign" value="Web design">
            Web design
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input services" id="webDev" value="Web development">
            Web development
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input services" id="seo" value="Search Engine Optimization">
            Search Engine Optimization
          </label>
        </div>
        
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input services" id="content" value="Content writing">
            Content writing
          </label>
        </div>
      </div>
    </div>
    <input type="hidden" name="services" value=''>
    <div class="input-wrapper my-3 flex">
      <textarea name="message" id="message" class="form-control" placeholder="Tell us more" required></textarea>
      <div class="icon">
        <i class="fas fa-question-circle"></i>
      </div>
    </div>
    <div class="alert alert-success">
    </div>
    <div class="alert alert-danger"></div>
     <div class="submit-wrapper flex justify-content-center">
      <button class="btn submit g-recaptcha" data-sitekey="6LdvDI4cAAAAAE3WmPg0Xb__lFVtn9y4qks-QvN2" data-callback='onSubmit' type="submit">
        Submit your request
      </button>
    </div>
  </form>
</div>
<script>
function onSubmit(token) {
         if (window.grecaptcha.getResponse().length == 0){
           location.reload();
         }
         else{
    jQuery(($) => {
          $('#protected').css('animation','loading 2s linear infinite');
            var name =  $('input[id="name"]').val();
            var email=  $('input[name="email"]').val();
            var phone=   $('input[id="phone"]').val();
            var company=   $('input[id="company"]').val();
            var message=   $('input[id="message"]').val();
            var serviceArray = [];
            var servicestring = '';
            $("#protected .services:checked").each(function(){
           serviceArray.push($(this).val());
            });
            serviceArray.forEach(service => {
              servicestring += service+',';
            });
            if (serviceArray.length == 0) {
        e.preventDefault();
         $('.allow-focus').css({'border-bottom':'solid 2px red'})}
         else{
            console.log(servicestring);
            $('input[name="services"]').val(servicestring);
          //  var data =  $('#protected').serialize(); //serializing the form and turning it into a string
          // var data =  
          // JSON.stringify({
          //    name:name,
          //    email:email,
          //   services:servicestring,
          //   phone:phone,
          //    company:company,
          //   message:message
          //  });  
          var data = $('#protected').serialize();
           var formData = new FormData; //
           formData.append('action','entry');
           formData.append('entry',data);
            $.ajax("<?php echo admin_url('admin-ajax.php')?>",{
                type: "POST",
                data: formData,
                contentType: false,
                processData:false,
                processData:false,
                success: function(response) {
                    $('#protected .alert-success').show();
                    $('#protected .alert-success').text('your email has been sent.We will reply through '+response.data+' as soon as we can');
                    $('#protected').css('animation','none');
                },
                error: function(response) {
                    $('#protected .alert-danger').show();
                    $('#protected .alert-danger').text("could not send the enquiry.please try again later");
                    $('#protected').css('animation','none');
                }
            }); 
    }})
         }}
      //  } ;
 </script>