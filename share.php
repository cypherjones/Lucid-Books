<?php
/**
 * Template Name: Share pop
 */

  get_header(); 

  $post_ids = array();

  	/*
  	 * The WordPress Query class.
  	 *
  	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
  	 */
  	$args = array(
  		'post_type'  => array('sharables'),  
      'order_by'   => 'rand',
  		'post_status'    => 'publish',
  		'posts_per_page' => -1,
      'ignore_sticky_posts' => true,
      

  	);
  
  $share = new WP_Query( $args );

  while ( $share->have_posts() ) : $share->the_post();
    $post_ids[] = $post->ID;
  endwhile; wp_reset_query();
  
  ?>
	<div class="container">
		<div class="row">
			<?php echo do_shortcode('[ajax_load_more post_type="shareables" repeater="template_1" post__in="'.implode(',', $post_ids) . '" orderby="post__in" posts_per_page="9" image_loaded="true" button_label="more sharables" button_loading_label="loading sharables"]'); ?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 

  


?>