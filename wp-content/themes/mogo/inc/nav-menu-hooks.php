<?php

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
