<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package englishdeutsch
 */

?><!DOCTYPE html>
<html id="htmltop" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'englishdeutsch' ); ?></a>

<!-- HEADER -->
	<span itemscope itemtype="http://schema.org/LocalBusiness">
	<header id="masthead" class="site-header" role="banner">
	<!-- NAV MENU -->
		<div class="container-fluid head-contacts">
	          <a href="tel:+380635136295" class="mobile">+38 (063) 513 62 95</a>
	    </div>

		

	    <nav class="navbar navbar-default">
	      

	        <!-- Brand and toggle get grouped for better mobile display -->
	        <?php echo get_custom_logo(); ?>
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	          	
	          	<!-- Main_menu -->
	          	<?php wp_nav_menu( array( 
		          	'theme_location' => 'primary', 
		          	'container' => 'false',
		          	'menu_class' => 'nav navbar-nav',
		          	'menu_id' => 'primary-menu' 
	          	) ); ?>
				
				<!-- Anchor_menu -->
	          	<?php wp_nav_menu( array( 
	          		'theme_location' => 'primary', 
	          		'container' => 'false',
	          		'menu' => 'Anchor_Menu', 
	          		'menu_class' => 'nav navbar-nav navbar-right',
	          		'menu_id' => 'anchorMenu'

	          	) ); ?>
	        </div>
	    </nav>
	<!-- END NAV MENU -->

	</header>
<!-- END HEADER -->

<!--стрелка возврата наверх-->

  <a class="scrollto" href="#htmltop" title="Наверх"><div class="nav-to-top"></div></a>

<!--END стрелка возврата наверх-->

<!-- Всплывающее окно отправленной формы -->

  <div id="thanksYou" class="thank-for-form">
    Спасибо, мы с вами свяжемся!
  </div>

<!-- END Всплывающее окно отправленной формы -->
	<div id="content" class="site-content">
