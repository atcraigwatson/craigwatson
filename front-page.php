<?php 
/**
 * The template for displaying the home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CockertonCC
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>


<?php get_header(); ?>

<!-- main -->
<main>

  <section class="section-home-jumbotron d-flex align-items-center">
    <div class="py-5 container">
      <div class="row py-lg-5">
        <div class="col-md-9 col-lg-8 col-xl-7 mx-auto">
          <span class="home-h1-pre-text">Hi, my name is</span>
          <h1 class="text-uppercase display-2 fw-bold">Craig Watson</h1>
          <p class="lead fs-2 fw-bold text-body-tertiary">An aspiring front-end developer with a passion for WordPress.</p>
          <a href="/about-me" class="btn btn-secondary me-3">More About Me</a>
          <a href="/projects" class="btn btn-outline-secondary">Recent Projects</a>
        </div>
      </div>
    </div>
  </section>



</main>
<!-- ./ main -->

<?php get_footer() ?>