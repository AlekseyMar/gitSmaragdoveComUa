<?php
/**
 * Template name: мой шаблон
 *
 */
?>
<?php get_header(); ?>
<!--div class="content" style="background-image: url(<?php //echo get_template_directory_uri();?>/img/spruceBGcontent.png);"-->
<div class="content">
	<!--div class="fon_gradient"-->
	<main class="col" role="main" id="content">
				<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php 
					get_template_part( 'content','page'); 
					if ( comments_open() || get_comments_number() ) {
							comments_template(); 
					}
					?>
				<?php endwhile; ?>
				<?php }else{ ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php } ?>
		
	</main>
	<?php get_template_part('sidebar'); ?>
	<!--/div-->
</div>
<?php get_footer(); ?>
