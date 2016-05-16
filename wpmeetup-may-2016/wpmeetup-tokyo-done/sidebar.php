<?php
/**
 * The template for the sidebar containing the main widget area. This file was copied from the Twenty Sixteen theme and modified for WordPress Meetup Tokyo.
 *
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>