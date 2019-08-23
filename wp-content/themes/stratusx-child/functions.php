<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_style', 9999 );
function enqueue_child_theme_style() {
	wp_enqueue_style( 'dtbwp_css_child', get_stylesheet_directory_uri() . '/style.css', array(
		'dtbwp_style',
	), 1.0 );
}

// SONACAST
function sonaCastEpisodes() {
	ob_start();
		get_template_part('includes/sonacast');
	return ob_get_clean();
}

add_shortcode( 'sonacast_episodes', 'sonaCastEpisodes' );
