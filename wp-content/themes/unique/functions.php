<?php

/**
 * Unique functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Unique
 */

if (!defined('_S_VERSION')) {
   // Replace the version number of the theme on each release.
   define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function unique_setup()
{
   /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Unique, use a find and replace
		* to change 'unique' to the name of your theme in all the template files.
		*/
   load_theme_textdomain('unique', get_template_directory() . '/languages');

   // Add default posts and comments RSS feed links to head.
   add_theme_support('automatic-feed-links');

   /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
   add_theme_support('title-tag');

   /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
   add_theme_support('post-thumbnails');

   // This theme uses wp_nav_menu() in one location.
   register_nav_menus(
      array(
         'header_menu' => esc_html__('Header Menu', 'unique'),
         'footer_menu' => esc_html__('Footer Menu', 'unique'),
      )
   );

   function add_class_to_all_menu_anchors($atts)
   {
      $atts['class'] = 'nav__link';

      return $atts;
   }
   add_filter('nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10);

   /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
   add_theme_support(
      'html5',
      array(
         'search-form',
         'comment-form',
         'comment-list',
         'gallery',
         'caption',
         'style',
         'script',
      )
   );

   // Set up the WordPress core custom background feature.
   add_theme_support(
      'custom-background',
      apply_filters(
         'unique_custom_background_args',
         array(
            'default-color' => 'ffffff',
            'default-image' => '',
         )
      )
   );

   // Add theme support for selective refresh for widgets.
   add_theme_support('customize-selective-refresh-widgets');

   /**
    * Add support for core custom logo.
    *
    * @link https://codex.wordpress.org/Theme_Logo
    */
   add_theme_support(
      'custom-logo',
      array(
         'height'      => 250,
         'width'       => 250,
         'flex-width'  => true,
         'flex-height' => true,
      )
   );
}
add_action('after_setup_theme', 'unique_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unique_content_width()
{
   $GLOBALS['content_width'] = apply_filters('unique_content_width', 640);
}
add_action('after_setup_theme', 'unique_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unique_widgets_init()
{
   register_sidebar(array(
      'name' => esc_html__('Переключатель языка', 'lotos'),
      'id' => 'lang-sw',
      'description' => esc_html__('add please widget lang swither', 'lotos'),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => '',
   ));
}
add_action('widgets_init', 'unique_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function unique_scripts()
{
   wp_enqueue_style('unique-style', get_stylesheet_uri(), array(), _S_VERSION);
   wp_style_add_data('unique-style', 'rtl', 'replace');
   wp_enqueue_style('unique-vendor-css', get_template_directory_uri() . '/assets/css/vendor-6324272b9d.css', array(), _S_VERSION);
   wp_enqueue_style('unique-main-css', get_template_directory_uri() . '/assets/css/main-4f77a40df0.css?150', array(), _S_VERSION);

   wp_enqueue_script('unique-main-js', get_template_directory_uri() . '/assets/js/main-f2c4f30a07.js?137', 'defer', array(), _S_VERSION, true);


   if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }
}
add_action('wp_enqueue_scripts', 'unique_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/unique-customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
   require get_template_directory() . '/inc/jetpack.php';
}

show_admin_bar(false);


// Register Sidebar
function textdomain_register_sidebars()
{
   if (function_exists('register_sidebar')) {

      // Custom footer section for copyright. Empty by default.
      register_sidebar(array(
         'name' => esc_html__('Переключатель языка', 'lotos'),
         'id' => 'lang-sw',
         'description' => esc_html__('add please widget lang swither', 'lotos'),
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '',
         'after_title' => '',
      ));
   }
}
add_action('widgets_init', 'textdomain_register_sidebars');


//Убираем сообщение из консоли JQMIGRATE: Migrate is installed, version 3.3.2
add_action('wp_default_scripts', function ($scripts) {
   if (!empty($scripts->registered['jquery'])) {
      $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
   }
});


//Старый дизайн виджетов
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');
