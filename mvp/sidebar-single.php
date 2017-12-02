<?php
/**
 * The sidebar for sigle posts or archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvp
 */

if ( ! is_active_sidebar( 'post-widget-area' ) ) {
	return;
}
?>

<aside id="secondary" class="secondary col-md-4 col-sm-12 col-xs-12" role="complementary">
	<?php dynamic_sidebar( 'post-widget-area' ); ?>
</aside><!-- #secondary -->
