<?php
/**
* Functions JH Store
*/
namespace Jhstore;

function thumb() {
	//add_image_size('plats-archive', 600, 600);
	//add_image_size('plats-single', 1800, 1800);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\thumb');

add_theme_support( 'custom-logo' );