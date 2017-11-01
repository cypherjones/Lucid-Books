<?php 
    
  $newsletter_title = get_field('newsletter_title', 'options');
  $newsletter_tag = get_field('newsletter_tag_line', 'options');
  $org_form      = get_field('newsletter_form', 'options');
  $pre_newsletter_img = get_field('newsletter_img', 'options');
  $newsletter_img = $pre_newsletter_img['url'];
 ?>
<div class="newsletter cta">
  <div class="">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="image-holder">
          <img src="<?php echo $newsletter_img; ?>" alt="">
        </div>
        <strong class="title"><?php echo $newsletter_title; ?></strong>
        <strong class="tag"><?php echo $newsletter_tag; ?></strong>
      </div>
      <div class="col-md-5 col-sm-6 col-xs-12 ">
        <!-- subscribe form -->
        <?php echo do_shortcode('[gravityform id="'.$org_form.'" title="false" description="false" ajax="true"]' ); ?>
      </div>
    </div>
  </div>
 <!--  <form action="#" class="newsletter-form">
    <div class="input-group">
      <input type="text" class="form-control input-lg" placeholder="Your Email">
      <span class="input-group-btn">
        <button class="btn btn-success btn-lg" type="submit">send it to me</button>
      </span>
    </div>
  </form> -->
</div>