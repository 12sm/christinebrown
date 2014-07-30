<footer class="content-info container-fluid" role="contentinfo">
  <div class="col-lg-12">
      <div class="row sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
      <div class="row footer-nav">  
        <?php
        if (has_nav_menu('footer_navigation')) :
           wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
         endif;
        ?>
      </div>
    <div class="row">
      <div class="pandorawrapper">  
      <div class="pandora">
        <img class="img-responsive" src="/assets/img/pandora.png"></img>
      </div>
      <div class="pandoratext"> 
        Create a Pandora station with Christine's music!
      <div class="panreadmore">
          <a href="http://www.pandora.com" target="_blank">Click here!</a>
      </div>      
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 linkswrapper">
    <div class="row">
        <div id="social-float" class="row">
          <div id="scripty1"> 
          <img class="img-responsive" src="/assets/img/find-christine-on.png"></img>
          </div> 
          <ul id="menu-social-navigation" class="">
          <li class="menu-"><a href="https://www.facebook.com/christinebrownpiano" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
          <li class="menu-"><a href="https://twitter.com/pianochristineb" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li class="menu-"><a href="https://www.youtube.com/channel/UC7HsnfpQ5pXDbTbiS35q-sQ" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a></li>
          <li class="menu-"><a href="https://soundcloud.com/christine-brown-piano" target="_blank"><i class="fa fa-soundcloud fa-2x"></i></a></li> 
          <li class="menu-"><a href="https://itunes.apple.com/artist/christine-brown/id28052587?forceArtistPage=1" target="_blank"><i class="fa fa-apple fa-2x"></i></a></li>
          <li class="menu-"><a href="http://open.spotify.com/artist/3iS3pfptgdjssIOuuTJith" target="_blank"><i class="fa fa-spotify fa-2x"></i></a></li>
          <li class="menu-"><a href="http://www.solopianoradio.com/" target="_blank"><img class="img-responsive" src="/assets/img/whisperings.png" onmouseover="this.src='/assets/img/whisperings-active.png'" onmouseout="this.src='/assets/img/whisperings.png'"></a></i></a></li>
          <li class="menu-"><a href="http://www.amazon.com/Christine-Brown/e/B000APG4SW/ref=ntt_mus_dp_pel" target="_blank"><img class="img-responsive" src="/assets/img/amazon.png" onmouseover="this.src='/assets/img/amazon-active.png'" onmouseout="this.src='/assets/img/amazon.png'"></a></i></a></li>
          <li class="menu-"><a href="http://www.cdbaby.com/artist/christinebrown" target="_blank"><img class="img-responsive" src="/assets/img/cdbaby.png" onmouseover="this.src='/assets/img/cdbaby-active.png'" onmouseout="this.src='/assets/img/cdbaby.png'"></a></i></a></li>
        </div>
      </div>
  </div>     
  <div class="col-lg-12 sponswrapper">
    <div class="row">
      <div class="col-sm-5 sponstext">
      Christine is proud to be a Kawai artist!
      </div>
      <div class="col-sm-5 sponslogo">
        <img class="img-responsive" src="/assets/img/kawai.png"> 
      </div>
    </div>
  </div>    
  <div class="col-lg-12 bottomrow">
    <div class="row">
        <div class="col-sm-8">
          <div class="signup">
            <div id="mc_embed_signup">
            <form action="http://christinebrownpiano.us6.list-manage.com/subscribe/post?u=e8eddda6386725bbc2074242b&amp;id=994868238f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate=""> <label for="mce-EMAIL"><h3>Sign up for the e-mail newsletter here</h3></label>
            <!--<div class="input-container">--> 
            <input value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder=" E-MAIL ADDRESS HERE" required="" type="email"> <input value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button" type="submit">
            <!--</div>-->
              <div style="position: absolute; left: -5000px;"> <input name="b_e8eddda6386725bbc2074242b_994868238f" value="" type="text">
              </div>
            </form>
            </div>             
         </div>
        </div>         
        <div class="col-sm-4 credits">
          <h3>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</h3>
        </div>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->   
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!--> 