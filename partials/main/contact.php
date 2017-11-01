<?php 
  
  // address vars
    $addy       = get_field('address', 'options');
    $phone      = get_field('phone_number', 'options');
    $phone_alt  = get_field('alt_phone_number', 'options');
    $email      = get_field('email', 'options');
 ?>
<section class="contact">
  <div class="bg-stretch" style="background-image: url(<?php bloginfo('template_directory' ); ?>/images/img10.jpg);"></div>
  <div class="container">
    <div class="contact-block">
      <h1 class="contact-heading">contact</h1>
      <address><span class="icon-pin"></span> <?php echo $addy; ?></address>
      <em class="phone">
        <span class="icon-phone"></span>
        <a href="tel:214-747-6839"><?php echo $phone; ?></a><br>
        <a href="tel:214-747-8194"><?php echo $phone_alt; ?></a>
      </em>
      <a href="mailto:<?php echo $email; ?>"><span class="icon-card"></span><?php echo $email; ?></a>
    </div>
  </div>
</section>