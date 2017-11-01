<!-- main page banner -->
<div class="jumbotron">
  <div class="jumbotron-caption">
    <div class="container">
      <?php 

        $hdr_hi_txt = get_field('highlighted_text', 'options');
        $hdr_top_ln = get_field('top_line','options');
        $hdr_btm_ln = get_field('bottom_line','options');
        $hdr_tag_ln = get_field('tag_line','options');

       ?>
      <h1><?php echo $hdr_hi_txt; ?> <?php echo $hdr_top_ln; ?> <br class="hidden-xs"><?php echo $hdr_btm_ln; ?></h1>
      <p><?php echo $hdr_tag_ln; ?></p>
    </div>
  </div>
</div>