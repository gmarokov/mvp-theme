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
					
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu', 'menu_class' => 'nav footer-nav') ); ?>
					<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
					<small class="copyright">
						Theme MVP  by 
						<a href="http://themes.3rdwavemedia.com" target="_blank">Georgi Marokov</a> for Most Valuable Professionals
					</small>
				</div><!--//container-->
			</footer><!-- #colophon -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
    </body>
</html>
