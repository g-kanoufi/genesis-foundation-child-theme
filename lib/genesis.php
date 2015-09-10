<?php

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );
/**
 * Force HTML5
 *
 * See: http://www.briangardner.com/code/add-html5-markup/
 *
 * @since 2.0.0
 */
add_theme_support( 'html5' );

/**
 * Adds <meta> tags for mobile responsiveness.
 *
 * See: http://www.briangardner.com/code/add-viewport-meta-tag/
 *
 * @since 2.0.0
 */
add_theme_support( 'genesis-responsive-viewport' );

add_theme_support( 'genesis-structural-wraps', array('footer-widgets', 'footer' ) );

/**
 *
 * Add new accessibility feats
 *
 **/
add_theme_support( 'genesis-accessibility', 
  array( 'headings', 'drop-down-menu', 'search-form', 'skip-links', 'rems' ) 
);

/**
 * Add support for custom backgrounds
 *
 * @since 2.0.2
 */
add_theme_support( 'custom-background' );

add_theme_support( "title-tag" );

add_editor_style();

/**
 * Add support for a custom header
 *
 * @since 2.0.9
 */
// The Header-image
	$defaults = array(

	'default-image'   => '',
	'width'           => 1440,
	'height'          => 360,
	'flex-width'      => true,
	'flex-height'     => false,
	'uploads'         => true,
	'random-default'  => false,
	'header-text'     => false,
	'default-text-color'  => '',
	'wp-head'             => '',
	'admin-head-callback' => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header', $defaults );


/**
 * Add Genesis post format support
 *
 * @since 2.0.9
 */
add_theme_support( 'post-formats', array(
	'aside',
	'chat',
	'gallery',
	'image',
	'link',
	'quote',
	'status',
	'video',
	'audio'
));
add_theme_support( 'genesis-post-format-images' );

/**
 * Add Genesis footer widget areas
 *
 * @since 2.0.1
 */
add_theme_support( 'genesis-footer-widgets', 3 );

/**
 * Add Genesis theme color scheme selection theme option
 *
 * @since 2.0.11
 */
/*add_theme_support(*/
	//'genesis-style-selector',
	//array(
		//'yg-red'   => 'Red',
		//'yg-orange'  => 'Orange'
	//)
/*);*/

/**
 * Declare WooCommerce support, using Genesis Connect for WooCommerce
 *
 * See: http://wordpress.org/plugins/genesis-connect-woocommerce/
 *
 * @since 2.0.6
 */
add_theme_support( 'genesis-connect-woocommerce' );


/**
 * Unregister default Genesis sidebars
 *
 * @since 1.x
 */
 unregister_sidebar( 'header-right' );
// unregister_sidebar( 'sidebar-alt' );
// unregister_sidebar( 'sidebar' );

/**
 *
 * Remove and move Alt sidebar inside content-sidebar
 *
 **/
remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
add_action(    'genesis_after_content',              'genesis_get_sidebar_alt' );

// add_action( 'widgets_init', 'ygf_remove_genesis_widgets', 20 );
/**
 * Disable some or all of the default Genesis widgets.
 *
 * @since 2.0.0
 */
function ygf_remove_genesis_widgets() {

    unregister_widget( 'Genesis_Featured_Page' );									// Featured Page
    unregister_widget( 'Genesis_User_Profile_Widget' );								// User Profile
    unregister_widget( 'Genesis_Featured_Post' );									// Featured Posts

}

// add_action( 'init', 'ygf_remove_layout_meta_boxes' );
/**
 * Remove the Genesis 'Layout Settings' meta box for posts and/or pages.
 *
 * @since 2.0.0
 */
function ygf_remove_layout_meta_boxes() {

    remove_post_type_support( 'post', 'genesis-layouts' );							// Posts
    remove_post_type_support( 'page', 'genesis-layouts' );							// Pages

}

add_action( 'init', 'ygf_remove_scripts_meta_boxes' );
/**
 * Remove the Genesis 'Scripts' meta box for posts and/or pages.
 *
 * @since 2.0.12
 */
function ygf_remove_scripts_meta_boxes() {

    remove_post_type_support( 'post', 'genesis-scripts' );							// Posts
    remove_post_type_support( 'page', 'genesis-scripts' );							// Pages

}
