<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
		<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>>"><?php the_title(); ?></a></h2>
		</header>
		<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
<?php 
        the_content();
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
	get_sidebar();
	get_footer();