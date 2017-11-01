
<!-- header of the page -->
<div class="header-area">
  <div class="bg-stretch">
  <?php 

    $tmp_img      = get_field('header_image');
    $page_hdr_img = $tmp_img['url'];
    $page_id = get_the_id();
    $book_cover = get_field('book_jacket__cover', $page_id);
    $logo_pre = get_field('main_logo', 'options');
    $main_logo = $logo_pre['url'];
    $hdr_img = get_field('header_image', 'options');
    $fp_hdr_img = $hdr_img['url'];
    

    if ( is_front_page() ) : 

   ?>

    <span data-srcset="<?php echo $fp_hdr_img; ?>, <?php echo $fp_hdr_img; ?> 2x, <?php echo $fp_hdr_img; ?> 3x"></span>
    <span data-srcset="<?php echo $fp_hdr_img; ?>, <?php echo $fp_hdr_img; ?> 2x, <?php echo $fp_hdr_img; ?> 3x" data-media="(min-width: 768px)"></span>
    <span data-srcset="<?php echo $fp_hdr_img; ?>, <?php echo $fp_hdr_img; ?> 2x, <?php echo $fp_hdr_img; ?> 3x" data-media="(min-width: 1024px)"></span>

  <?php elseif ( is_singular('books' ) ) : ?>
    
    <span data-srcset="https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg, https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg 2x, https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg 3x"></span>
    <span data-srcset="https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg, https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg 2x, https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg 3x" data-media="(min-width: 768px)"></span>
    <span data-srcset="https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg, https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg 2x, https://www.lucidbooks.net/wp-content/uploads/2016/11/lucid-header-8.jpg 3x" data-media="(min-width: 1024px)"></span>


	<?php elseif ( is_singular('post')  ) : 

		$tmp_img      = get_field('header_image', 9);
    
    $page_hdr_img = $tmp_img['url'];

	?>

    <span data-srcset="<?php echo $page_hdr_img; ?>, <?php echo $page_hdr_img; ?> 2x, <?php echo $page_hdr_img; ?> 3x"></span>
    <span data-srcset="<?php echo $page_hdr_img; ?>, <?php echo $page_hdr_img; ?> 2x, <?php echo $page_hdr_img; ?> 3x" data-media="(min-width: 768px)"></span>
    <span data-srcset="<?php echo $page_hdr_img; ?>, <?php echo $page_hdr_img; ?> 2x, <?php echo $page_hdr_img; ?> 3x" data-media="(min-width: 1024px)"></span>

  <?php 

    elseif (is_page( )) : 

      $pre_img = get_field('header_image', $pg_id );

      $pg_img  = $pre_img['url'];

   ?>

    <span data-srcset="<?php echo $pg_img; ?>, <?php echo $pg_img; ?> 2x, <?php echo $pg_img; ?> 3x"></span>
    <span data-srcset="<?php echo $pg_img; ?>, <?php echo $pg_img; ?> 2x, <?php echo $pg_img; ?> 3x" data-media="(min-width: 768px)"></span>
    <span data-srcset="<?php echo $pg_img; ?>, <?php echo $pg_img; ?> 2x, <?php echo $pg_img; ?> 3x" data-media="(min-width: 1024px)"></span>

  <?php endif; ?>
    
  </div>
  <header id="header">
    <div class="container">
      <!-- page logo -->
      <div class="logo">
        <a href="<?php bloginfo( 'url' ); ?>">
          <?php if ( !empty($main_logo) ) : ?>
            <img src="<?php echo $main_logo; ?>" alt="<?php echo $logo_pre['title'] ?>">
          <?php else : ?>
            <img src="<?php bloginfo('template_directory' ); ?>/images/lucid-logo-white.svg" alt="LUCIDBOOKS">
          <?php endif; ?>
        </a>
      </div>
      <!-- main navigation of the page -->
      <nav class="navbar navbar-default" id="nav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
                  wp_nav_menu( array(
                      'menu'              => 'menu',
                      'container'         => '',
                      'theme_location'    => 'main-nav',
                      'depth'             => 2,
                      'menu_class'        => 'nav navbar-nav',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'walker'            => new wp_bootstrap_navwalker())
                  );
                ?>
          <a href="<?php bloginfo('url' ); ?>/get-started/" class="green-copy btn btn-default">get started</a>
        </div>
      </nav>
    </div>
  </header>
  <?php 

    if ( is_front_page() ) :

      get_template_part('partials/main/main', 'banner' );

    elseif ( is_singular('books' ) ) :

      get_template_part('partials/main/sngl', 'banner' );

    elseif ( is_page_template('template-books.php' ) ) :

      get_template_part('partials/main/books', 'banner' ); 

    elseif ( is_page_template('template-blog.php' ) || is_single() ) :

      get_template_part('partials/main/blog', 'banner' );

    elseif ( is_search() ) :

      get_template_part('partials/main/search', 'banner' );        

    else : 

      get_template_part('partials/main/page', 'banner' );

    endif;

   ?>
</div>