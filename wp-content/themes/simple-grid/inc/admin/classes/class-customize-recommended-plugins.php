<?php
/**
* Simple_Grid_Customize_Recommended_Plugins class
*
* @package Simple Grid WordPress Theme
* @copyright Copyright (C) 2020 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

class Simple_Grid_Customize_Recommended_Plugins extends WP_Customize_Control {
    public $type = 'simple-grid-recommended-wpplugins';
    
    public function render_content() {
        $plugins = array(
        'widget-display-conditions' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=widget-display-conditions' ) ),
            'text'  => esc_html__( 'Widget Display Conditions', 'simple-grid' ),
            'desc'  => esc_html__( 'Widget Display Conditions plugin helps you to control on which website page you want a particular widget to be displayed.', 'simple-grid' ),
            ),
        'wordpress-seo' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=wordpress-seo' ) ),
            'text'  => esc_html__( 'Yoast SEO', 'simple-grid' ),
            'desc'  => esc_html__( 'Yoast SEO plugin helps you with your search engine optimization. Yoast SEO is the favorite WordPress SEO plugin of millions of users worldwide.', 'simple-grid' ),
            ),
        'wp-pagenavi' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=wp-pagenavi' ) ),
            'text'  => esc_html__( 'WP-PageNavi', 'simple-grid' ),
            'desc'  => esc_html__( 'WP-PageNavi plugin helps to display numbered page navigation of this theme. Just install and activate the plugin.', 'simple-grid' ),
            ),
        'regenerate-thumbnails' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=regenerate-thumbnails' ) ),
            'text'  => esc_html__( 'Regenerate Thumbnails', 'simple-grid' ),
            'desc'  => esc_html__( 'Regenerate Thumbnails plugin helps you to regenerate your thumbnails to match with this theme. Install and activate the plugin. From the left hand navigation menu, click Tools &gt; Regen. Thumbnails. On the next screen, click Regenerate All Thumbnails.', 'simple-grid' ),
            ),
        'widget-context' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=widget-context' ) ),
            'text'  => esc_html__( 'Widget Context', 'simple-grid' ),
            'desc'  => esc_html__( 'This is an alternative to Widget Display Conditions plugin. Widget Context plugin helps you to show or hide widgets on certain sections of your site - front page, posts, pages, archives, search, etc.', 'simple-grid' ),
            ),
        'loco-translate' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=loco-translate' ) ),
            'text'  => esc_html__( 'Loco Translate', 'simple-grid' ),
            'desc'  => esc_html__( 'Loco Translate plugin provides in-browser editing of WordPress translation files.', 'simple-grid' ),
            ),
        );
        foreach ( $plugins as $plugin) {
            echo wp_kses_post( force_balance_tags( '<p style="background:#fff;border:1px solid #ddd;color:#000;padding:10px;font-size:120%;font-style:normal;font-weight:bold;"><i class="fas fa-cog" aria-hidden="true"></i> <a style="margin-left:8px;font-weight:bold;color:#000" href="' . esc_url($plugin['link']) .'" target="_blank">' . esc_attr($plugin['text']) .' </a></p>' ) );
            echo wp_kses_post( force_balance_tags( '<p>'.$plugin['desc'].'</p>' ) );
        }
    }
}