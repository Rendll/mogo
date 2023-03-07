<?php

add_action( 'wp_enqueue_scripts', 'enqueue_news_theme_scripts' );

function enqueue_news_theme_scripts() {
	wp_enqueue_script( 'app-scripts', get_template_directory_uri() . '/assets/dist/js/app.min.js', [], null, true );
	wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/assets/dist/css/main.min.css', [], null );
}
