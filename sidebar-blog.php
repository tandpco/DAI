<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package DAI
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div><!-- #secondary -->
