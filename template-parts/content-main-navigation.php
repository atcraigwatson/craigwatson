    <header>
      <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            craigwatson.io
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
              'depth' => 0,
              'walker' => new bootstrap_5_wp_nav_menu_walker()
            )); ?>
          </div>
        </div>
      </nav>
    </header>