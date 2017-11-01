<?php 
  
  if (have_posts()) :
    while (have_posts()) :
      the_post();

 ?>
<div class="inner">
  <?php 

   //bkg image
    $lft_img      = get_field('custom_header_banner_lft');
    $rgt_img      = get_field('custom_header_banner_rt');
    // standard banner images
    $def_lft_img = get_field('page_header_banner_left', 'options');
    $def_rgt_img = get_field('page_header_banner_right', 'options');

    if (!empty($lft_img)) :

      $bkg_class = 'background-image: url('.$lft_img['url'].')';

    else :

      $bkg_class = 'background-image: url('.$def_lft_img['url'].')';      

    endif;

    if (!empty($rgt_img)) :

      $bkg_class_two = 'background-image: url('.$rgt_img['url'].')';

    else :

      $bkg_class_two = 'background-image: url('.$def_rgt_img['url'].')';

    endif;

   ?>
  <div class="heading" style="<?php echo $bkg_class; ?>">
    <div class="container">
      <div class="heading-holder">
        <div class="heading-content">
        <?php 

          $custom_title = get_field('custom_title');
          $title = get_the_title( );

          if (!empty($custom_title)) :

            echo '<h1>'.$custom_title.'</h1>';

          else : 

            echo '<h1>'.$title.'</h1>'; 

          endif;

         ?>
          <div class="bg-extra" style="<?php echo $bkg_class_two; ?>"></div>
        </div>
      </div>
    </div> 
  </div>
  <div class="container">
    <div class="row">
      <div class="post">
        <?php the_content( ); ?>
      </div>
    </div>
  </div>
</div>
<?php 
  
  endwhile;
endif;

 ?>