  <?php 

    // address vars
    $addy       = get_field('address', 'options');
    $phone      = get_field('phone_number', 'options');
    $phone_alt  = get_field('alt_phone_number', 'options');
    $email      = get_field('email', 'options');
    $logo_pre = get_field('main_logo', 'options');
    $main_logo = $logo_pre['url'];

    // footer vars
    $ft_hdr = get_field('footer_header', 'options');
    $ft_tag = get_field('footer_tag_line', 'options');   
    $ft_pre_img = get_field('footer_form_image', 'options');
    $ft_img = $ft_pre_img['url'];

   ?>
 <!-- footer of the page -->
    <div class="footer-area">
      <?php if (is_page('get-started' ))?>

      <?php 

        elseif (is_single(390)) :

          get_template_part('partials/front-page/newsletter' );

      ?>
      <?php else : ?>
          <aside class="footer-banner">
            <div class="bg-stretch">
              <span data-srcset="<?php bloginfo( 'template_directory' ); ?>/images/img20.jpg, <?php bloginfo( 'template_directory' ); ?>/images/img20.jpg 2x, <?php bloginfo( 'template_directory' ); ?>/images/img20.jpg 3x"></span>
              <span data-srcset="<?php bloginfo('template_directory' ); ?>/images/img20.jpg, <?php bloginfo( 'template_directory' ); ?>/images/img20.jpg 2x, <?php bloginfo( 'template_directory' ); ?>/images/img20.jpg 3x" data-media="(min-width: 768px)"></span>
              <span data-srcset="<?php bloginfo('template_directory' ); ?>/images/img20.jpg, <?php bloginfo( 'template_directory' ); ?>/images/img20.jpg 2x, <?php bloginfo( 'template_directory' ); ?>/images/img20.jpg 3x" data-media="(min-width: 1024px)"></span>
            </div>
            <div class="footer-holder">
              <div class="container">
                <h2><?php echo $ft_hdr; ?></h2>
                <em class="slogan"><?php echo $ft_tag; ?></em>
                <div class="footer-form-holder">
                  <div class="book-box">
                    <img src="<?php echo $ft_img; ?>" alt="">
                  </div>
                  <div class="form">
                    <?php echo do_shortcode(' [gravityform id="4" title="false" description="false" ajax="true"]' ); ?>
                  </div>
                </div>
                <?php get_template_part('partials/main/social' ); ?>
              </div>
            </div>
          </aside>

      <?php endif; ?>
      <footer id="footer">
        <div class="container">
          <div class="logo">
            <a href="<?php bloginfo( 'url' ); ?>">
              <?php if ( !empty($main_logo) ) : ?>
                <img src="<?php echo $main_logo; ?>" alt="<?php echo $logo_pre['title'] ?>">
              <?php else : ?>
                <img src="<?php bloginfo('template_directory' ); ?>/images/lucid-logo-white.svg" alt="LUCIDBOOKS">
              <?php endif; ?>
            </a>
          </div>
             <?php 
               /**
              * Displays a navigation menu
              * @param array $args Arguments
              */
              $args = array(
                'theme_location' => 'footer-nav',
                'menu' => 'footer',
                'container' => '',
                'container_class' => '',
                'menu_class' => 'footer-nav',
                'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
              );
            
              wp_nav_menu( $args );
           ?>
          <?php get_template_part('partials/main/social' ); ?>
        </div>
      </footer>
    </div>
  </div>