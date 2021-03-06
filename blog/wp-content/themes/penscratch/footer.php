<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Penscratch
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'penscratch' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'penscratch' ), 'WordPress' ); ?></a>
			<span class="sep"> ~ </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'penscratch' ), 'Penscratch', '<a href="http://wordpress.com/themes/penscratch/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>