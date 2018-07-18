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
		'spa_bundle',
		'http://localhost:8080/dist/build.js',
		[],
		false,
		true
	);

	wp_enqueue_script('jquery');
	wp_enqueue_script('spa_bootstrap');
	wp_enqueue_script('spa_bundle');
}