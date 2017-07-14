jQuery(function($) {
  'use strict';
  
  var $wcsptProducts = $('.products').has('.wcspt-has-gallery');
  
  if ($wcsptProducts.length) {
    var s = (document.body || document.documentElement).style;
    var transitionsSupported = 'transition' in s || 'WebkitTransition' in s || 'MozTransition' in s || 'OTransition' in s;
    
    if (transitionsSupported) {
      $wcsptProducts.addClass('wcspt-products')
        .find('.wcspt-has-gallery .secondary-thumb').removeClass('wcspt-ie8-tempfix')
        .closest('a').addClass('wcspt-img-link');
        
    // Support: IE <=9 and other legacy browsers
    } else {
      $wcsptProducts.find('.wcspt-has-gallery .secondary-thumb').css({ opacity: 0, transition: 'none' })
        .removeClass('wcspt-transition wcspt-ie8-tempfix')
        .closest('a').hover(
          function() {
            $(this).find('.secondary-thumb').stop(true, false).animate({ opacity: 1 }, 250);
          }, function() {
            $(this).find('.secondary-thumb').animate({ opacity: 0 }, 250);
          }
        );
    }
  }

});