
<?php get_header(); ?>


<header class="d-flex justify-content-center py-5">
  <div class="heading-underline-wrap">
    <h1 class="display-1 text-center heading-underline position-relative">
      Blog Posts
    </h1>
  </div>
</header>


<main class="my-5">


<section class="container mt-lg-5">
  <div class="row g-0">

  <?php if ( have_posts() ) : ?>
    <?php $i = 0; ?>
    <?php while ( have_posts() ) : ?>
      <?php $i++; ?>
      <?php the_post(); ?>

      <?php if ( $i == 1 ) : ?>
        <div class="col-12 col-xl-5 mt-5 mt-lg-0">
          <div class="blog-hero-first hero-post-image-0 d-flex flex-column h-100 p-3 p-md-5" style="background: linear-gradient(to right, rgba(43, 112, 253, 0.8) , rgba(20, 65, 155, 0.8)), url('<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ) ?>') no-repeat center/cover;">
            <date class="fs-6 opacity-75 mb-3">25 Nov, 2024</date>
            <div class="header-content my-auto">
              <h2 class="display-5"><?php the_title(); ?></h2>
              <p class="fs-4 opacity-90"><?php echo wp_trim_words( get_the_content(), 20, ' [...]' ); ?></p>
            </div>
            <a href="<?php the_permalink() ?>" class="btn btn-outline-light align-self-start mt-3">Read More</a>
          </div>
        </div>
      <?php endif; ?>

      <?php if ( $i == 2 ) : ?>
        <div class="col-12 col-xl-7 mt-5 mt-xl-0 d-flex">
          <div class="row mx-xl-0">
            <div class="col-lg-6 col-xl-12 mb-5 mb-xl-0 px-xl-0">
              <div class="blog-hero-second d-flex flex-column flex-xl-row-reverse h-100">
                <div class="hero-post-image hero-post-image-1 d-flex justify-content-center align-items-center position-relative"  style="background: linear-gradient(to right, rgba(161, 51, 213, 0.8) , rgba(215, 63, 89, 0.8)), url('<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ) ?>') no-repeat center/cover;">
                  <a class="btn btn-outline-light" href="<?php the_permalink() ?>">Read More</a>
                </div>
                <div class="hero-post-content bg-secondary h-100 p-3 p-md-5 md-xl-3">
                  <date class="fs-6 opacity-75">17 Nov, 2024</date>
                  <h3 class="h4 mt-3 mb-1"><?php the_title(); ?></h3>
                  <p class="opacity-90"><?php echo wp_trim_words( get_the_content(), 20, ' [...]' ); ?></p>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ( $i == 3 ) : ?>
            <div class="col-lg-6 col-xl-12 mb-5 mb-xl-0 px-xl-0">
              <div class="blog-hero-third d-flex flex-column flex-xl-row  h-100">
                <div class="hero-post-image hero-post-image-2 d-flex justify-content-center align-items-center position-relative"  style="background: linear-gradient(to right, rgba(43, 213, 100, 0.8) , rgba(0, 130, 213, 0.8)), url('<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ) ?>') no-repeat center/cover;">
                  <a class="btn btn-outline-light" href="<?php the_permalink() ?>">Read More</a>
                </div>
                <div class="hero-post-content bg-secondary h-100 p-3 p-md-5 md-xl-3">
                  <date class="fs-6 opacity-75">10 Nov, 2024</date>
                  <h3 class="h4 mt-3 mb-1"><?php the_title(); ?></h3>
                  <p class="opacity-90"><?php echo wp_trim_words( get_the_content(), 20, ' [...]' ); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; wp_reset_postdata(); ?>

  </div>
</section>


<section class="container">
  <div class="row">

  <div class="col-12 col-lg-7 mt-5">
    <?php if ( have_posts() ) : ?>
      <?php $ii = 0; ?>
      <?php while ( have_posts() ) : ?>
        <?php $ii++; ?>
        <?php the_post(); ?>

        <?php if ( $ii > 3 ) : ?>

          <div class="card bg-secondary mb-3">
            <?php echo get_the_post_thumbnail( $post->ID, 'blog-home-thumb', array( 'class' => 'card-img-top img-fluid')); ?>
            <div class="card-meta bg-slate-400 d-flex px-3 py-2">
              <div class="card-text">
                <small class="text-body-secondary">Posted - <?php echo get_the_date( 'd M Y' ); ?></small>
              </div>
              <!-- Should be conditional so never shows a 0 -->
              <!-- <div class="card-meta-comments ms-auto me-2">
                3 <i class="bi bi-chat-fill"></i>
              </div> -->
              <!-- Should be conditional so never shows a 0 -->
              <!-- <div class="card-meta-likes">
                4 <i class="bi bi-heart-fill"></i>
              </div> -->
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' [...]' ); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline-light">Read More</a>
            </div>
          </div>

        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <aside class="blog-sidebar col-12 col-lg-5 mt-5">

    <section id="react-search"></section>

    <section id="react-quote-card"></section>

    <div class="card bg-secondary w-100">
      <div class="card-header border-bottom py-3">
        Useful MDN Links
      </div>
      <ul class="list-group list-group-flush bg-secondary">
        <li class="list-group-item bg-secondary"><a href="https://developer.mozilla.org/en-US/docs/Web/HTML">MDN HTML</a></li>
        <li class="list-group-item bg-secondary"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS">MDN CSS</a></li>
        <li class="list-group-item bg-secondary"><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">MDN JavaScript</a></li>
        <li class="list-group-item bg-secondary"><a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility">MDN Accessibility</a></li>
      </ul>
    </div>

  </aside>

  </div>
</section>

</main>
<!-- ./ main -->

<?php get_footer() ?>