<?php 
  
  get_header(); 

  if ( have_posts()) : while (have_posts()) : the_post(); 

  $get_cat = get_the_category( );
  $cat_one = $get_cat[0];
  $cat = $cat_one->name;
  $cat_more = $get_cat[1];
  $cat_two = $cat_more->name;
  
 ?>
  <main id="main" role="main">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div id="content">
            <article class="post">
              <h2 class="title"><?php the_title( ); ?></h2>
              <ul class="post-meta">
                <li><time><?php the_date( ); ?></time></li>
                <li><a href="#" class="author"><?php the_author( ); ?></a></li>
                <!-- <li><a href="#"><span class="icon-chat"></span> Comments (26)</a></li> -->
              </ul>
              <?php if ( has_post_thumbnail( ) ) : ?>
                <div class="image-holder">
                  <picture>
                    <img src="<?php the_post_thumbnail_url( 'full' );  ?>" alt=" ">
                  </picture>
                </div>
              <?php endif; ?>
              <?php the_content( ); ?>
            </article>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <!-- contain sidebar of the page -->
          <?php dynamic_sidebar('post-sidebar' ); ?>
        </div>
      </div>
    </div> 
  </main>
<?php 
    
  endwhile; endif;
  get_footer(); 

 ?>