<?php
/**
 * The header for the Craig Watson Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package craigwatson
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Craig Watson</title>
    <link rel="icon" type="image/png" href="/assets/images/cockertoncc-logo-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    
    <!-- site navigation -->
      <?php get_template_part('template-parts/content', 'main-navigation'); ?>
    <!-- ./ header -->