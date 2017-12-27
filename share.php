<?php
/**
 * Template Name: Share pop
 */

  get_header(); 

  	/*
  	 * The WordPress Query class.
  	 *
  	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
  	 */
  	$args = array(
  		'post_type' => 'shareables',  
  		'post_status' => 'publish',
  	);
  
  $share = new WP_Query( $args );
  

  //get the page wrapper
  if ( $share->have_posts() ) : while ( $share->have_posts() ) : $share->the_post();

  $page_id = get_the_id();

  the_title( );

	endwhile; endif;
  
  // get the footer
  get_footer(); 

?>