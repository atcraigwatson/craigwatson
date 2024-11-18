
<?php get_header(); ?>

<!-- main -->
<main>

  <section class="py-5">
    <div class="py-5 text-center container">
        <div class="row py-lg-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-uppercase fw-bold">Recent Projects</h1>
            </div>
        </div>
    </div>
  </section>

  <section class="text-white">
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-2 g-4">

      <?php while( have_posts() ) : ?>
        <?php the_post(); ?>

        <div class="col">
          <div class="card card-slate">
            <!-- <img src="<?php the_title(); ?>" class="card-img-top" alt="..."> -->
            <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'card-img-top h-auto' ) ); ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_field('short_description') ?></p>
              <!-- <a href="#" class="btn btn-secondary me-3">Read More</a> -->
              <a href="<?php the_field('link_to_project') ?>" class="btn btn-outline-secondary">Visit Project</a>
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