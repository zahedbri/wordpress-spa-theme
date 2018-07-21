<?php

function spa_menus_get_all_menus() {
	$menus = [];

	foreach ( get_registered_nav_menus() as $slug => $desc ) {
		$obj = new stdClass();
		$obj->slug = $slug;
		$obj->description = $desc;
		$menus[] = $obj;
	}
	return $menus;
}

function spa_menus_get_menu_data($data) {
	$menus = wp_get_nav_menu_object($data['id']);
	$menu_items = wp_get_nav_menu_items($menus->term_id);

	return $menu_items;
}