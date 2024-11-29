<?php 


/**
 * Proper way to enqueue scripts and styles.
 */
function ccc_scripts_styles() {
  wp_enqueue_style( 'ccc_styles', get_template_directory_uri() . '/build/style-index.css' );
  wp_enqueue_style( 'bootsrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
  wp_enqueue_script( 'ccc_scripts', get_template_directory_uri() . '/build/index.js', array(), '1.0.0', true );
  wp_enqueue_script( 'cw_bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'ccc_scripts_styles' );
add_action( 'login_enqueue_scripts', 'ccc_scripts_styles' );

function my_login_logo() { ?>
  <style type="text/css">
      #login h1 a, 
      .login h1 a {
          background-image: url( <?php echo get_template_directory_uri() . '/images/cockertoncc-logo-icon.png'; ?> );
          height: 120px;
          background-size: contain;
          background-repeat: no-repeat;
          padding-bottom: 30px;
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function cw_add_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
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
  register_block_type( __DIR__ . '/blocks/bs_button' );
}
// Here we call our tt3child_register_acf_block() function on init.
add_action( 'init', 'cw_register_acf_blocks' );
