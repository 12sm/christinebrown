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
       $.backstretch('../assets/img/bg.jpg');
      } else {
       $.backstretch('../assets/img/bg.jpg');
    }
  
    soundManager.setup({
    // disable or enable debug output
    debugMode: true,
    // use HTML5 audio for MP3/MP4, if available
    preferFlash: false,
    useFlashBlock: true,
    // path to directory containing SM2 SWF
    url: '/assets/js',
    // optional: enable MPEG-4/AAC support (requires flash 9)
    flashVersion: 9
    });
function InlinePlayer(){var e=this,n=this,s=soundManager,t=navigator.userAgent.match(/msie/i);this.playableClass="inline-playable",this.excludeClass="inline-exclude",this.links=[],this.sounds=[],this.soundsByURL=[],this.indexByURL=[],this.lastSound=null,this.soundCount=0,this.config={playNext:!1,autoPlay:!1},this.css={sDefault:"sm2_link",sLoading:"sm2_loading",sPlaying:"sm2_playing",sPaused:"sm2_paused"},this.addEventHandler="undefined"!=typeof window.addEventListener?function(e,n,s){return e.addEventListener(n,s,!1)}:function(e,n,s){e.attachEvent("on"+n,s)},this.removeEventHandler="undefined"!=typeof window.removeEventListener?function(e,n,s){return e.removeEventListener(n,s,!1)}:function(e,n,s){return e.detachEvent("on"+n,s)},this.classContains=function(e,n){return"undefined"!=typeof e.className?e.className.match(new RegExp("(\\s|^)"+n+"(\\s|$)")):!1},this.addClass=function(n,s){return n&&s&&!e.classContains(n,s)?void(n.className=(n.className?n.className+" ":"")+s):!1},this.removeClass=function(n,s){return n&&s&&e.classContains(n,s)?void(n.className=n.className.replace(new RegExp("( "+s+")|("+s+")","g"),"")):!1},this.getSoundByURL=function(n){return"undefined"!=typeof e.soundsByURL[n]?e.soundsByURL[n]:null},this.isChildOfNode=function(e,n){if(!e||!e.parentNode)return!1;n=n.toLowerCase();do e=e.parentNode;while(e&&e.parentNode&&e.nodeName.toLowerCase()!=n);return e.nodeName.toLowerCase()==n?e:null},this.events={play:function(){n.removeClass(this._data.oLink,this._data.className),this._data.className=n.css.sPlaying,n.addClass(this._data.oLink,this._data.className)},stop:function(){n.removeClass(this._data.oLink,this._data.className),this._data.className=""},pause:function(){n.removeClass(this._data.oLink,this._data.className),this._data.className=n.css.sPaused,n.addClass(this._data.oLink,this._data.className)},resume:function(){n.removeClass(this._data.oLink,this._data.className),this._data.className=n.css.sPlaying,n.addClass(this._data.oLink,this._data.className)},finish:function(){if(n.removeClass(this._data.oLink,this._data.className),this._data.className="",n.config.playNext){var e=n.indexByURL[this._data.oLink.href]+1;e<n.links.length&&n.handleClick({target:n.links[e]})}}},this.stopEvent=function(e){return"undefined"!=typeof e&&"undefined"!=typeof e.preventDefault?e.preventDefault():"undefined"!=typeof event&&"undefined"!=typeof event.returnValue&&(event.returnValue=!1),!1},this.getTheDamnLink=t?function(e){return e&&e.target?e.target:window.event.srcElement}:function(e){return e.target},this.handleClick=function(n){if("undefined"!=typeof n.button&&n.button>1)return!0;var t=e.getTheDamnLink(n);if("a"!=t.nodeName.toLowerCase()&&(t=e.isChildOfNode(t,"a"),!t))return!0;t.getAttribute("href");if(!t.href||!s.canPlayLink(t)&&!e.classContains(t,e.playableClass)||e.classContains(t,e.excludeClass))return!0;var a=t.href,i=e.getSoundByURL(a);return i?i==e.lastSound?i.togglePause():(s._writeDebug("sound different than last sound: "+e.lastSound.id),e.lastSound&&e.stopSound(e.lastSound),i.togglePause()):(e.lastSound&&e.stopSound(e.lastSound),i=s.createSound({id:"inlineMP3Sound"+e.soundCount++,url:a,onplay:e.events.play,onstop:e.events.stop,onpause:e.events.pause,onresume:e.events.resume,onfinish:e.events.finish,type:t.type||null}),i._data={oLink:t,className:e.css.sPlaying},e.soundsByURL[a]=i,e.sounds.push(i),i.play()),e.lastSound=i,"undefined"!=typeof n&&"undefined"!=typeof n.preventDefault?n.preventDefault():event.returnValue=!1,!1},this.stopSound=function(e){soundManager.stop(e.id),soundManager.unload(e.id)},this.init=function(){s._writeDebug("inlinePlayer.init()");for(var n=document.getElementsByTagName("a"),t=0,a=0,i=n.length;i>a;a++)!s.canPlayLink(n[a])&&!e.classContains(n[a],e.playableClass)||e.classContains(n[a],e.excludeClass)||(e.addClass(n[a],e.css.sDefault),e.links[t]=n[a],e.indexByURL[n[a].href]=t,t++);t>0&&(e.addEventHandler(document,"click",e.handleClick),e.config.autoPlay&&e.handleClick({target:e.links[0],preventDefault:function(){}})),s._writeDebug("inlinePlayer.init(): Found "+t+" relevant items.")},this.init()}var inlinePlayer=null;
soundManager.onready(function() {
  // soundManager.createSound() etc. may now be called
  inlinePlayer = new InlinePlayer();
});   

function affixnav(){

$('#nav').affix({
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

