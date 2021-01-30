<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header role="banner">

<?php if( is_front_page()): ?>
<div class="headerWrapper">
	<div class="h1Text">
		<h1>соцср <br><span>смарагдове місто</span></h1>
	</div>
	<?php
		//stp_accessibility_Title();
		//stp_accessibility_SubTitle();
	?>
<div class="bgWrapper">
			
		<div class="layer-1" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/sun.png);"></div><!--sun-->
		
		<div class="layer-2" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/yellowRoadA.png);"></div><!--yellowRoad-->
		
		<div class="layer-3" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/hillsForestsMillsb.png);"></div><!--hillsForestsMills-->
		
		<div class="layer-4" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/centerHills.png);"></div><!--center hills-->
		
		<div class="layer-5" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/rightSpruce.png);"></div><!--center hills-->
		
		<div class="layer-6" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/spruce.png);"></div><!--spruce-->
		
		<div class="layer-7" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/logo.png);"></div><!--logo-->
		
		<div class="layer-8" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/children.png);"></div><!--children-->
		
		<div class="layer-9" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header/kid1.png);"></div><!--1_kid-->
			
</div>
<?php endif; ?>
</div>
<div id="mobile-nav"></div>

<!--a href="/"><img src="<?php //echo get_template_directory_uri(); ?>/img/logo.png" -->
				 
<nav id="pi-navigation" class="is-sticky" style="background: #FBFFA9; background-image: url(<?php echo get_template_directory_uri();?>/img/header/spruceMenu.png); background-repeat: no-repeat; background-size: auto 100%;"><!--spruceMenu-->
  <div class="is-sticky__item">
    <!--div class="row"-->
      <div class="ww" id="masthead">
      <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php _e( 'Menu', 'stp-accessibility' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		</button>
      <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation"  aria-label="<?php esc_attr_e('Primary Navigation','stp-accessibility'); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => 'ul',
				'menu_id' => 'primary-menu',
				'menu_class' => 'primary-menu menu',
			) );
			?>
		</nav><!-- #site-navigation -->
      </div>
    </div>
  <!--/div-->
</nav>
</header>