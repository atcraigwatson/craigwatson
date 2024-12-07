<?php 


/**
 * Proper way to enqueue scripts and styles.
 */
function craigwatson_scripts_styles() {

  $bootstrap_icons = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css';
  $bootstrap_js = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js';

  // $highlight_js_styles = 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css';
  $highlight_js_scripts = 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js';

  wp_enqueue_style( 'craigwatson_styles', get_template_directory_uri() . '/build/style-index.css' );
  wp_enqueue_style( 'bootsrap-icons', $bootstrap_icons );
  // wp_enqueue_style( 'highlight_js_styles', $highlight_js_styles);

  wp_enqueue_script( 'craigwatson_scripts', get_theme_file_uri() . '/build/index.js', array( 'wp-element' ), '1.0', true );
  wp_enqueue_script( 'cw_bootstrap_js', $bootstrap_js, array(), '1.0.0', true );
  wp_enqueue_script( 'highlight_js_scripts', $highlight_js_scripts, array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'craigwatson_scripts_styles' );

function cw_add_theme_support() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'blog-home-thumb', 744, 300, array( 'center', 'center' ) );
}
add_action( 'after_setup_theme', 'cw_add_theme_support' );


/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function cw_register_acf_blocks() {
  /**
   * We register our block's with WordPress's handy
   * register_block_type();
   *
   * @link https://developer.wordpress.org/reference/functions/register_block_type/
   */
  register_block_type( __DIR__ . '/blocks/codeblock' );
  register_block_type( __DIR__ . '/blocks/codewrap' );
}
// Here we call our tt3child_register_acf_block() function on init.
add_action( 'init', 'cw_register_acf_blocks' );
