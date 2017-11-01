<?php 

  $book_cover = get_field('book_jacket__cover');
  $book_syn   = get_field('book_synopsis');
  $book_auth  = get_field('author');
  $buy = get_field('purchase_link'); 

 ?>
<!-- contain the main content of the page -->
<div id="content">
  <article class="post">
      <div class="row">
        <div class="col-md-12">
          <div class="big-book-box">
            <div class="book-cover">
              <img src="<?php echo $book_cover['url'] ?>" alt="<?php echo $book_cover['title']; ?>">
            </div>
          </div>
          <div class="big-book-title">
            <h2><?php the_title( ); ?></h2>
          </div>
          <div class="big-book-author">
            <h3>by <?php echo $book_auth; ?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="book-synposis">
            <?php echo $book_syn; ?>
          </div>
          <div class="book-buy">
            <a href="<?php echo $buy; ?>" class="btn btn-success btn-lg book-btn" target="_blank">
              Buy Now
            </a>
          </div>
        </div>
      </div>
  </article>
  <?php 

    // message checkbox
    // if ( get_field('more_choices') == 'yes' ) :
      // call the cta message
      $cta_message = get_field('cta_message'); 
      // is there a cta message
      if ( !empty($cta_message) ) : 
        // call the style choice
        if ( get_field('style_choice') == 'Green') : 

            $color_class = 'text-success';

        else : 

            $color_class = 'text-warning';
        // close out style choice
        endif;
   ?>
  <!-- <h1 class="<?php echo $color_class; ?> center-title">More titles</h1>  -->
  <h1 class="center-title">More titles</h1>                             
  <?php 
      // close out the cta test
      endif; 
      // close out message checkbox
    // endif;

    // call the book sider
    get_template_part('partials/main/book', 'slider' );

    $lead_mag = get_field('code_block');

    if ( !empty($lead_mag) ) :

      echo $lead_mag;

    endif;

    ?>
</div>