
<?php get_header(); ?>

<!-- main -->
<main>

  <header class="bg-secondary border-top border-bottom py-5">
    <div class="container">
      <div class="row">
        <hgroup class="col-12">
          <h1 class="display-3 text-center heading-underline position-relative">
            <?php the_title(); ?>
          </h1>
          <p class="text-body-secondary text-center">Posted - <?php echo get_the_date( 'd M Y' ); ?></p>
        </hgroup>
      </div>
    </div>
  </header>

  <article class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 py-5">
        <?php the_content(); ?>
      </div>
    </div>
  </article>

</main>
<!-- ./ main -->

<?php get_footer() ?>