<header class="masthead" role="banner">
  <div class="container">
  <div class="row">
    <div class="col-md-12">

    <div class="topfeatured">
     <?php echo do_shortcode('[wpv-view name="Featured News"]'); ?>
    </div>
    </div>
    </div>
  </div>
  </div>
</header>  
<div id="nav">
<div class="banner navbar navbar-custom navbar-static-top navbartop navbar-default">
  <div class="container navcontainer">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navigation">
        Navigation
      </div>
      <!--<a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>-->
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav nav-justified'));
        endif;
      ?>
    </nav>
  </div>
</div>
</div>