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
      //Make social menus open in no window
      $('.menu- a').attr('target', '_blank');
      // JavaScript to be fired on all pages
        //console.log('common page is firing');
    $('#signup').bind('touchstart', function(e) {
        $(this).toggleClass('hover_effect');
    });

       //iOS 7 workaround
       if (navigator.userAgent.match(/(iPad|iPhone);.*CPU.*OS 7_\d/i)) {
  $("body").css({
    "background": "url(/assets/img/bg.jpg) center center no-repeat",
    "background-size": "cover",
    "padding-bottom": "50px"
  });
} else {
  $.backstretch("../assets/img/bg.jpg");
}


    soundManager.setup({
    // disable or enable debug output
    debugMode: true,
    // use HTML5 audio for MP3/MP4, if available
    preferFlash: false,
    useFlashBlock: true,
    // path to directory containing SM2 SWF
    url: ' ',
    // optional: enable MPEG-4/AAC support (requires flash 9)
    flashVersion: 9
    });

soundManager.onready(function() {
  // soundManager.createSound() etc. may now be called
  inlinePlayer = new InlinePlayer();
});

function affixnav(){

$('.affix-wrapper').affix({
      offset: {
        top: function(){
          if ($(window).width() <= 768){ return 0};
          if ($(window).width() >= 768){ return $('header').height();}
        }
        }
      });



      }
      //Call affix on window resize
      $(window).ready(affixnav);
      $(window).resize(affixnav);

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
}

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
    var addthis_config = {"data_track_addressbar": true};
    $.getScript("//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53c96d1a34c34d6")
  })

})(jQuery); // Fully reference jQuery after this point.

