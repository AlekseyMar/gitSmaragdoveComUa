<?php get_header(); ?>
<div class="container my-4">
<div class="row">
	<main class="col-md-8 posts-place" role="main" id="content">
				<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content','post'); ?>
					<?php stp_accessibility_pisol_tag(); ?>
					
					<?php 
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
</div>
</div>
<?php get_footer(); ?>
