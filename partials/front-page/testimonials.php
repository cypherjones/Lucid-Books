<?php 

  // testimony vars

  $test_hdr = get_field('testimonials_header', 'options');
  $test_tag = get_field('testimonials_tag_line', 'options');

 ?>
<section class="testimonial">
  <div class="container">
    <header class="heading">
      <h2><?php echo $test_hdr; ?></h2>
      <em class="slogan text-warning"><?php echo $test_tag; ?></em>
    </header>
  </div>
  <div class="testimonial-gallery">
    <div class="testimonial-lists">
    <?php 
      // the repeater
      if ( have_rows('testimonials', 'options') ) : while ( have_rows('testimonials', 'options') ) : the_row();
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
            <strong class="name"><a href="#"><?php echo $author; ?></a></strong>
            <p class="<?php echo $a_class; ?>"><?php echo $company; ?></p>
          </cite>
        </div> 
      </blockquote>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>