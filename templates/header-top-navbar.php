<header class="masthead" role="banner">
  <div class="container">
  <div class="row">
    <div class="col-md-6">
    <div class="logo"> 
    <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    </div>
  </div>
  </div>
</header>
<div id="nav">
<div class="banner navbar navbar-custom navbar-static-top navbartop">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>-->
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</div>
</div>