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

  <header class="py-5 bg-secondary">
    <div class="py-5 text-center container">
        <div class="row py-lg-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-uppercase fw-bold"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
  </header>

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