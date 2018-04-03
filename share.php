<?php
/**
 * Template Name: Share pop
 */

  get_header(); 

  // $post_ids = array();

  	/*
  	 * The WordPress Query class.
  	 *
  	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
  	 */
  	$args = array(
  		'post_type'      => array('shareables'),  
      'order_by' => 'rand',
  		'post_status'    => 'publish',
  		'posts_per_page' => -1,
      

  	);
  
  $share = new WP_Query( $args );

  
    // $post_ids[] = $post->ID;
  
  
  ?>
	<div class="container">
		<div class="row">
			<?php echo do_shortcode('[ajax_load_more id="4349616249" repeater="template_1" post_in"'.implode(',', $post_ids) . '" orderby="post__in" posts_per_page="9" image_loaded="true" button_label="more sharables" button_loading_label="loading sharables"') ?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 

  


?>