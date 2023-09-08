<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_post_type_support( 'page', 'excerpt' );

function add_theme_scripts()
{
	wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
	wp_enqueue_style('style-theme', get_stylesheet_uri());
	wp_enqueue_style('style-font', 'https://use.typekit.net/jqp5kev.css');
	wp_enqueue_style('style-slide', 'https://unpkg.com/@splidejs/splide@3.0.8/dist/css/splide.min.css');

	wp_enqueue_script('script-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);
	wp_enqueue_script('my-script',  get_stylesheet_directory_uri().'/js/index.js', array(), false, true);
	wp_enqueue_script('script-splide', 'https://unpkg.com/@splidejs/splide@3.0.8/dist/js/splide.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
		)
	);
}
add_action('init', 'register_my_menus');

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


add_filter( 'wpcf7_load_js', '__return_false' );