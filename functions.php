<?php
/**
 * Add theme supports not yet supported by theme.json
 *
 * So far that's:
 * - post-thumbnails
 * - responsive-embeds
 */
function thisis_support() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	// Adding support for alignwide and alignfull classes in the block editor.
	//add_theme_support( 'align-wide' );

	// Adding support for core block visual styles.
	//add_theme_support( 'wp-block-styles' );

	// Adding support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles.
	// add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	// @TODO Is it a good idea or a bad idea to use style.css as the editor style
	// It's OK when it's empty but is it right to use this file normally?
	//add_editor_style( 'style.css' );
	//add_editor_style( 'style-editor.css' );


	// Add support for custom units.
	//add_theme_support( 'custom-units' );

	/** Add support for using link colour in certain blocks
	 * https://developer.wordpress.org/block-editor/developers/themes/theme-support/#experimental-%e2%80%94-link-color-control
	 */
	//add_theme_support( 'experimental-link-color' );
	//add_theme_support( 'custom-line-height' );
	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );
    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );
}

/**
 *
 */
function thisis_get_theme_version() {
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$version=filemtime( get_stylesheet_directory() . "/style.css" );
	} else {
		$version=wp_get_theme()->get( 'Version' );
	}
	return $version;
}

/**
 * Enqueue theme stylesheet.
 */
function thisis_scripts() {
	$version=thisis_get_theme_version();
	wp_enqueue_style( 'thisis-style', get_template_directory_uri() . '/style.css', array(), $version );
}

function thisis_loaded() {
	add_action( 'after_setup_theme', 'thisis_support' );
	add_action( 'wp_enqueue_scripts', 'thisis_scripts' );
	add_action( 'init', 'thisis_init', 20 );
}

/**
 * Enables oik based shortcodes.
 */
function thisis_init() {
	if ( function_exists( 'bw_add_shortcode' ) ) {
		do_action( "oik_add_shortcodes" );
	} else {
		// oik shortcodes won't be expanded.
	}
}
require_once __DIR__ . '/includes/block-overrides.php';

thisis_loaded();