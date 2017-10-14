<?php
/**
 * Durendal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Durendal
 */

if ( ! function_exists( 'durendal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function durendal_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Durendal, use a find and replace
	 * to change 'durendal' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'durendal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Primary', 'durendal' ),
		'menu-footer' => esc_html__( 'Footer Quick Links', 'durendal' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'durendal_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'durendal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function durendal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'durendal_content_width', 640 );
}
add_action( 'after_setup_theme', 'durendal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function durendal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'durendal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'durendal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'durendal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 function durendal_scripts() {
	wp_enqueue_style( 'durendal-style', get_stylesheet_uri() );

	wp_enqueue_script( 'durendal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'durendal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'durendal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom walker to to update main nav output.
 */
class MainNav_Walker extends Walker_Nav_Menu {
	// Adds dropdown-menu class
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='dropdown-menu'>\n";
	} // start_lvl
	
	function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    } // end_lvl

	// Add dropdowns after first <li>
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if($depth == 0) {
			$output .= sprintf( '<li class="dropdown"><a href="' . $item->url . '" class="dropdown-toggle padding-left-5" data-toggle="dropdown">' . $item->title . '</a>',
				$item->url,
				( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
				$item->title
			);
		} else {
			$output .= sprintf( '<li class=""><a href="' . $item->url . '">' . $item->title . '</a>',
				$item->url,
				( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
				$item->title
			);
		}
		
    } // start_el()
} // MainNav_Walker


/**
 * Custom walker | Footer Quick Links
 */
class Walker_FooterQuickLinks extends Walker_Nav_Menu {
	// Add dropdowns after first <li>
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
       $output .= sprintf( '<li class="margin-bottom-5 hover-purple"><a href="' . $item->url . '" class="no-ul">' . $item->title . '</a>',
			$item->url,
			( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
			$item->title
		);
    } // start_el()
}


/**
 * Breadcrumb by Dimox
 */
function dimox_breadcrumbs(){
  /* === OPTIONS === */
	$text['home']     = 'Home'; // text for the 'Home' link
	$text['category'] = 'Archive by Category "%s"'; // text for a category page
	$text['tax'] 	  = 'Archive for "%s"'; // text for a taxonomy page
	$text['search']   = 'Search Results for "%s" Query'; // text for a search results page
	$text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
	$text['author']   = 'Articles Posted by %s'; // text for an author page
	$text['404']      = 'Error 404'; // text for the 404 page
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter   = '  '; // delimiter between crumbs
	$before      = '<li class="active">'; // tag before the current crumb
	$after       = '</li>'; // tag after the current crumb
	/* === END OF OPTIONS === */
	global $post;
	$homeLink = get_bloginfo('url') . '/';
	$linkBefore = '<li>';
	$linkAfter = '</li>';
	$linkAttr = ' rel="v:url" property="v:title"';
	$link = $linkBefore . '<a class="link-dark"' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
	if (is_home() || is_front_page()) {
		if ($showOnHome == 1) echo '<ol class="breadcrumb"><i class="fa fa-home pr-10"></i><a class="link-dark" href="' . $homeLink . '">' . $text['home'] . '</a>';
	} else {
		echo '<ol class="breadcrumb">' . sprintf($link, $homeLink, '<i class="fa fa-home pr-10"></i>' . $text['home']) . $delimiter;
		
		if ( is_category() ) {
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
			}
			echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
		} elseif ( is_tax() ){
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
			}
			echo $before . sprintf($text['tax'], single_cat_title('', false)) . $after;
		
		} elseif ( is_search() ) {
			echo $before . sprintf($text['search'], get_search_query()) . $after;
		} elseif ( is_day() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
			echo $before . get_the_time('d') . $after;
		} elseif ( is_month() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo $before . get_the_time('F') . $after;
		} elseif ( is_year() ) {
			echo $before . get_the_time('Y') . $after;
		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $delimiter);
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			}
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		} elseif ( is_attachment() ) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, $delimiter);
			$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
			$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
			echo $cats;
			printf($link, get_permalink($parent), $parent->post_title);
			if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
		} elseif ( is_page() && !$post->post_parent ) {
			if ($showCurrent == 1) echo $before . get_the_title() . $after;
		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs)-1) echo $delimiter;
			}
			if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
		} elseif ( is_tag() ) {
			echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
		} elseif ( is_author() ) {
	 		global $author;
			$userdata = get_userdata($author);
			echo $before . sprintf($text['author'], $userdata->display_name) . $after;
		} elseif ( is_404() ) {
			echo $before . $text['404'] . $after;
		}
		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}
		echo '</ol>';
	}
} // end dimox_breadcrumbs()

/**
 * Bootstrap Panels for Sidebar Widgets
 */
function bootstrapwp_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'bootstrapwp' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s panel panel-default"><div class="panel-heading olive-bg">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="panel-title color-white">',
			'after_title'   => '</h4></div><div class="panel-body">',
		) // array
	); // register_sidebar()
}
add_action( 'widgets_init', 'bootstrapwp_widgets_init' );

/**
 * Whitelist or Blacklist specific classes.
 */
function fnFilterBodyClasses($wp_classes, $extra_classes) {
	$arrBlackList = array("tag");
	$wp_classes = array_diff( $wp_classes, $arrBlackList );
	
	// Add the extra classes back untouched
    return array_merge( $wp_classes, (array) $extra_classes );
} // fnFilterBodyClasses
add_filter("body_class", "fnFilterBodyClasses", 10, 2 );

/**
 * Advanced Custom Fields | Date Time Picker
 */
// function my_update_value_date_time_picker( $value, $post_id, $field ) {
// 	return strtotime($value);	
// }
// add_filter('acf/update_value/type=date_time_picker', 'my_update_value_date_time_picker', 10, 3);

/**
 * Contact Form 7
 */
define ('WPCF7_LOAD_JS', false );