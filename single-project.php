<?php
/**
 * The template for displaying single projects.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package craigwatson.io
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- main -->
<main>

  <?php get_template_part( 'template-parts/content', 'page-header' ); ?>

  <article>
    <div class="container py-5">
      <div class="row justify-content-center py-5">
        <div class="col">
          <!-- card -->
          <div class="card card-slate">
            <div class="card-img-top">
              <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-fluid rounded-top' ) ); ?>
            </div>
            <!-- Display the related project-tag tax terms -->
            <?php $terms = get_the_terms( $post->ID, 'project-tag' ); ?>  
            <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
              <div class="d-flex flex-wrap gap-2 p-3">
              <?php foreach ( $terms as $term ) : ?>
                <?php $bg_color = get_field( 'background_colour', $term ); ?>
                <span class="badge py-2 px-4 fs-5 text-bg-dark rounded-pill"><?php echo $term->name ?></span>
              <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <!-- End project-tag tax terms -->
            <div class="card-body">
              <?php the_content() ?>
            </div>
        </div><!-- ./ .card -->
      </div>
    </div>
  </article>

</main>
<!-- ./ main -->

<?php get_footer() ?>