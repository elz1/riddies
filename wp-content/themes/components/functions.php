<?php

/**
 * Autoload Setup with Composer
 */
include_once(__DIR__.'/vendor/autoload.php');

/**
 * Load our environment variables from .env file
 * Using the .env file prevents us from committing private keys to the repository
 */
$root_dir = dirname(__FILE__);
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
}

Setup\Environment::init();
Setup\Cleanup::init();
Setup\ThemeSupport::init();
Setup\Widgets::init();
Setup\Scripts::init();
Setup\Menus::init();
Setup\ACF::init();

Setup\PostTypes\Riddle::register();
Setup\Taxonomies\RiddleType::register();
Setup\Taxonomies\Episode::register();

Setup\Widgets\RelatedPosts::register();

function get_the_content_formatted() {
	$content = get_the_content();
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

function add_nav_menu_classes($classes, $item){
   if( is_post_type_archive('riddle') && ($item->title == "All Riddies" ) ){
      $classes[] = 'current-menu-item';
   }
   return $classes;
}
add_filter('nav_menu_css_class' , 'add_nav_menu_classes' , 10 , 2);
