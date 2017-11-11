<?php
/**
 * Template Name: Share
 */

  get_header(); 

  //get the page wrapper
  if ( have_posts() ) : while ( have_posts() ) : the_post();

  $page_id = get_the_id();

  ?>
<!-- contain main informative part of the site -->
  <main id="main" role="main">
    <div id="twocolumns">
      <!-- <div class="container"> -->
            <?php

            if ( get_field('flex_con') ) :

                // check if the flexible content field has rows of data
                if( have_rows('multi_space_content') ):

                     // loop through the rows of data
                    while ( have_rows('multi_space_content') ) : the_row();



                        if( get_row_layout() == 'solid_divider' ):

                          $color  = get_sub_field('color');
                          $height = get_sub_field('height');

                          echo '<section class="solid-divider" style="height:'.$height.'px; background-color:'.$color.'"></section>';

                        endif;

                        if( get_row_layout() == 'column_blocks' ):

                            $colCount = get_sub_field('columns');
                            $col1     = get_sub_field('column_1');
                            $col2     = get_sub_field('column_2'); 

                           if ($colCount == 1 ) : 

                              echo  '<div class="container">'.  
                                      '<div class="row">' .
                                        '<div class="col-md-12">' .
                                          '<div id="content">'.$col1.'</div>' .
                                        '</div>'.
                                      '</div>'. 
                                    '</div>';

                            elseif ($colCount == 2) : 

                              echo '<div class="container">'.
                                      '<div class="row">';

                                echo '<div class="col-md-6">'.
                                        '<div id="content">'.
                                          '<article>'.$col1.'</article>'.
                                        '</div>'.
                                      '</div>';

                                echo '<div class="col-md-6">'.
                                        '<div id="content">'.
                                          '<article>'.$col2.'</article>'.
                                        '</div>'.
                                      '</div>';

                               echo   '</div>'.     
                                    '</div>';
                             endif; 

                        endif;

                        if ( get_row_layout() == 'roll_over_content' ) : 


                          echo '<div class="container">' .
                                  '<div class="row">';
                          
                          // call the repeater loop
                          if ( have_rows('roll_content') ) : while ( have_rows('roll_content') ) : the_row('roll_content');
                          // rollover vars
                          $roll_title   = get_sub_field('title');
                          $roll_pre_img = get_sub_field('background_image');
                          $roll_bkg     = $roll_pre_img['url'];
                          $roll_desc    = get_sub_field('description');
                          $roll_cta_txt = get_sub_field('cta_text');
                          $roll_cta_url = get_sub_field('cta_url');

                        ?>
                        
                            <div class="col-md-6 col-md-3 col-sm-6 col-xs-12">
                              <div class="feature-block">
                                <div class="bg-stretch">
                                  <span data-srcset="<?php echo $roll_bkg; ?>, <?php echo $roll_bkg; ?> 2x, <?php echo $roll_bkg; ?> 3x"></span>
                                  <span data-srcset="<?php echo $roll_bkg; ?>, <?php echo $roll_bkg; ?> 2x, <?php echo $roll_bkg; ?> 3x" data-media="(min-width: 768px)"></span>
                                  <span data-srcset="<?php echo $roll_bkg; ?>, <?php echo $roll_bkg; ?> 2x, <?php echo $roll_bkg; ?> 3x" data-media="(min-width: 1024px)"></span>
                                </div>
                                <div class="feature-wrap">
                                  <h2><?php echo $roll_title; ?></h2>
                                  <div class="feature-holder">
                                    <div class="feature-text">
                                      <?php echo $roll_desc; ?>
                                      <a href="<?php echo $roll_cta_url; ?>" class="btn btn-success btn-lg"><?php echo $roll_cta_txt; ?></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          

                  <?php   

                  // close out repeater loop
                          endwhile; endif;
                          // close out container and row
                          echo '</div>' .
                              '</div>';
                        // close layout call
                        endif;

                        if ( get_row_layout() == 'testimonial_slider' ) :

                          ?>
                        <section class="testimonials">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="testimonial-gallery">
                                  <div class="testimonial-lists-plain">
                                  <?php 
                                    // the repeater
                                    if ( have_rows('testimonials') ) : while ( have_rows('testimonials') ) : the_row();
                                    // repeater vars
                                    $testimony   = get_sub_field('testimony');
                                    $image       = get_sub_field('testimony_image');
                                    $author      = get_sub_field('author');
                                    $company     = get_sub_field('company');
                                    $style_field = get_sub_field('style');

                                    if ( $style_field == 'Plain') :

                                      $a_class = "company default";

                                    elseif ( $style_field == 'Fancy' ) :

                                      $a_class = 'company';

                                    endif; 
                                    // final image
                                    $testimony_image = $image['url'];

                                   ?>
                                    <blockquote class="testimonial-block">
                                      <div class="testimonial-holder">
                                        <q><?php echo $testimony; ?></q>
                                        <cite>
                                          <span class="image-holder">
                                            <picture>
                                              <!--[if IE 9]><video style="display: none;"><![endif]-->
                                              <source srcset="<?php echo $testimony_image; ?>, <?php echo $testimony_image; ?> 2x, <?php echo $testimony_image; ?> 3x" media="(max-width: 767px)"/>
                                              <source srcset="<?php echo $testimony_image; ?>" media="(max-width: 1024px)"/>
                                              <source srcset="<?php echo $testimony_image; ?>, <?php echo $testimony_image; ?> 2x"/>
                                              <!--[if IE 9]></video><![endif]-->
                                              <img src="<?php echo $testimony_image; ?>" alt="image description" width="81" height="81">
                                            </picture>
                                          </span>
                                          <strong class="name"><?php echo $author; ?></strong></br>
                                          <em class="<?php echo $a_class; ?> company"><?php echo $company; ?></em>
                                        </cite>
                                      </div> 
                                    </blockquote>
                                    <?php endwhile; endif; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                        </section>

                  <?php if ( get_row_layout() == 'share') : ?>

                    <section>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="share-container">
                              foo
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>

                  <?php       

                        endif;

                    endwhile;

                endif;

            else : 

                 get_template_part('partials/content/page', 'inner' );

            endif;

            $more = get_field('more_choices');

            if ( !empty($more) ) :

              echo '<div class="container">' .
                      '<div class="row">';
                        // call the cta message
                        $cta_message = get_field('cta_message', $page_id); 
                        // is there a cta message
                        if ( !empty($cta_message) ) : 
                          // call the style choice and 
                          // get the vars
                          $color_style = get_field('style_choice');

                          if ( !empty($color_style) ) : 

                              $color_class = 'text-success';

                          else : 

                              $color_class = 'text-warning';

                          endif;

                          if ( is_page( 'children' ) ) :

                            $page_class = 'children';

                          endif;
                          // BRING BACK ONCE WE HAVE VARS AVAILABLE

                          //echo '<h1 class="'.$color_class.' '.$page_class.' center-title">'.$cta_message.'</h1> ';
                          echo '<h1 class="text-success center-title">More Lucid Titles</h1> ';

                        // close out the cta test
                        endif; 
                     
                    // call the book sider
                    get_template_part('partials/main/book', 'slider' );

              echo    '</div>' .
                    '</div>';

              // close check list test
            endif;

            if ( !empty($add_code_block) ) : 

              echo '<div class="container">' .
                      '<div class="row">'; 

                  $lead_mag = get_field('code_block');

                  if ( !empty($lead_mag) ) :

                    echo $lead_mag;

                  endif;


              echo    '</div>' .
                    '</div>';

            endif;         

              ?>

      
      </div>
    </div>
  </main>
  <?php

  endwhile; endif;
  
  // get the footer
  get_footer(); 

 ?>