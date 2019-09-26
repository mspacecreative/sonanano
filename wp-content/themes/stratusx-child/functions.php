<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_style', 9999 );
function enqueue_child_theme_style() {
	wp_enqueue_style( 'dtbwp_css_child', get_stylesheet_directory_uri() . '/style.css', array(
		'dtbwp_style',
	), 1.0 );
}

// Load scripts in footer
function footerScripts() {
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
}

// SONACAST
function sonaCastEpisodes() {
	ob_start();
		get_template_part('includes/sonacast');
	return ob_get_clean();
}

// ACTIONS, FILTERS, SHORTCODES
add_action('wp_enqueue_scripts', 'footerScripts');
add_shortcode( 'sonacast_episodes', 'sonaCastEpisodes' );

