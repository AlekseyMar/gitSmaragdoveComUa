<?php
/**
* The header for Simple Grid theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Simple Grid WordPress Theme
* @copyright Copyright (C) 2020 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<div <?php body_class('simple-grid-animated simple-grid-fadein'); ?> id="simple-grid-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#simple-grid-content-wrapper"><?php esc_html_e( 'Skip to content', 'simple-grid' ); ?></a>

    <?php if( is_front_page()): ?>
    <div class="headerWrapper">
        <div class="h1Text">
            <h1>соцср <br><span>смарагдове місто</span></h1>
        </div>
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
<!-- -->
<div id="simple-grid-search-overlay-wrap" class="simple-grid-search-overlay">
  <div class="simple-grid-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
  <button class="simple-grid-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'simple-grid' ); ?>" title="<?php esc_attr_e('Close Search','simple-grid'); ?>">&#xD7;</button>
</div>

<?php simple_grid_after_header(); ?>

<?php if ( simple_grid_is_primary_menu_active() ) { ?>
<div class="simple-grid-container simple-grid-primary-menu-container simple-grid-clearfix">
<div class="simple-grid-primary-menu-container-inside simple-grid-clearfix">
<nav class="simple-grid-nav-primary" id="simple-grid-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'simple-grid' ); ?>">
<div class="simple-grid-outer-wrapper">
<button class="simple-grid-primary-responsive-menu-icon" aria-controls="simple-grid-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'simple-grid' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'simple-grid-menu-primary-navigation', 'menu_class' => 'simple-grid-primary-nav-menu simple-grid-menu-primary', 'fallback_cb' => 'simple_grid_fallback_menu', 'container' => '', ) ); ?>
<?php if ( 'primary-menu' === simple_grid_social_buttons_location() ) { ?><?php if ( simple_grid_is_social_buttons_active() ) { ?><?php simple_grid_header_social_buttons(); ?><?php } ?><?php } ?>
</div>
</nav>
</div>
</div>
<?php } ?>

<?php simple_grid_top_wide_widgets(); ?>

<div class="simple-grid-outer-wrapper" id="simple-grid-wrapper-outside">

<div class="simple-grid-container clearfix" id="simple-grid-wrapper">
<div class="simple-grid-content-wrapper clearfix" id="simple-grid-content-wrapper">