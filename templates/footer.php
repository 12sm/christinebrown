<footer class="content-info container" role="contentinfo">
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
         
      <div id="social" class="row social-nav">
  <?php
     if (has_nav_menu('social_navigation')) :
       wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
     endif;
  ?>
  </div>
  <div class="bottomrow">
    <div class="col-xs-8 signup-row">
    <div class="signup">
    <div id="mc_embed_signup">
      <form action="http://christinebrownpiano.us6.list-manage.com/subscribe/post?u=e8eddda6386725bbc2074242b&amp;id=994868238f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate=""> <label for="mce-EMAIL">Sign up for the newsletter here</label>
      <!--<div class="input-container">--> 
        <input value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="" type="email"> <input value="Signup" name="subscribe" id="mc-embedded-subscribe" class="button" type="submit">
      <!--</div>-->
      <div style="position: absolute; left: -5000px;"> <input name="b_e8eddda6386725bbc2074242b_994868238f" value="" type="text">
      </div>
    </form>
    </div>             
   </div>
   </div>         
      <div class="col-xs-4 credits"><p><center>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></center></p>
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