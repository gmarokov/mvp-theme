<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mvp
 */

get_header(); ?>

	<div id="primary" class="primary col-md-8 col-sm-12 col-xs-12" role="complementary">
		<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		<?php endif; ?>
	</div><!-- #primary-sidebar -->

<?php
get_sidebar();
get_footer();
