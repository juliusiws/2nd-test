<?php
/**
 * nobaxx-rwd functions and definitions
 *
 * @package nobaxx-rwd
 */

if ( ! function_exists( 'nobaxx_rwd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nobaxx_rwd_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nobaxx-rwd, use a find and replace
	 * to change 'nobaxx-rwd' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nobaxx-rwd', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'nobaxx-rwd' ),
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
	add_theme_support( 'custom-background', apply_filters( 'nobaxx_rwd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nobaxx_rwd_setup
add_action( 'after_setup_theme', 'nobaxx_rwd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nobaxx_rwd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nobaxx_rwd_content_width', 640 );
}
add_action( 'after_setup_theme', 'nobaxx_rwd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nobaxx_rwd_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nobaxx-rwd' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Standort', 'nobaxx-rwd' ),
		'id'            => 'standort',
		'description'   => '',
		'before_widget' => '<div class="col-lg-4"> <aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'nobaxx-rwd' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => ' <div class="col-lg-4"> <aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'nobaxx-rwd' ),
		'id'            => 'header',
		'description'   => '',
		'before_widget' => '<div class="col-lg-6 col-md-6 col-xs-6"><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'nobaxx_rwd_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nobaxx_rwd_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, false );

	wp_enqueue_script( 'nobaxx-rwd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'nobaxx-rwd-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


	wp_deregister_script('jquery-core');

	wp_register_script('jquery-core', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', FALSE, '1.11.0', TRUE);

	wp_enqueue_script('jquery-core');

	wp_deregister_script('jquery-migrate');

	wp_register_script('jquery-migrate', '/wp-includes/js/jquery/jquery-migrate.min.js', FALSE, '1.2.1', TRUE);

	wp_enqueue_script('jquery-migrate');


	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js"', array(),null, true );


	wp_enqueue_script( 'imagesloaded-pkgd-min-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js"', array(),null, true );

	wp_enqueue_script( 'jquery-colorbox-min-js', get_template_directory_uri() . '/js/jquery.colorbox-min.js"', array(),null, true );

	wp_enqueue_script( 'jquery-easing-1-3-js', get_template_directory_uri() . '/js/jquery.easing.1.3.js"', array(),null, true );

	wp_enqueue_script( 'jquery-rivathemes-js', get_template_directory_uri() . '/js/jquery.rivathemes.js"', array(),null, true );

	wp_enqueue_script( 'jquery-transit-modified-js', get_template_directory_uri() . '/js/jquery-transit-modified.js"', array(),null, true );

	wp_enqueue_script( 'biss-js', get_template_directory_uri() . '/js/biss.js"', array(),null, true );

	



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nobaxx_rwd_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

function kb_svg ( $svg_mime ){
	$svg_mime['svg'] = 'image/svg+xml';
	return $svg_mime;
}

add_filter( 'upload_mimes', 'kb_svg' );