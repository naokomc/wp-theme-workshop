<?php
/**
 * The main template file based on the Twenty Sixteen theme.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * See also: http://codex.wordpress.org/Template_Hierarchy
 */

?><?php get_header(); ?>

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
        _e( 'Sorry, no posts matched your criteria.', 'wpmeetup-tokyo' );
    endif;
?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
	get_sidebar();
