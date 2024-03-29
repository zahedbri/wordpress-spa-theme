<?php

function spa_enqueue_scripts(){
	wp_register_style('spa_bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('spa_bootstrap');

	wp_register_script(
		'spa_bootstrap',
		get_template_directory_uri().'/assets/js/bootstrap.min.js',
		[],
		false,
		true
	);

	wp_register_script(
		'spa_moment',
		get_template_directory_uri().'/assets/js/moment.js',
		array(),
		false,
		true
		);

	wp_register_script(
		'spa_bundle',
		'http://localhost:8080/dist/build.js',
		[],
		false,
		true
	);

	wp_localize_script('spa_bundle','wp_rest_api',[
		'base_url'  => home_url('/wp-json/wp/v2/'),
		'spa_url'   =>home_url('/wp-json/spa/v1/'),
		'site_name' => get_bloginfo('name'),
		'footer_text'   => get_theme_mod('spa_footer_text')
	]);

	wp_enqueue_script('jquery');
	wp_enqueue_script('spa_bootstrap');
	wp_enqueue_script('spa_moment');
	wp_enqueue_script('spa_bundle');

}