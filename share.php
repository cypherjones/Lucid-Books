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
  		'post_type'      => 'shareables',  
  		'post_status'    => 'publish',
  		'posts_per_page' => -1,

  	);
  
  $share = new WP_Query( $args );
  
  ?>
	<div class="container">
		<div class="row">
			<?php 

			$page_id = get_the_id();
				  $featured_img = get_the_post_thumbnail_url( $page_id, 'full' );
				  $link = get_the_permalink( );
                  $share = social_warfare();

				echo do_shortcode('[ajax_load_more id="2567668385" repeater="template_1" post_type="shareables" posts_per_page="8" images_loaded="true"]') 

				?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 


?>