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
					<ul class="social list-inline">
						<li><a class="facebook" href="https://facebook.com/georgi.marokov" target="_blank"><i class="fa fa-facebook"></i></a></li>                     
						<li><a class="linkedin" href="https://www.linkedin.com/in/georgi-marokov-019a79b7/"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="github" href="https://github.com/gmarokov"><i class="fa fa-github-alt"></i></a></li>                  
						<li><a class="pinterest" href="https://www.pinterest.com/georgimarokov/"><i class="fa fa-pinterest-p"></i></a></li>             
					</ul> 
					<small class="copyright">
						Proudly powered by <a href="http://wordpress.org" target="_blank">WordPress</a>
						with <a href="https://github.com/gmarokov/mvp-theme" target="_blank">Theme MVP</a> for Most Valuable Professionals
					</small>
				</div><!--//container-->
			</footer><!-- #colophon -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
    </body>
</html>
