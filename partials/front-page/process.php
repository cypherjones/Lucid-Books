<?php 
  
  // process vars
  $pro_hdr = get_field('process_header', 'options');
  $pro_tag = get_field('process_tag_line', 'options');

 ?>
<section class="process">
    <div class="container">
      <header class="heading">
        <h2><?php echo $pro_hdr; ?></h2>
        <em class="slogan text-success"><?php echo $pro_tag; ?></em>
      </header>
    </div>
    <div class="process-list">
    <?php 
      // run the loop
      if ( have_rows('process_panels', 'options') ) : while ( have_rows('process_panels','options') ) : the_row(); 
      // loop vars
      $img = get_sub_field('image');
      $pro_image = $img['url'];
      $pro_desc = get_sub_field('description');
      $pro_hdr  = get_sub_field('header');
     ?>
      <article class="process-block">
        <div class="image-holder">
          <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source data-srcset="<?php echo $pro_image; ?>, <<?php echo $pro_image; ?> 2x, <?php echo $pro_image; ?> 3x" media="(max-width: 767px)"/>
            <source data-srcset="<?php echo $pro_image; ?>" media="(max-width: 1024px)"/>
            <source data-srcset="<?php echo $pro_image; ?>, <?php echo $pro_image; ?> 2x"/>
            <!--[if IE 9]></video><![endif]-->
            <img src="<?php echo $pro_image; ?>" alt="image description" width="596" height="499">
          </picture>
        </div>
        <div class="process-description">
          <div class="process-header">
            <?php echo $pro_hdr; ?>
          </div>
          <div class="process-holder">
            <p><?php echo $pro_desc; ?></p>
          </div>
        </div>
      </article>
    <?php endwhile; endif; ?>
    </div>
  </section>