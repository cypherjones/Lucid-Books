<?php 
  // get the main logo
  $main_logo = get_field('main_logo', 'options');
  // general blog info
  $blog_name = get_bloginfo('name' );
  $blog_link = get_bloginfo('url' );
  // check for the main logo and call it
  if (!empty($main_logo)) :
    // run the HTML for the main logo
    echo '<div class="logo">'.
            '<a class="navbar-brand" href="'.$blog_link.'">';
              
              if (is_front_page() || is_page('about-us' ) || is_page('contact-us' ) || is_page('resources' ) ) :
              
                echo '<img src="'.$main_logo['url'].'" alt="'.$blog_name.'">';

              else :
               
                echo '<img src="http://carswellreal.wpengine.com/wp-content/uploads/2016/10/carswell-logo.png" alt="'.$blog_name.'">';

              endif; 
    echo     '</a>'.
          '</div>';
  // close out the if for the
  // main logo section       
  endif;

 ?>