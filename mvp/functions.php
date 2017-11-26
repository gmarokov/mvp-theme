<?php
/**
 * mvp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mvp
 */

if ( ! function_exists( 'mvp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mvp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mvp, use a find and replace
	 * to change 'mvp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mvp', get_template_directory() . '/languages' );

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
		'sidebar-menu' => esc_html__( 'Sidebar Menu', 'mvp' ),
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'footer-menu' => esc_html__( 'Footer Menu', 'mvp' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mvp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'mvp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mvp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mvp_content_width', 640 );
}
add_action( 'after_setup_theme', 'mvp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mvp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary widget area', 'mvp' ),
		'id'            => 'secondary-widget-area',
		'description'   => esc_html__( 'Add widgets here.', 'mvp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s aside section"><div class="section-inner">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h2 class="heading">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Primary widget area', 'mvp' ),
		'id'            => 'primary-widget-area',
		'before_widget' => '<section id="%1$s" class="widget %2$s section"><div class="section-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="heading">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Post widget area', 'mvp' ),
		'id'            => 'post-widget-area',
		'before_widget' => '<section id="%1$s" class="widget %2$s section"><div class="section-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="heading">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mvp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mvp_scripts() {
	wp_enqueue_style( 'mvp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome-styles', get_template_directory_uri() . '/inc/font-awesome/css/font-awesome.css' );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'mvp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'mvp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', array(), '20171026', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '20171026', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mvp_scripts' );

function mvp_admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'mvp_admin_style');

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
 * Load breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';
