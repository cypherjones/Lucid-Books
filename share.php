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
				  $featured_img = get_the_post_thumbnail_url( $page_id, 'full' );

				  ?>

				  <div class="col-md-4">
				  	<img src="<?php echo $featured_img; ?>" alt="">
				  </div>

			<?php endwhile; endif; ?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 

?>