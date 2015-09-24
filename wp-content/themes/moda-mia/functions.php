<?php
/**
 * Moda Mia functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Moda Mia
 */

if ( ! function_exists( 'moda_mia_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function moda_mia_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Moda Mia, use a find and replace
	 * to change 'moda-mia' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'moda-mia', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	function declare_cart66_support() {
    add_theme_support( 'cart66' );
	}

	add_action( 'after_setup_theme', 'declare_cart66_support' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'moda-mia' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'moda_mia_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // moda_mia_setup
add_action( 'after_setup_theme', 'moda_mia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moda_mia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moda_mia_content_width', 640 );
}
add_action( 'after_setup_theme', 'moda_mia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moda_mia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'moda-mia' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop', 'moda-mia' ),
		'id'            => 'shop',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'moda_mia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moda_mia_scripts() {
	
	wp_enqueue_style( 'moda-mia-reset',  get_template_directory_uri() . '/inc/reset.css');
	wp_enqueue_style( 'moda-mia-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-1.11.3.min.js');
	wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
	wp_enqueue_script( 'moda-mia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'moda-mia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_style('opensans','https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'moda_mia_scripts' );

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