<div class="feature-list">
<?php 
  
  if ( have_rows('columns', 'options') ) : while ( have_rows('columns', 'options') ) : the_row();

  // column vars
  $col_title   = get_sub_field('title');
  $bkg_img     = get_sub_field('background_image');
  $rll_ovr_con = get_sub_field('roll_over_content');
  $cta_pg_lnk  = get_sub_field('cta_page_link');
  $cta_lnk_con = get_sub_field('cta_link_content');

 ?>
    <div class="col-sm-6 col-md-3">
      <div class="feature-block" aria-haspopup="true">
        <div class="bg-stretch">
          <span data-srcset="<?php echo $bkg_img['url']; ?>, <?php echo $bkg_img['url'];?> 2x, <?php echo $bkg_img['url'];?> 3x"></span>
          <span data-srcset="<?php echo $bkg_img['url'];?>, <?php echo $bkg_img['url'];?> 2x, <?php echo $bkg_img['url'];?> 3x" data-media="(min-width: 768px)"></span>
          <span data-srcset="<?php echo $bkg_img['url'];?>, <?php echo $bkg_img['url'];?> 2x, <?php echo $bkg_img['url'];?> 3x" data-media="(min-width: 1024px)"></span>
        </div>
        <div class="feature-wrap">
          <h2><?php echo $col_title;?></h2>
          <div class="feature-holder">
            <div class="feature-text">
              <?php echo $rll_ovr_con;?>
              <a href="<?php echo $cta_pg_lnk;?>" class="btn btn-success btn-lg"><?php echo $cta_lnk_con;?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>
  </div>