<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvp
 */

if ( ! is_active_sidebar( 'secondary-widget-area' ) ) {
	return;
}
?>

<aside id="secondary" class="secondary col-md-4 col-sm-12 col-xs-12" role="complementary">
	<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
</aside><!-- #secondary -->
