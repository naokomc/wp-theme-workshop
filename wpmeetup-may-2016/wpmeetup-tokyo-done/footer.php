<?php
/**
 * The template for displaying the footer. This file was copied from the Underscores theme and modified for WordPress Meetup Tokyo.
 *
 * Contains the closing of the .site-content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpmeetup-tokyo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpmeetup-tokyo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpmeetup-tokyo' ), 'wpmeetup-tokyo', '<a href="http://www.meetup.com/WordPress-Meetup-Tokyo/" rel="designer">WordPress Meetup Tokyo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
