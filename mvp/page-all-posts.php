<?php /* Template Name: All-posts */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            <?php // the query
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $wpb_all_query = new WP_Query(array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => 1,
                'paged' => $paged
            ));
            
            if ( $wpb_all_query->have_posts() ) :

                //<!-- the loop -->
                    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                    get_template_part( 'template-parts/content', 'page' );
                    endwhile; 
                //<!-- end of the loop -->
                
                mvp_numberic_pagination($wpb_all_query);
                
                wp_reset_postdata();
            
            else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'single' );
get_footer();
