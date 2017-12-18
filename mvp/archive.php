<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mvp
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
		
			<?php
			if ( have_posts() ) : ?>

				<?php //TODO Remove it or now? 
				// TODO if has desc, display title and desc in box
				// <header class="page-header">
				// 	<?php
				// 		// the_archive_title( '<h2 class="page-title">', '</h2>' );
				// 		// the_archive_description( '<div class="archive-description">', '</div>' );
				// 
				// </header><!-- .page-header -->
				?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation(
					array(
						'mid_size' => 2,
						'prev_text' => __( '<i class="fa fa-chevron-left" aria-hidden="true"></i> Previous', 'mvp' ),
						'next_text' => __( 'Next <i class="fa fa-chevron-right" aria-hidden="true"></i>', 'mvp' ),
					) 
				);
				wp_reset_postdata();
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'single' );
get_footer();
