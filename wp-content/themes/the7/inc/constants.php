<?php
/**
 * Constants.
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'THE7_VERSION', wp_get_theme( get_template() )->get( 'Version' ) );
define( 'PRESSCORE_VERSION', '0.3.0' );
define( 'PRESSCORE_THEME_NAME', 'the7' );

if ( ! defined( 'PRESSCORE_DB_VERSION' ) ) {
	define( 'PRESSCORE_DB_VERSION', '7.7.0' );
}

if ( ! defined( 'PRESSCORE_STYLESHEETS_VERSION' ) ) {
	define( 'PRESSCORE_STYLESHEETS_VERSION', '7.7.0' );
}

define( 'THE7_CORE_COMPATIBLE_VERSION', '2.1.0' );

/**
 * Important! Remember to remove trailing slash.
 *
 * This constant defines a dir where resized images going to be saved, relative to the uploads folder.
 * By default, images are going to be saved in uploads folder, alongside with images created by the WordPress.
 *
 * Example: '/the7-resized-images' - Images are going to be saved in `wp-uploads/the7-resized-images` folder.
 *
 * @since 7.4.0
 */
if ( ! defined( 'THE7_RESIZED_IMAGES_DIR' ) ) {
	define( 'THE7_RESIZED_IMAGES_DIR', '' );
}

/* Sets the path to the parent theme directory. */
if ( !defined( 'PRESSCORE_THEME_DIR' ) ) {
	define( 'PRESSCORE_THEME_DIR', get_template_directory() );
}

/* Sets the path to the parent theme directory URI. */
if ( !defined( 'PRESSCORE_THEME_URI' ) ) {
	define( 'PRESSCORE_THEME_URI', get_template_directory_uri() );
}

/* Sets the path to the child theme directory. */
if ( !defined( 'PRESSCORE_CHILD_THEME_DIR' ) ) {
	define( 'PRESSCORE_CHILD_THEME_DIR', get_stylesheet_directory() );
}

/* Sets the path to the child theme directory URI. */
if ( !defined( 'PRESSCORE_CHILD_THEME_URI' ) ) {
	define( 'PRESSCORE_CHILD_THEME_URI', get_stylesheet_directory_uri() );
}

if ( !defined( 'PRESSCORE_PRESET_BASE_URI' ) ) {
	define( 'PRESSCORE_PRESET_BASE_URI', PRESSCORE_THEME_URI );
}

/* Sets the path to the core framework directory. */
if ( !defined( 'PRESSCORE_DIR' ) ) {
	define( 'PRESSCORE_DIR', trailingslashit( PRESSCORE_THEME_DIR ) . basename( dirname( __FILE__ ) ) );
}

/* Sets the path to the core framework directory URI. */
if ( !defined( 'PRESSCORE_URI' ) ) {
	define( 'PRESSCORE_URI', trailingslashit( PRESSCORE_THEME_URI ) . basename( dirname( __FILE__ ) ) );
}

/* Sets the path to the core framework admin directory. */
if ( !defined( 'PRESSCORE_ADMIN_DIR' ) ) {
	define( 'PRESSCORE_ADMIN_DIR', trailingslashit( PRESSCORE_DIR ) . 'admin' );
}

if ( !defined( 'PRESSCORE_ADMIN_URI' ) ) {
	define( 'PRESSCORE_ADMIN_URI', trailingslashit( PRESSCORE_URI ) . 'admin' );
}

if ( !defined( 'PRESSCORE_ADMIN_OPTIONS_DIR' ) ) {
	define( 'PRESSCORE_ADMIN_OPTIONS_DIR', trailingslashit( PRESSCORE_ADMIN_DIR ) . 'theme-options' );
}

if ( !defined( 'PRESSCORE_ADMIN_MODS_DIR' ) ) {
	define( 'PRESSCORE_ADMIN_MODS_DIR', trailingslashit( PRESSCORE_ADMIN_DIR ) . 'mods' );
}

if ( !defined( 'PRESSCORE_ADMIN_MODS_URI' ) ) {
	define( 'PRESSCORE_ADMIN_MODS_URI', trailingslashit( PRESSCORE_ADMIN_URI ) . 'mods' );
}

if ( !defined( 'PRESSCORE_MODS_DIR' ) ) {
	define( 'PRESSCORE_MODS_DIR', trailingslashit( PRESSCORE_DIR ) . 'mods' );
}

