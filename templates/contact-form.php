<div class="form bg-white shadow-sm">
  <form action="" id="protected" class="services-form" method="POST">
    <h3 class="my-3 text-center">Contact Us</h3>
    <div class="input-wrapper my-2 flex">
      <input type="text" name="name" placeholder="your full name..." class="form-control" required />
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
    </div>
    <div class="input-wrapper my-2 flex">
      <input type="text" name="company" placeholder="company name..." class="form-control" required />
      <div class="icon">
        <i class="fas fa-home"></i>
      </div>
    </div>
    <div class="input-wrapper my-2 flex">
      <input type="email" name="email" placeholder="email" class="form-control" required />
      <div class="icon">
        <i class="fas fa-envelope"></i>
      </div>
    </div>
    <div class="input-wrapper my-2 flex">
      <input type="tel" name="phone" placeholder="phone number" class="form-control" required/>
      <div class="icon">
        <i class="fas fa-phone"></i>
      </div>
    </div>
    <div class="dropdown allow-focus input-wrapper">
      <div class="dropdown-toggle my-2 flex justify-content-between" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="text contact-dropdown-text">What services are you interested in ?</div>
        <div class="icon">
          <i class="fas fa-hands-helping"></i>
        </div>
      </div>
      <div class="dropdown-menu services-dropdown" aria-labelledby="triggerId">
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="services" id="webDesign" value="Web design">
            Web design
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="services" id="webDev" value="Web development">
            Web development
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="services" id="seo" value="Search Engine Optimization">
            Search Engine Optimization
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="services" id="content" value="Content writing">
            Content writing
          </label>
        </div>
      </div>
    </div>
    <div class="input-wrapper my-2 flex">
      <textarea name="" id="" class="form-control" placeholder="how can we help?" required></textarea>
      <div class="icon">
        <i class="fas fa-question-circle"></i>
      </div>
    </div>
    <div class="submit-wrapper flex justify-content-center">
      <button class="btn submit g-recaptcha"  type="submit"  data-callback='onSubmit' 
        data-action='submit'  data-sitekey="6LeIbIAcAAAAAE65GbNsan-LKLBj9YX-H-dF9hBq">
        Submit your request
      </button>
    </div>
  </form>
</div>
<script>
     function onSubmit(token) {
    var required = document.querySelectorAll('.services-form input[required],.services-form textarea[required]');
    const isset = '';
    required.forEach(element => {
       if (element.value == '') {
         alert('please fill in all fields');
         isset = false;
         e.preventDefault();
       }
       else{
         isset = true; 
       }
    });
    console.log(isset);
 document.getElementById("protected").submit();
  }
</script>