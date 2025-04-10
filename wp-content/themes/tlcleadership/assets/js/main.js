function isIE() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
        return true;
    else                 // If another browser, return 0
        return false;

    return false;
}

(function($) {
    if(isIE() || navigator.userAgent.match(/Windows Phone/i) || (/Edge\/12./i.test(navigator.userAgent)) || (/Edge\/13./i.test(navigator.userAgent)) || (/Edge\/14./i.test(navigator.userAgent))){

        jQuery('body').addClass('IEbrowser');

    }


     //// NAVIGATION

     $(window).scroll(function(){

      if($(this).scrollTop() > 15){
          $('.navbar-top').addClass('sticky');

      } else{
          $('.navbar-top').removeClass('sticky');
      }
    });


    $(document).ready(function(){
        $('.hamburger-menu').click(function () {
            $(".mobile-nav").toggleClass('open');
        });
    });

    var $window = $(window),
    $mobilenav = $('.mobile-nav');

    function resize() {
        if ($window.width() > 991.98) {
            return $mobilenav.addClass('close').removeClass('open');
        }

        $mobilenav.removeClass('close');
    }$window.resize(resize).trigger('resize');


    

    $(document).ready(function () {
        $(".banner-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            infinite: true,
            speed: 1000,
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000,
        });


        $(".client-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            infinite: true,
            speed: 1000,
            dots: false,

            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    
    });

        
   



    // the selector will match all input controls of type :checkbox
    // and attach a click event handler 
    $("input:checkbox").on('click', function() {
    // in the handler, 'this' refers to the box clicked on
    var $box = $(this);
    if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
    } else {
        $box.prop("checked", false);
    }
    });



})(jQuery);


