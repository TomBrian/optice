jQuery(($)=>{
    $('nav .nav-link').addClass('text-center');
    $('nav .dropdown-menu').addClass('shadow-md');
    // create the navbar cta
    const containers = document.querySelectorAll('nav .collapse');
    const button = document.createElement('button');
    const link = document.createElement('a');
    const close =  document.createElement('div');
    const menuIcons = document.querySelectorAll('.menu-opener');
    const closeIcon = `<div class="close"><img src="${window.location.origin}/wordpress/wp-content/themes/Kanai/src/images/close.svg" alt="close"/></div>`
    close.innerHTML = closeIcon;
    containers.forEach(container => {
      container.appendChild(button)
      // sidebar close button
      container.appendChild(close);
      container.addEventListener('click',()=>{
        $('nav .collapse,.menu-overlay').removeClass('open');
      })
    });
    menuIcons.forEach(icon=>{
      icon.addEventListener('click',()=>{
        $('nav .collapse,.menu-overlay').addClass('open');
      });
    })
    button.appendChild(link);
    $('nav .collapse button a').addClass('nav-cta-link nav-link')
    $('.nav-cta-link').attr('href','#')
    $('nav .collapse').addClass('shadow-lg');
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
    $('.categories a').addClass('text-muted text-sm cat-sep mx-2');
    $('.single-header .categories a').addClass('text-light text-sm badge-primary badge p-2');
    $('.sidebar .widget').addClass('text-left p-2 my-1');
    $('.sidebar .widget form').addClass('bg-info text-light p-3 rounded-sm');
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

