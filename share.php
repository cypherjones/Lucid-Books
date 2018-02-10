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
				  $link = get_the_permalink( );
				  $s_title = get_the_title();
				  $foo = 'bar';

				  ?>

				  <div class="col-md-4">
				  	<a class="popup" href="<?php echo $link; ?>">
				  		<img src="<?php echo $featured_img; ?>" alt="">
				  	</a>
				  	<div class="share-me">
				  		<div class="pop-share">
				  			<?php 
				  			// share plugin
				  			$twitter = 'https://twitter.com/intent/tweet?text='.$s_title.'&amp;url='.$link.'&amp;via='.$foo;
				  			$twitterURL = '<a class="twitter-share" href="'. $twitter .'" target="_blank">Twitter</a>';
				  			echo $twitterURL;
				  		 ?>
				  		</div>
				  	</div>
				  </div>

			<?php endwhile; endif; ?>
		</div>
	</div>
 
	<?php

  // get the footer
  get_footer(); 

?>