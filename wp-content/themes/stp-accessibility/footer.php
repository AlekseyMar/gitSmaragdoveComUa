<div id="pi-footer">
    <?php dynamic_sidebar('footer1'); ?>
    <?php dynamic_sidebar('footer2'); ?>	
</div>
<footer role="contentinfo">
	<p class="footer-copyright mb-0">&copy;
		<?php
			echo date_i18n(
				_x( 'Y', 'copyright date format', 'stp-accessibility' )
			);
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
	</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
