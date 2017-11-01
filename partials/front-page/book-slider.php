<section class="book">
  <div class="container">
    <h2 class="text-success text-center"><em>New Releases</em></h2>
    <div class="book-gallery">
      <div class="book-list">
      <?php

          /**
            * The WordPress Query class.
            * @link http://codex.wordpress.org/Function_Reference/WP_Query
            *
            */
           $args = array(
              
             
             //Type & Status Parameters
             'post_type'   => 'any',
             'post_status' => 'any',
             'post_type' => 'books',               
             'post_status' => 'publish',
             'order'               => 'DESC',
             'orderby'             => 'date',
             'posts_per_page'         => 10,
         );
         $books = new WP_Query( $args );


         if ( $books->have_posts() ) : while ( $books->have_posts() ) : $books->the_post();

         $pre_img = get_field('book_jacket__cover');
         $bk_cover = $pre_img['url'];
        

       ?>
        <a href="<?php echo the_permalink(); ?>" class="book-slide">
          <?php if ( !is_mobile() || !is_iphone()) : ?>
          <picture class="slide">
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source class="clog" srcset="<?php echo $bk_cover; ?>, <?php echo $bk_cover; ?> 2x, <?php echo $bk_cover; ?> 3x" media="(max-width: 767px)"/>
            <source class="clog" srcset="<?php echo $bk_cover; ?>" media="(max-width: 1024px)"/>
            <source class="clog" srcset="<?php echo $bk_cover; ?>, <?php echo $bk_cover; ?> 2x"/>
            <!--[if IE 9]></video><![endif]-->
            <img class="clog" src="<?php echo $bk_cover; ?>" alt="image description" width="175" height="265">
          </picture>
        <?php else:  ?>
          <div class="slide">
            <img class="clog" src="<?php echo $bk_cover; ?>" alt="image description" width="175" height="265">
          </div>
        <?php endif; ?>
        </a>

      <?php endwhile; endif;  ?>
      </div>
    </div>
  </div>
</section>