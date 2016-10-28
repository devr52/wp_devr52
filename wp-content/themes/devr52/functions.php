<?php
/**
 * DEVR52 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DEVR52
 */

if ( ! function_exists( 'devr52_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function devr52_setup() {
   /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on DEVR52, use a find and replace
	 * to change 'devr52' to the name of your theme in all the template files.
	 */
   load_theme_textdomain( 'devr52', get_template_directory() . '/languages' );

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
   register_nav_menus( [
      'primary' => esc_html__( 'Primary', 'devr52' ),
   ]);

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
   add_theme_support( 'custom-background', apply_filters( 'devr52_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
   ) ) );
}
endif;
add_action( 'after_setup_theme', 'devr52_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function devr52_content_width() {
   $GLOBALS['content_width'] = apply_filters( 'devr52_content_width', 640 );
}
add_action( 'after_setup_theme', 'devr52_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function devr52_widgets_init() {
   register_sidebar( array(
      'name'          => esc_html__( 'Sidebar', 'devr52' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'devr52' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
   ) );
}
add_action( 'widgets_init', 'devr52_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function devr52_scripts() {
   wp_enqueue_style( 'devr52-bootstrap', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.css',[],'v3.3.7');

   wp_enqueue_style( 'devr52-font-awesome', get_template_directory_uri() . '/vendors/font-awesome/css/font-awesome.min.css',[],'v4.6.3');
   wp_enqueue_style( 'devr52-circle',  get_template_directory_uri() . '/assets/css/circle.min.css');

   wp_enqueue_style( 'devr52-style', get_stylesheet_uri() );

   wp_enqueue_script( 'devr52-jquery', get_template_directory_uri() . '/vendors/jquery/jquery.min.js', array(), 'v1.12.4', true );

   wp_enqueue_script( 'devr52-bootstrapjs', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.min.js', array(), 'v3.3.7', true );

   wp_enqueue_script( 'devr52-jquery-easing', get_template_directory_uri() . '/vendors/jquery-easing/jquery.easing.min.js', array(), null , true );

   wp_enqueue_script( 'devr52-bootstrap-validation', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.min.js', array(), null , true );

   wp_enqueue_script( 'devr52-contact-me', get_template_directory_uri() . '/assets/js/contact_me.min.js', array(), null , true );

   wp_enqueue_script( 'devr52-script', get_template_directory_uri() . '/assets/js/script.js', array(), null , true );

   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
   }
}
add_action( 'wp_enqueue_scripts', 'devr52_scripts' );

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
 * Custom Walker Class.
 */
require get_template_directory() . '/inc/custom_walker.php';
