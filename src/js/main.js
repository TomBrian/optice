jQuery(($)=>{
    $('nav .nav-link').addClass('text-center');
    $('.dropdown-item').addClass('text-center');
    // create the navbar cta
    var container = document.querySelector('nav .collapse');
    var button = document.createElement('button');
    var link = document.createElement('a');
    container.appendChild(button)
    button.appendChild(link);
    $('nav .collapse button a').addClass('nav-cta-link nav-link')
    $('.nav-cta-link').attr('href','#')
    $('nav .collapse button').addClass('nav-cta p-1 d-none d-sm-block d-xsm-block d-md-none d-lg-none d-xl-none');
    var text = 'Hire Us';
    $('.nav-cta-link').html(text);
   //append fontawesome icons to dropdowns
   var dropDowns = document.querySelectorAll('.dropdown > a'); 
   dropDowns.forEach(dropDown => {
          var icon = document.createElement('i');
          icon.classList.add('fa','fa-angle-down','mx-1');
          dropDown.appendChild(icon);
   });
});

