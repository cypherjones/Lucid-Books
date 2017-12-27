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
  
  ?>
	<div class="container">
		<div class="row">
			 <?php
				  //get the page wrapper
				  if ( $share->have_posts() ) : while ( $share->have_posts() ) : $share->the_post();

				  $page_id = get_the_id();

				  ?>

				  <div class="col-md-4">
				  	<?php echo the_title( ); ?>
				  </div>

			<?php endwhile; endif; ?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 

?>