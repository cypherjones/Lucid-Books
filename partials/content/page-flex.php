<?php 
  
  // check if the flexible content field has rows of data
  if( have_rows('multi_space_content') ):

       // loop through the rows of data
      while ( have_rows('multi_space_content') ) : the_row();

          if( get_row_layout() == 'column_blocks' ):

              $colCount = get_sub_field('columns');
              $col1     = get_sub_field('column_1');
              $col2     = get_sub_field('column_2');
      
              if ($colCount == 1 ) : 

                echo '<div class="col-md-12"><div id="content">'.$col1.'</div></div>';

              elseif ($colCount == 2) : 

                echo '<div class="col-md-6"><div id="content"><article>'.$col1.'</article></div></div>';

                echo '<div class="col-md-6"><div id="content"><article>'.$col2.'</article></div></div>';

              endif;

          endif;

      endwhile;

  endif;

 ?>