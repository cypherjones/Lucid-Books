<?php 
  
  // social vars
  $facebook   = get_field('facebook', 'options');
  $twitter    = get_field('twitter', 'options');
  $instagram  = get_field('instagram', 'options');
  $pinterest  = get_field('pinterest', 'options');
  $linkedin   = get_field('linkedin', 'options');

 ?>
<ul class="social-networks">
  <li><a href="<?php echo $facebook; ?>" target="_blank"><span class="icon-facebook"></span></a></li>
  <li><a href="<?php echo $twitter; ?>" target="_blank"><span class="icon-twitter"></span></a></li>
  <li><a href="<?php echo $instagram; ?>" target="_blank"><span class="icon-instagram"></span></a></li>
  <li><a href="<?php echo $pinterest; ?>" target="_blank"><span class="icon-pinterest"></span></a></li>
  <li><a href="<?php echo $linkedin; ?>" target="_blank"><span class="icon-linkedin"></span></a></li>
</ul>