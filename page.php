<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CockertonCC
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- main -->
<main>

  <?php get_template_part( 'template-parts/content', 'page-header' ); ?>

  <article class="">
    <div class="container py-5">
      <div class="row justify-content-center py-5">
        <div class="col-12 col-md-6">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

</main>
<!-- ./ main -->

<?php get_footer() ?>