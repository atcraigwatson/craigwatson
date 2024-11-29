
<?php get_header(); ?>

<!-- main -->
<main>

  <?php get_template_part( 'template-parts/content', 'page-header' ); ?>

  <section>
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-2 g-4">

      <?php while( have_posts() ) : ?>
        <?php the_post(); ?>

        <div class="col">
          <div class="card bg-secondary">

            <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'card-img-top h-auto' ) ); ?>
            <div class="card-body">

              <!-- Display the related project-tag tax terms -->
              <?php $terms = get_the_terms( $post->ID, 'project-tag' ); ?>  
              <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
                <div class="d-flex flex-wrap gap-2 pb-3">
                <?php foreach ( $terms as $term ) : ?>
                  <span class="badge py-2 px-4 bg-slate-300 rounded-pill"><?php echo $term->name ?></span>
                <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <!-- End project-tag tax terms -->

              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_field('short_description') ?></p>
              <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary me-3">Read More</a>
              <a href="<?php the_field('link_to_project') ?>" class="btn btn-outline-primary">Visit Project</a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

      </div>
    </div>
  </section>

</main>
<!-- ./ main -->

<?php get_footer() ?>