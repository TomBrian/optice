jQuery(($)=>{
    $('nav .nav-link').addClass('text-center');
    $('nav .dropdown-menu').addClass('shadow-md');
    // create the navbar cta
    var container = document.querySelector('nav .collapse');
    var button = document.createElement('button');
    var link = document.createElement('a');
    container.appendChild(button)
    button.appendChild(link);
    $('nav .collapse button a').addClass('nav-cta-link nav-link')
    $('.nav-cta-link').attr('href','#')
    $('nav .collapse button').addClass('nav-cta p-1 d-xsm-block d-block d-md-none d-lg-none');
    var text = 'Hire Us';
    $('.nav-cta-link').html(text);
   //append fontawesome icons to dropdowns
   var dropDowns = document.querySelectorAll('.dropdown > a'); 
   dropDowns.forEach(dropDown => {
          var icon = document.createElement('i');
          icon.classList.add('fa','fa-angle-down','mx-1');
          dropDown.appendChild(icon);
   });
   $(document).on('click', '.allow-focus', function (e) {
       e.stopPropagation();
     });
    //  blog cards
    $('.categories a').addClass('badge badge-light');
    //  contact forms
     const serviceArray = [];
     const services = $('.services-dropdown input');
     $.map(services, function (el,i) {
          el.addEventListener('change',()=>{
            if (el.checked) {
              if (!serviceArray.includes(el.value)) {
              serviceArray.push(el.value);
              console.log(serviceArray);
            }
              }
              else{
                if (serviceArray.includes(el.value)) {
                    serviceArray.forEach((service,i) => {
                      if (service == el.value) {
                        serviceArray.splice(i,1);
                      }
                    });
                }
                console.log(serviceArray)
              }
              // fun fact...The jQuery text() changes array items into a sentence.
               
                if (serviceArray.length > 0) {
                   $('.contact-dropdown-text').text(serviceArray);
                }
                else{
                  $('.contact-dropdown-text').text('What services are you interested in ?')
                }
           });
    })
    const serviceFormBtn = $('.services-form button:submit');
    serviceFormBtn.on('submit',function (e) { 
      if (serviceArray.length == 0) {
        e.preventDefault();
         $('.allow-focus').css({'border-bottom':'solid 2px red'})      }
    });
});

