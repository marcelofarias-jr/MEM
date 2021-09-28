<!DOCTYPE html><!--  Last Published: Thu Dec 03 2020 14:57:07 GMT+0000 (Coordinated Universal Time)  -->

<html data-wf-page="5fa45342033e748d877aad37" data-wf-site="5fa45342033e749f917aad36" <?php language_attributes(); ?>>

<head>

	<meta <?php bloginfo('charset');  ?>>
	<title><?php bloginfo('description')?></title>

	<meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- CSS - NORMALIZE.CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
<!-- CSS - COMPONENTS.CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/components.css">
<!--  CSS - MEM-C1AD69.CSS -->
 	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mem-c1ad69.css">
  <!-- AJAX -->
 	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <!-- fontawesome -->
    <script src="https://your-site-or-cdn.com/fontawesome/v6.0.0-beta2/js/all.js" data-auto-replace-svg="nest"></script>

	<script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]  }});</script>
  	<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  	<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  	<link href="images/webclip.png" rel="apple-touch-icon">
  	<?php wp_head(); ?>
</head>
<body>
<div data-collapse="medium" data-animation="default" data-duration="400" id="Navigation" role="banner" class="nav-bar-v2 w-nav">
    <a href="http://localhost/www/page-hom/" class="nav-brand-v2 w-nav-brand"><?php
          
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid"  >';
            } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
              echo '<p class="lead">' . get_bloginfo('description') . '</p>';
            }
          
          ?></a>
    <div class="nav-space"></div>
	    <nav role="navigation" class="nav-menu-v2 w-nav-menu">
	      <form action="/search" class="search-form w-form"><input type="search" class="search-form-input w-input" maxlength="256" name="query" placeholder=" Search..." id="search" required=""><input type="submit" value=" " class="search-button w-button"></form>
        <div class="menu">
          <div></div>
          <?php

        wp_nav_menu(array(
        'theme_location'  => 'menu_principal',
        'depth'           => 2,
        'container'       => 'nav-space',
        'container_class' => 'w-nav-menu',
        'container_id'    => 'navigation',
        'menu_class'      => 'nav navbar_nav',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),

        ));

        ?>
        </div>
	    </nav>
    <div class="nav-right-v2">
      <a href="#" class="button subscribe-button w-button">Receba Mimos</a>
  	</div>
    <div class="menu-button-v2 w-nav-button">
      <div class="menu-icon">
        <div class="menu-line-top"></div>
        <div class="menu-line-middle"></div>
        <div class="menu-line-bottom"></div>
      </div>
    </div>
    <div data-w-id="b6a32dce-ecac-cd1e-d4b6-2cef1b7a197d" class="menu-button-v2 side-menu-button">
      <div class="menu-icon">
        <div class="menu-line-top-2"></div>
        <div class="menu-line-middle-2"></div>
        <div class="menu-line-bottom-2"></div>
      </div>
    </div>
    <div class="side-menu">
      <div class="full-height-menu-contents">
        <div class="logo" id="menu-lateral">
           <a href="http://localhost/www/index.php/home/" class="nav-brand-v2 w-nav-brand " class="w-inline-block"><?php
          
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid"  >';
            } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
              echo '<p class="lead">' . get_bloginfo('description') . '</p>';
            }
          
          ?></a>
        </div>
        <div class="full-height-menu-links">

          <?php

            wp_nav_menu(array(
              'theme_location'  => 'menu_dopdown',
              'depth'           => 2,
              'container'       => 'full-height-menu-contents',
              'container_class' => 'full-height-menu-links',
              'container_id'    => 'ull-height-menu-link',
              'menu_class'      => 'full-height-menu-link',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),

              ));

          ?>
         
          <!-- <a href="#" class="full-height-menu-link">Home</a>
          <a href="https://spark-template.webflow.io/#Landing-Pages" class="full-height-menu-link">Notícias</a>
          <a href="#" class="full-height-menu-link">Matérias</a>
          <a href="#" class="full-height-menu-link">Podcasts</a>
          <a href="#" class="full-height-menu-link">Mimos</a>
          <a href="#" class="full-height-menu-link">Contato</a> -->
        </div>
        <div class="full-height-menu-footer"></div>
      </div>
    </div>
    <div class="side-menu-overlay"></div>
  </div>