<!-- contain the main content of the page -->
<div id="content">
  <article class="post">
   <?php echo the_content( ); ?>
  </article>
  <?php 
    // call the cta message
    $cta_message = get_field('cta_message'); 
    // is there a cta message
    if ( !empty($cta_message) ) : 
      // call the style choice
      if ( get_field('style_choice') == 'Green') : 

          $color_class = 'text-success';

      else : 

          $color_class = 'text-warning';

      endif;

   ?>
  <h1 class="<?php echo $color_class; ?>"><?php echo $cta_message; ?></h1>               
  <?php 
    // close out the cta test
    endif; 
    // call the book sider
    get_template_part('partials/main/book', 'slider' );

    $lead_mag = get_field('code_block');

    if ( !empty($lead_mag) ) :

      echo $lead_mag;

    endif;

    ?>
</div>