<?php

include get_template_directory() . '/inc/wp-clean-header.php';
include get_template_directory() . '/inc/enqueue-scripts.php';
include get_template_directory() . '/inc/register-post-types.php';
include get_template_directory() . '/inc/register-nav-menus.php';
include get_template_directory() . '/inc/custom-image-sizes.php';

add_action( 'after_setup_theme', 'setup_news_theme_setting' );
if ( ! function_exists( 'setup_news_theme_setting' ) ) {
	function setup_news_theme_setting() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo', [
			'height'               => 50,
			'flex-width'           => true,
			'flex-height'          => false,
			'header-text'          => 'MoGo',
			'unlink-homepage-logo' => true
		] );
	}
}

function add_link_class_in_menu_item( $atts, $item, $args ) {
	if ( $args->theme_location == 'header-menu' ) {
		$atts['class'] = 'nav__link';
	}

	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_link_class_in_menu_item', 10, 3 );


function add_li_class_in_header_menu( $classes, $item, $args ) {
	if ( $args->theme_location == 'header-menu' ) {
		$classes[] = 'nav__item';
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_li_class_in_header_menu', 1, 3 );

function header_class() {
	$class = '';
	if ( ! is_page('home') ) {
		$class = ' header--pages';
	}

	return $class;
}

