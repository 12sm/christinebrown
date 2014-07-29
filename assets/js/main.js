/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
        //console.log('common page is firing');
    $('#signup').bind('touchstart', function(e) {
        $(this).toggleClass('hover_effect');    
    });
    if ($(window).width() <= 768){
       $.backstretch('/assets/img/bg.jpg');
      } else {
       $.backstretch('/assets/img/bg.jpg');
    }
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

        $(document).ready(function() {
        
            $('#nav').affix({
      offset: {
        top: $('header').height()
      }
}); 
          $('#nav').on('affix.bs.affix', function () {
            var navHeight = $('.navbar').outerHeight(true);
            
          $('#nav + .container').css('margin-top', navHeight);
    });
          $('#nav').on('affix-top.bs.affix', function () {
             $('#nav + .container').css('margin-top', 0);
    });

          $('#sidebar').affix({
            offset: {
            top: 17
             }
}); 
        
        });

  $(document).ready(function() {
    var addthis_config = {"data_track_addressbar": true};
    $.getScript("//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53c96d1a34c34d6")
  })

})(jQuery); // Fully reference jQuery after this point.

