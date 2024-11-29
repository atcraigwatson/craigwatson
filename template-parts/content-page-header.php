<header class="d-flex justify-content-center py-5">
  <div class="heading-underline-wrap">
    <h1 class="display-1 text-center heading-underline position-relative">
      <?php 
        if ( is_archive() ) {
          echo post_type_archive_title( '', false );
        } else {
          the_title();
        }
      ?>
    </h1>
  </div>
</header>