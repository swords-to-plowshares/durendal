<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Durendal
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- Custom CSS --> 
<link href="<?php bloginfo("template_directory"); ?>/assets/css/sidebar.css" rel="stylesheet" />

<aside id="secondary" class="widget-area hidden-xs hidden-sm" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
