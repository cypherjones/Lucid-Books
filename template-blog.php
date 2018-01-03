<?php
/**
 * Template Name: Blog
 */

  // get the header
  get_header(); 

  //get the page wrapper
  if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
<!-- contain main informative part of the site -->
  <main id="main" role="main">
    <div id="twocolumns">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div id="content">
              <?php echo do_shortcode('[ajax_load_more id="1951194437" post_type="post" scroll_distance="50" max_pages="5"]' );?>
            </div>
          </div>
          <div class="col-md-4">
            <!-- contain sidebar of the page -->
            <?php dynamic_sidebar('page-sidebar' ); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php

  endwhile; endif;
  
  // get the footer
  get_footer(); 

 ?>