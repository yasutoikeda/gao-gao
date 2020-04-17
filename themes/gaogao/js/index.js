jQuery(function() {
    var pagetop = $('#page_top');   
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {  
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500); 
        return false;
    });
});


(function($) {
  $(function () {
    $('#nav-toggle').on('click', function() {
      $('body').toggleClass('open');
    });
  });
})(jQuery);

(function($) {
  $(function () {
    $('#gloval-nav').on('click', function() {
      $('body').removeClass('open');
    });
  });
})(jQuery);




var mql = window.matchMedia('screen and (max-width: 600px)');
function checkBreakPoint(mql) {
  if (mql.matches) {
    $('.service_list').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      centerMode: true,
      centerPadding: '15%',
    });
  } else {
    $('.service_list.slick-initialized').slick('unslick');
  }
}

mql.addListener(checkBreakPoint);

checkBreakPoint(mql);