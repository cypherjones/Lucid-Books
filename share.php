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
			<?php echo do_shortcode('[ajax_load_more id="4349616249" repeater="template_1" post_type="shareables" posts_per_page="9" image_loaded="true" button_label="more sharables" button_loading_label="loading sharables"]') ?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 

  


?>