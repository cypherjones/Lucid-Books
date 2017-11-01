<?php 
  // call the customary header
  get_header( );

  echo '<main id="main" role="main">';

  // call the features block 

    get_template_part('partials/front-page/features');

  // call the features block 

    get_template_part('partials/front-page/process' );

  // call the newsletter

    get_template_part('partials/front-page/newsletter' );

  // call the books slider block

    get_template_part('partials/front-page/book', 'slider' );

  // call the books slider block

    get_template_part('partials/front-page/testimonials');  

   echo '</main>';
   
  // call the customary footer
  get_footer( ); 

?>