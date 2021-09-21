jQuery(($)=>{
    $(document).scroll(function() {
        const y = $(this).scrollTop();
        const nav = $('.front-nav-scroll')
        if (y > 200) {
          nav.show();
          setTimeout(()=>{
            nav.css({'opacity':'1'});
          },1000)
        
        } else {
          nav.hide();
          setTimeout(()=>{
            nav.css({'opacity':'0'});
          },1000)
         
        }
      });
})