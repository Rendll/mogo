<?php

if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'latest-posts', 380, 240, true );
	add_filter( 'image_size_names_choose', 'latest_post_size' );

	add_image_size( 'team-card', 380, 470, true );
	add_filter( 'image_size_names_choose', 'team_card_size' );
}


function latest_post_size( $sizes ): array {
	return array_merge( $sizes, array(
		'latest-posts' => __( "Post Card" ),
	) );
}

function team_card_size( $sizes ): array {
	return array_merge( $sizes, array(
		'team-card' => __( "Team Card" ),
	) );
}
