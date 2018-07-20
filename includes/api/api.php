<?php

function spa_rest_api_init(){
	register_rest_field(
		'post',
		'spa_meta',
		[
			'get_callback' => 'spa_additional_post_data',
			'update_callback'   => null,
			'schema'            =>null
		]
	);
}