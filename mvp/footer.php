<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvp
 */

?>
				</div><!-- .row -->
			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container text-center">
					<?php wp_nav_menu( array( 
						'theme_location' => 'footer-menu', 
						'menu_id' => 'footer-menu', 
						'menu_class' => 'nav footer-nav') ); 
					?>
					<small class="copyright">
						<a href="https://github.com/gmarokov/mvp-theme" target="_blank">Theme MVP</a> for Most Valuable Professionals
					</small>
				</div><!--//container-->
			</footer><!-- #colophon -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
    </body>
</html>
