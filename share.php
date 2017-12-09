<?php
/**
 * Template Name: Share
 */

  get_header(); 

  //get the page wrapper
  if ( have_posts() ) : while ( have_posts() ) : the_post();

  $page_id = get_the_id();

	endwhile; endif;
  
  // get the footer
  get_footer(); 

?>