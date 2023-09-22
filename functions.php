<?php

define('POSADA_URL', site_url("/"));
define('POSADA_URL_DIR', get_stylesheet_directory_uri());
define('POSADA_PATH_DIR', plugin_dir_path(__FILE__));
define('POSADA_TEXT_DOMAIN', 'posada');

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

require(__DIR__ . "/core/core.php");

WpDevKit::load_env();

new WpDevKit();


function register_new_menus()
{
  register_nav_menus(
    array(
      'Footer' => __('Menu de Footer')
    )
  );
}

add_action('init', 'register_new_menus');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
  wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