if ( !defined( 'PRESSCORE_MODS_URI' ) ) {
	define( 'PRESSCORE_MODS_URI', trailingslashit( PRESSCORE_URI ) . 'mods' );
}

/**
 * Helpers dir
 */
if ( !defined( 'PRESSCORE_HELPERS_DIR' ) ) {
	define( 'PRESSCORE_HELPERS_DIR', trailingslashit( PRESSCORE_DIR ) . 'helpers' );
}

if ( !defined( 'PRESSCORE_HELPERS_URI' ) ) {
	define( 'PRESSCORE_HELPERS_URI', trailingslashit( PRESSCORE_URI ) . 'helpers' );
}

/* Sets the path to the core framework classes directory. */
if ( !defined( 'PRESSCORE_CLASSES_DIR' ) ) {
	define( 'PRESSCORE_CLASSES_DIR', trailingslashit( PRESSCORE_DIR ) . 'classes' );
}

if ( !defined( 'PRESSCORE_EXTENSIONS_DIR' ) ) {
	define( 'PRESSCORE_EXTENSIONS_DIR', trailingslashit( PRESSCORE_DIR ) . 'extensions' );
}

if ( !defined( 'PRESSCORE_EXTENSIONS_URI' ) ) {
	define( 'PRESSCORE_EXTENSIONS_URI', trailingslashit( PRESSCORE_URI ) . 'extensions' );
}

if ( !defined( 'PRESSCORE_PLUGINS_DIR' ) ) {
	define( 'PRESSCORE_PLUGINS_DIR', trailingslashit( PRESSCORE_THEME_DIR ) . 'plugins' );
}

if ( !defined( 'PRESSCORE_PLUGINS_URI' ) ) {
	define( 'PRESSCORE_PLUGINS_URI', trailingslashit( PRESSCORE_THEME_URI ) . 'plugins' );
}

if ( !defined( 'PRESSCORE_TEMPLATES_DIR' ) ) {
	define( 'PRESSCORE_TEMPLATES_DIR', '/inc/templates/' );
}

/* Sets the path to the core framework extensions directory. */
if ( !defined( 'PRESSCORE_WIDGETS_DIR' ) ) {
	define( 'PRESSCORE_WIDGETS_DIR', trailingslashit( PRESSCORE_DIR ) . 'widgets' );
}

/* shortcodes dir and url */
if ( !defined( 'PRESSCORE_SHORTCODES_DIR' ) ) {
	define( 'PRESSCORE_SHORTCODES_DIR', trailingslashit( PRESSCORE_DIR ) . 'shortcodes' );
}

if ( !defined( 'PRESSCORE_SHORTCODES_URI' ) ) {
	define( 'PRESSCORE_SHORTCODES_URI', trailingslashit( PRESSCORE_URI ) . 'shortcodes' );
}

if ( !defined( 'PRESSCORE_SHORTCODES_INCLUDES_DIR' ) ) {
	define( 'PRESSCORE_SHORTCODES_INCLUDES_DIR', trailingslashit( PRESSCORE_SHORTCODES_DIR ) . 'includes' );
}

if ( !defined( 'PRESSCORE_SHORTCODES_INCLUDES_URI' ) ) {
	define( 'PRESSCORE_SHORTCODES_INCLUDES_URI', trailingslashit( PRESSCORE_SHORTCODES_URI ) . 'includes' );
}

/* optionsframework presets dir */
if ( !defined( 'OPTIONS_FRAMEWORK_PRESETS_DIR' ) ) {
	define( 'OPTIONS_FRAMEWORK_PRESETS_DIR', trailingslashit( trailingslashit( PRESSCORE_DIR ) . 'presets' ) );
}

/* Sets the widget prefix */
if ( !defined( 'DT_WIDGET_PREFIX' ) ) {
	define( 'DT_WIDGET_PREFIX', 'DT-' );
}

/**
 * Force use php vars instead those in less files.
 */
if ( !defined( 'DT_LESS_USE_PHP_VARS' ) ) {
	define( 'DT_LESS_USE_PHP_VARS', true );
}

// Re-define meta box path and URL
if ( !defined( 'THE7_RWMB_URL' ) ) {
	define( 'THE7_RWMB_URL', trailingslashit( PRESSCORE_EXTENSIONS_URI ) . 'meta-box/' );
}

if ( !defined( 'THE7_RWMB_DIR' ) ) {
	define( 'THE7_RWMB_DIR', trailingslashit( PRESSCORE_EXTENSIONS_DIR ) . 'meta-box/' );
}
