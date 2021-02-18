<?php
/**
* The template for displaying full-width post.
*
* @package Simple Grid WordPress Theme
* @copyright Copyright (C) 2020 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: post
*/

get_header(); ?>

<div class="simple-grid-main-wrapper clearfix" id="simple-grid-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="simple-grid-main-wrapper-inside clearfix">

<?php simple_grid_before_main_content(); ?>

<div class="simple-grid-posts-wrapper" id="simple-grid-posts-wrapper">

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content-single', get_post_format() );

    simple_grid_post_navigation();

    simple_grid_post_bottom_widgets();

    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;

endwhile; ?>

<div class="clear"></div>
</div><!--/#simple-grid-posts-wrapper -->

<?php simple_grid_after_main_content(); ?>

</div>
</div>
</div><!-- /#simple-grid-main-wrapper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>