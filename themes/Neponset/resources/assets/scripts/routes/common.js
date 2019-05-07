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
    function showBuyerForm(){
      $('#btn-open-broker-form').removeClass('btn-form-active');
      $('#btn-open-buyer-form').addClass('btn-form-active');
      $('.contact .footer-right').removeClass('footer-right-no-form');
      $('.contact-forms__broker').removeClass('contact-form-active');
      $('.contact-forms__buyer').addClass('contact-form-active');
    }
    function showBrokerForm(){
      $('#btn-open-buyer-form').removeClass('btn-form-active');
      $('#btn-open-broker-form').addClass('btn-form-active');
      $('.contact .footer-right').removeClass('footer-right-no-form');
      $('.contact-forms__buyer').removeClass('contact-form-active');
      $('.contact-forms__broker').addClass('contact-form-active');
    }

    $('#btn-open-buyer-form').on('click', function(){
      showBuyerForm();
    });
    $('#btn-open-broker-form').on('click', function(){
      showBrokerForm();
    });

    $('.floorplan-img').on('click', function(){
      $('.availability__divider').css('display', 'block');
      $('.plan-detail').addClass('plan-detail-active');
      $('.plan').addClass('inactive');
      var floorplan_title = $(this).attr('data-title');
      $('.plan-detail h2').text(floorplan_title);
      var floorplan_download = $(this).attr('data-download-link');
      $('.plan-detail a.download-floorplan').attr('href' , floorplan_download);
      var floorplan_img_src = $(this).attr('src');
      $('.plan-detail img').attr('src', floorplan_img_src);
    });

    $('.plan-category').on('click', function(){
        $('.availability__divider').css('display', 'none');
        $('.plan-detail').removeClass('plan-detail-active');
        $('.plan').removeClass('inactive');
    });

    $('.dropdown-content').on('hover' , function(){
      $('.dropdown-content a').css('color' , '#314359');
    });

    $('.link-open-broker').on('click', function(){
      showBrokerForm();
    });

    $('.link-open-buyer').on('click', function(){
      showBuyerForm();
    });

    if (window.location.href.indexOf('contact/#buyer') > -1) {
      showBuyerForm();
    }

    if (window.location.href.indexOf('contact/#broker') > -1) {
      showBrokerForm();
    }

  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
