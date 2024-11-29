
<?php get_header(); ?>

<!-- main -->
<main>

  <header class="bg-secondary border-top border-bottom py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="display-3 text-center heading-underline position-relative">
            <?php the_title(); ?>
          </h1>
          <div class="text-center">
            <small class="text-body-secondary">Posted - <?php echo get_the_date( 'd M Y' ); ?></small>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 py-5">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

</main>
<!-- ./ main -->

<?php get_footer() ?>