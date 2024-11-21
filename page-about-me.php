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

  <header class="d-flex justify-content-center py-5">
    <div class="position-relative">
      <h1 class="d-inline-block display-1 heading-underline"><?php the_title(); ?></h1>
    </div>
  </header>

  <article class="container">
    <div class="row flex-row-reverse py-5">
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <img class="about-page-profile-picture img-fluid shadow" src="<?php echo get_template_directory_uri() . '/images/craigwatson-profile-picture.jpg' ?>" alt="A profile picture of Craig Watson">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <p class="about-page-lead fw-bold">i have a passion for solving problems</p>
      </div>
    </div>
    <div class="row align-items-stretch py-5">
      <div class="col-12 mb-5">
        <h2 class="display-4">Things To Know</h2>
        <h3 class="display-subheading">three quick things to know about me</h3>
      </div>
      <div class="col-12 col-lg-4">
        <div class="things-to-know bg-secondary d-flex flex-column h-100 p-5" id="ttk-family">
          <h3 class="fs-2">Family</h3>
          <p class="fs-4">a wife and young son to keep me on my toes</p>
          <img class="align-self-start mt-auto" src="<?php echo get_template_directory_uri() . '/images/craigwatson-ttk-heart.png' ?>" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="things-to-know bg-info text-primary d-flex flex-column h-100 p-5" id="ttk-granddad">
          <h3 class="fs-2 text-dark">Never Give In</h3>
          <p class="fs-4 text-dark">a favorite saying of my late granddad</p>
          <img class="align-self-start mt-auto" src="<?php echo get_template_directory_uri() . '/images/craigwatson-ttk-lion.png' ?>" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="things-to-know bg-dark d-flex flex-column h-100 p-5" id="ttk-sport">
          <h3 class="fs-2">Sport</h3>
          <p class="fs-4">being active and playing sport</p>
          <img class="align-self-start mt-auto" src="<?php echo get_template_directory_uri() . '/images/craigwatson-ttk-football.png' ?>" alt="">
        </div>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-12 mb-5">
        <h2 class="display-4">Current Skills</h2>
        <h3 class="display-subheading mb-0">how i feel my current skills stack up</h3>
      </div>
      <div class="col-12 col-lg-9">
        <div class="current-skills card-slate position-relative p-5 mb-5">
          <h3 class="fs-2 mb-4">HTML</h3>
          <p class="fs-4">I love to write clean, semantic HTML code, that then presents well to the browser and provides a platform for SEO best practices.</p>
          <div class="progress-dashes">
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-light"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-9 offset-lg-1">
        <div class="current-skills card-slate position-relative p-5 mb-5">
          <h3 class="fs-2 mb-4">CSS / SCSS</h3>
          <p class="fs-4">With so many frameworks to choose from, including the one I used to build this site, it feels like basic CSS can easily be overlooked. I still like to write vanilla CSS, but I also have a slight soft spot for Bootstrap - <a href="https://codepen.io/atcraigwatson" class="link-info">check out some of my work on CodePen</a></p>
          <div class="progress-dashes">
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-light"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-9 offset-lg-2">
        <div class="current-skills card-slate position-relative p-5 mb-5">
          <h3 class="fs-2 mb-4">Javascript</h3>
          <p class="fs-4">I have only scratched the surface of the Javascript world, but I am learning each day and React, Next and Headless WordPress are currently what I am studying in my free time.</p>
          <div class="progress-dashes">
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-light me-2"></div>
            <div class="progress-dash bg-light me-2"></div>
            <div class="progress-dash bg-light"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-9 offset-lg-3">
        <div class="current-skills card-slate position-relative p-5 mb-5">
          <h3 class="fs-2 mb-4">WordPress</h3>
          <p class="fs-4">I have actually been in and around WordPress websites for ten years on and off, my first site being a jobs board for a recruitment agency.</p>
          <div class="progress-dashes">
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-secondary me-2"></div>
            <div class="progress-dash bg-light me-2"></div>
            <div class="progress-dash bg-light"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row py-5">
      <div class="p-5 card-slate shadow">
      <div class="col-12 mb-5">
        <h2 class="display-4">Summary</h2>
        <h3 class="display-subheading mb-0">a short summary about me and my coding journey</h3>
      </div>
      <div class="col-12 mb-5">
        <div class="summary">
          <p>As mentioned above, I started my coding journey around ten years ago. I initially became interested in making websites when my then employer had began the process of having theirs re-designed and developed.</p>
          <p>I didn't manage to learn a great deal back then, but one thing I will never forget is the <strong>feeling of opportunity.</strong> Opportunity in the sense of what can be achieved with a well thought out website. How much it can bring to a company, not just in online presence but utilized for processes.</p>
          <p>It was a number of years later I had the chance to start learning to code. It was WordPress that caught my eye then too. Team Treehouse taught me an awful lot, and while doing so I had the chance to build a jobs board on WordPress and two recruitment company websites using WP Job Manager and themes from StudioPress. I also had the chance to write an article for sitepoint on <a href="https://www.sitepoint.com/build-responsive-type-scale-bootstrap/">building responsive type scales with bootstrap.</a></p>
          <p>The birth of my young son, and that sense of responsibility lead me back to a career I was familiar with - Monumental Masonry. But, behind the scenes I was working away creating the website and order software always looking to push what I was capable of.</p>
          <p>Fast forward to today, I am looking to really push my learning to the next level and explore everthing WordPress can do.</p>
        </div>
      </div>
      <div class="col-12 mb-5">
        <h3 class="display-5">Useful Links</h3>
        <div class="d-flex flex-wrap">
          <a class="btn btn-outline-secondary me-3" href="https://github.com/atcraigwatson">Github</a>
          <a class="btn btn-outline-secondary me-3" href="https://codepen.io/atcraigwatson">Codepen</a>
          <a class="btn btn-outline-secondary me-3" href="/contact-me">Email Me</button>
          <a class="btn btn-outline-secondary" href="/projects">Recent Projects</a>
        </div>
      </div>
      </div>
    </div>
  </article>

</main>
<!-- ./ main -->

<?php get_footer() ?>