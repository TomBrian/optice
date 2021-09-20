jQuery(($)=>{
    $(document).scroll(function() {
        const y = $(this).scrollTop();
        const nav = $('.front-nav-scroll')
        if (y > 200) {
          nav.show();
         nav.css({'opacity':'1'});
        } else {
          nav.hide();
          nav.css('opacity', '0');
        }
      });
})