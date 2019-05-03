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
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
