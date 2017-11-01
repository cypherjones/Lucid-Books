<?php 
  
  $page_id = get_the_id();

  $hdr_txt = get_field('header_text', $page_id);
  $hdr_tag = get_field('header_tag',$page_id);

 ?>
<div class="banner">
  <div class="banner-caption">
    <div class="container">
      <h1><?php echo $hdr_txt; ?></h1>
      <p><?php echo $hdr_tag; ?></p>
    </div>
  </div>
</div>