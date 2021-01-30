<?php
require_once('class-bootstrap-comment-walker.php');

function pisolSkipLink() {
	echo '<a class="skip-link screen-reader-text" href="#content">' . __( 'Skip to the content',  'stp-accessibility' ) . '</a>';
}

add_action( 'wp_body_open', 'pisolSkipLink', 5 );


/** theme support */
function stp_accessibility_theme_setup(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
}
add_action('after_setup_theme','stp_accessibility_theme_setup');

if ( ! isset( $content_width ) ) {
	$content_width = 560;
}

/*
    Register Style
*/
function stp_accessibility_register_css(){
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_script( 'stp_accessibility_accessible-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20190715', true );
	wp_enqueue_style('stp_accessibility_pitemplate-style', get_template_directory_uri().'/style.css');

	wp_localize_script( 'stp_accessibility_accessible-navigation', 'accessibleNavigationScreenReaderText', array(
		'expandMain'   => __( 'Open the main menu',  'stp-accessibility' ),
		'collapseMain' => __( 'Close the main menu',  'stp-accessibility' ),
		'expandChild'   => __( 'expand submenu',  'stp-accessibility' ),
		'collapseChild' => __( 'collapse submenu',  'stp-accessibility' ),
	) );

	
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
}
add_action('wp_enqueue_scripts', 'stp_accessibility_register_css');

/* Registering Menu */
function stp_accessibility_register_my_menu() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'stp-accessibility' ),
	) );
}
add_action( 'init', 'stp_accessibility_register_my_menu' );

/** Register sidebar */
add_action ( 'widgets_init', 'stp_accessibility_sidebars_init');
function stp_accessibility_sidebars_init(){
if (function_exists('register_sidebar')) { 
	
    register_sidebar(array(  
        'name' => __('Sidebar','stp-accessibility'),
        'id'   => 'sidebar',  
        'description'   => __('Left sidebar','stp-accessibility'),  
        'before_widget' => '<aside role="complementary" class="pi-box py-3 px-3  mb-4 widget-content sidebar-widget" id="%1$s" aria-label="[title]">',  
        'after_widget'  => '</aside>',  
        'before_title'  => '<h2 class="widget-title sidebar-widget-title">',  
        'after_title'   => '</h2>' ,
    ));

    register_sidebar(array(  
        'name' => __('Footer #1','stp-accessibility'),  
        'id'   => 'footer1',  
        'description'   => __('Footer widget 1','stp-accessibility'),  
        'before_widget' => '<aside role="complementary" id="%1$s" class="widget-content footer-widget" aria-label="[title]">',  
        'after_widget'  => '</aside>',  
        'before_title'  => '<h2 class="widget-title footer-widget-title">',  
        'after_title'   => '</h2>' ,
	));
	
	register_sidebar(array(  
        'name' => __('Footer #2','stp-accessibility'),  
        'id'   => 'footer2',  
        'description'   => __('Footer widget 2','stp-accessibility'),  
        'before_widget' => '<aside role="complementary" id="%1$s" class="widget-content footer-widget" aria-label="[title]">',  
        'after_widget'  => '</aside>',  
        'before_title'  => '<h2 class="widget-title footer-widget-title">',  
        'after_title'   => '</h2>' ,
    ));
}
}

function stp_accessibility_widget_func($params) {
	$name = isset($params[0]['widget_name']) ? $params[0]['widget_name'] : "";
	$params[0]['before_widget'] = str_replace('[title]', esc_attr($name), $params[0]['before_widget'] );
	return $params;
}
add_filter('dynamic_sidebar_params', 'stp_accessibility_widget_func');

/*
	Bootstrap 4 based paging
*/
function stp_accessibility_Paging(){
	$paging = get_the_posts_pagination();
	if(!empty($paging)){
	echo '<div class="pi-box p-4">';
	the_posts_pagination();
	echo '</div>';
	}
}

function stp_accessibility_pisol_tag(){
$tags_list = get_the_tag_list( '', __( ', ', 'stp-accessibility' ) );
if ( $tags_list ) {
	echo '<div class="pi-box p-4 mb-4">';
	printf(
		'<span class="tags-links">%1$s<span><strong>%2$s</strong> </span>%3$s</span>',
		"",
		__( 'Tags:', 'stp-accessibility' ),
		$tags_list
	); 
	echo '</div>';
}
}

function stp_accessibility_SubTitle() {
	$description = get_bloginfo( 'description' );

	if ( ! $description ) {
		return;
	}

	$wrapper = '<div class="site-description">%s</div>';

	$html = sprintf( $wrapper, esc_html( $description ) );

	echo $html;
}

function stp_accessibility_Title() {
	$logo       = get_custom_logo();
	$site_title = get_bloginfo( 'name' );
	

	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {
		printf('<h1 class="site-title"><a href="%s">%s</a></h1>',esc_url( get_home_url( null, '/' )),esc_html( $site_title ));
	}
}
