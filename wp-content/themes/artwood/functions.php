<?php

/**
 * Preventing caching scripts and styles.
 */
define( 'ASSETS_VERSION', time() );

require_once ( TEMPLATEPATH . '/inc/MTDUtils.php' );
require_once ( TEMPLATEPATH . '/inc/wp_custom_menu_walker.php' );

/**
 * Disable Gutenberg editor for posts and pages
 */
MTDUtils::disable_gutenberg();

global $allowed_html;
$allowed_html = array(
	'a' => array(
		'href'  => true,
		'title' => true,
	),
	'h1'     => array(),
	'h2'     => array(),
	'h3'     => array(),
	'h4'     => array(),
	'h5'     => array(),
	'h6'     => array(),
	'p'      => array(),
	'i'      => array(),
	'b'      => array(),
	'br'     => array(),
	'ul'     => array(),
	'ol'     => array(),
	'li'     => array(),
	'em'     => array(),
	'hr'     => array(),
	'del'    => array(),
	'ins'    => array(
		'datetime' => true
	),
	'img'    => array(
		'src' => true,
		'alt' => true
	),
	'strong' => array(),
	'blockquote' => array(),
);

/**
 * Add styles
 */
function register_styles() {
	$global_styles = get_template_directory_uri() . '/styles/app.css';
	$styles        = get_template_directory_uri() . '/style.css';

	wp_register_style( 'theme_styles', $global_styles, false, ASSETS_VERSION );
	wp_register_style( 'custom_styles', $styles, false, ASSETS_VERSION );
	wp_register_style( 'ct-swiper-css', get_template_directory_uri() . '/styles/chunks/src_js_pages_IndexPage_js.chunk.css', '', ASSETS_VERSION );

	wp_enqueue_style( 'theme_styles' );
	wp_enqueue_style( 'custom_styles' );
	wp_enqueue_style( 'ct-swiper-css' );
}


/**
 * Add scripts
 */
function register_scripts() {
	$main_js = get_template_directory_uri() . '/js/app.js';

	wp_deregister_script( 'jquery' );

	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '1.0.0', true );
	wp_register_script( 'main', $main_js, array('jquery'), ASSETS_VERSION, true );
	
	wp_register_script( 'swiper-lib', get_template_directory_uri() . '/js/vendors-node_modules_swiper_swiper_esm_js.js', array(), ASSETS_VERSION, true );
	wp_register_script( 'index-page', get_template_directory_uri() . '/js/src_js_pages_IndexPage_js.js', array(), ASSETS_VERSION, true );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main' );

	if (is_page_template('templates/template_home.php')) {
		wp_enqueue_script( 'swiper-lib' );
		wp_enqueue_script( 'index-page' );
	}
}


/**
 * Theme setup
 */
function theme_setup() {
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form'
	) );

	add_action( 'wp_enqueue_scripts', 'register_styles' );
	add_action( 'wp_enqueue_scripts', 'register_scripts' );

	register_nav_menus( array(
		'header_menu' => 'Header menu'
	) );
}

add_action( 'after_setup_theme', 'theme_setup' );


/**
 * Add Theme setup page with ACF plugin
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Theme Settings',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'capability' => 'manage_options',
		'position'   => '35',
		'icon_url'   => 'dashicons-welcome-widgets-menus',
		'redirect'   => false
	));
}

/**
 * Add viewport meta tag
 */

function set_viewport() {
	?>
	<meta name="viewport" content="width=device-width" />
	<?php
}

add_action( 'wp_head', 'set_viewport' );


if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_628cae8e6a178',
		'title' => 'Home page',
		'fields' => array(
			array(
				'key' => 'field_628cae9a2c409',
				'label' => 'hero_gallery',
				'name' => 'hero_gallery',
				'type' => 'gallery',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => '',
				'max' => '',
				'insert' => 'append',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_628caf1e2c40a',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_628ce0fb7fb5e',
				'label' => 'slider',
				'name' => 'slider',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layouts' => array(
					'628ce10488114' => array(
						'key' => '628ce10488114',
						'name' => 'slide',
						'label' => 'slide',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_628ce12f7fb5f',
								'label' => 'link',
								'name' => 'link',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_628ce1627fb60',
								'label' => 'image',
								'name' => 'image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'url',
								'preview_size' => 'full',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_628ce1887fb61',
								'label' => 'mobile image',
								'name' => 'mobile_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'url',
								'preview_size' => 'full',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_628ce1a17fb62',
								'label' => 'description',
								'name' => 'description',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
				),
				'button_label' => 'Add Row',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'templates/template_home.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	endif;

add_action( 'wp_enqueue_scripts', 'ct_slider_scripts', 10 );
function ct_slider_scripts() {

		
}