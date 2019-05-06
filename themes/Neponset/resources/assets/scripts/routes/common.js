export default {
  init() {
    // JavaScript to be fired on all pages 
    $(window).scroll(function() {
      var $height = $(window).scrollTop();
      if($height >= 900) {
        $('.navbar').addClass('navbar-active fixed-top');
      } else {
        $('.navbar').removeClass('navbar-active fixed-top');
      }
    });

    $('#btn-open-buyer-form').on('click', function(){
        $('.contact .footer-right').removeClass('footer-right-no-form');
        $('.contact-forms__broker').removeClass('contact-form-active');
        $('.contact-forms__buyer').addClass('contact-form-active');
    });
    $('#btn-open-broker-form').on('click', function(){
        $('.contact .footer-right').removeClass('footer-right-no-form');
        $('.contact-forms__buyer').removeClass('contact-form-active');
        $('.contact-forms__broker').addClass('contact-form-active');
    });
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
