<?php 
  
  $post_id = get_the_id();
  $book_cover_pre = get_field('book_jacket__cover', $post_id);
  $book_cover = $book_cover_pre['url'];
  $p_type = get_post_type( get_the_ID() );

 ?>

<div class="col-md-6 col-sm-12">
  <div id="content">
  <!-- search result     -->
    <article <?php post_class('searched-post'); ?>>
      <?php if ( has_post_thumbnail(  ) ) : ?>   
        <div class="featured-img">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php elseif ( in_array( 'books', $classes ) ) : ?>
        <div class="book-jacket">
          <img src="<?php echo $book_cover; ?>" alt="">
        </div>
      <?php endif; ?>
      <div class="content">
        <div class="title">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
        </div>
        <div class="the_excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>
      <a class="btn btn-success" href="<?php the_permalink();?>">Read More</a>
    </article>
  </div>
</div>
