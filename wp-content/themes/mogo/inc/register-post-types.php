<?php

add_action( 'init', 'register_custom_post_types' );

if ( ! function_exists( 'register_custom_post_types' ) ) {

	function register_custom_post_types() {

		register_post_type( 'team', [
			'label'        => __( 'Team' ),
			'public'       => true,
			'supports'     => [ 'title' ],
			'menu_icon'    => 'dashicons-groups',
			'hierarchical' => false,
			'has_archive'  => true
		] );
	}

}
