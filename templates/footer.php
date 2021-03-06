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
          <a href="http://www.pandora.com/christine-brown" target="_blank">Click here!</a>
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
          <?php
        if (has_nav_menu('social_navigation')) :
           wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
         endif;
        ?>
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
            <form action="http://christinebrownpiano.us6.list-manage.com/subscribe/post?u=e8eddda6386725bbc2074242b&amp;id=cb5b30a0bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate=""> <label for="mce-EMAIL"><h3>Sign up for the e-mail newsletter here</h3></label>
            <!--<div class="input-container">-->
            <input value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder=" E-MAIL ADDRESS HERE" required="" type="email"> <input value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button" type="submit">
            <!--</div>-->
              <div style="position: absolute; left: -5000px;"> <input name="b_e8eddda6386725bbc2074242b_cb5b30a0bd" value="" type="text">
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


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27814560-40', 'auto');
  ga('send', 'pageview');

</script>
