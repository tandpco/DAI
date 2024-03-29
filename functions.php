<?php
/**
 * DAI functions and definitions
 *
 * @package DAI
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'dai_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dai_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on DAI, use a find and replace
	 * to change 'dai' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'dai', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'dai' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dai_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // dai_setup
add_action( 'after_setup_theme', 'dai_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dai_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'dai' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'dai' ),
		'id'            => 'sidebar-blog',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'dai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dai_scripts() {
	wp_enqueue_style( 'dai-style', get_stylesheet_uri() );

	/*wp_enqueue_style( 'coverflow-styles', get_template_directory_uri() . '/public/styles/flipster.min.css' );*/

	wp_enqueue_style( 'site-styles', get_template_directory_uri() . '/public/styles/main.css' );

	wp_enqueue_script( 'dai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/public/js/jquery.min.js');

	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/public/js/jquery-ui.js');

	/*wp_enqueue_script( 'jquery-flipster', get_template_directory_uri() . '/public/js/jquery.flipster.min.js');*/

	wp_enqueue_script( 'jquery-coverflow', get_template_directory_uri() . '/public/js/jquery.coverflow.js');

	wp_enqueue_script( 'unslider', get_template_directory_uri() . '/public/js/unslider.min.js');

	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/public/js/site.js');

	wp_enqueue_script( 'rrssb-script', get_template_directory_uri() . '/public/js/rrssb.min.js');

	wp_enqueue_style( 'rrssb-css', get_template_directory_uri() . '/public/styles/rrssb.min.css');

	wp_enqueue_script( 'dai-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dai_scripts' );

add_theme_support( 'post-thumbnails' );

function get_the_content_by_id($post_id) {
  $page_data = get_page($post_id);
  if ($page_data) {
    return $page_data->post_content;
  }
  else return false;
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Import Settings Page
 */
// require get_template_directory() . '/inc/custom-admin.php';

if (is_admin()) {
 include('settings/options/options-init.php');
}

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
