<?php

// Theme Options

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Front Page Settings',
    'menu_title'  => 'Front Page',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}
add_filter( 'gform_confirmation_anchor', '__return_true' );



// Button shortcode

  //= Button
  function button( $atts, $content = null ) {
    extract(shortcode_atts(array(
      "url" => '',
      "align" => '',
      "size" => '',
    ), $atts));
      
    $output = '<div class="button-link '. $align .' '. $size . '"><a href="'.$url.'">' . do_shortcode($content) .'</a></div>';
    
    return $output;
    
    //remove_filter( 'the_content', 'wpautop' );
  }

  add_shortcode( 'button', 'button' );

// Register CSS 

  function theme_name_scripts() {
  	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' ); 
  }

  add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


function custom_css() {
  $here = get_template_directory_uri();
  wp_enqueue_style( 'beefy', $here . "/css/beefy.css",array(), 'all');
  wp_enqueue_style('beefy');
}

add_action( 'wp_enqueue_scripts', 'custom_css');

// Register Custom Navigation Walker 

  require_once ('wp_bootstrap_navwalker.php');


// Remove that awkward admin bar 

  function my_filter_head() { remove_action('wp_head', '_admin_bar_bump_cb'); }
  add_action('get_header', 'my_filter_head');

  function my_function_admin_bar(){ return false; }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// This theme uses wp_nav_menu() in one location

	register_nav_menus( array(
    'main-nav'   => __( 'Main Nav', 'main-nav'),
    'footer-nav' => __( 'Footer Nav', 'footer-nav'),
    'left-nav'   => __('Left Nav', 'left-nav'),
    'right-nav'  => __('Right Nav', 'right-nav'),
    'mobile-nav' => __('Mobile Nav', 'mobile-nave'),
	) );

// Add active functionality to menu

  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
  function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active';
     }
     return $classes;
  }
  
//Page Slug Body Class

  function add_slug_body_class( $classes ) {
    global $post;
      if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }
      return $classes;
    }

    add_filter( 'body_class', 'add_slug_body_class' );

// More Excerpt Control

  function new_excerpt_more( $more ) {
  	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read more.', 'your-text-domain') . '</a>';
  }

  add_filter( 'excerpt_more', 'new_excerpt_more' );


// Excerpt Limit

  function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      //$excerpt = implode(" ",$excerpt).' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><span class="keep-reading">Keep Reading</span></a>';
     $excerpt = implode(" ",$excerpt).'...';    
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
  }

// Add Thumbnails to Posts

  add_theme_support('post-thumbnails', array( 'post', 'page', 'gallery', 'books' ) );
  
// Content Limit

  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
  }	

// Add page slug as nav IDs

  function nav_id_filter( $id, $item ) {
    return 'menu-item-'.sanitize_title_with_dashes($item->title);
  }

  add_filter( 'nav_menu_item_id', 'nav_id_filter', 10, 2 );


// Add Search Filter

  function SearchFilter($query) {
       if ($query->is_search) {
          $query->set('post_type', array('books'));
          $query->set( 'posts_per_page', '8' );
       }
       return $query;
  }
  add_filter('pre_get_posts','SearchFilter');

  add_theme_support( 'html5', array( 'search-form' ) );


// ******************** CUSTOM POST TYPES ************************
  
// function video_post_type() {
//       $labels = array(
//         'name'                => _x( 'Videos', 'Post Type General Name', 'encore' ),
//         'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'encore' ),
//         'menu_name'           => __( 'Videos', 'encore' ),
//         'parent_item_colon'   => __( 'Parent Videos:', 'encore' ),
//         'all_items'           => __( 'All Videos', 'encore' ),
//         'view_item'           => __( 'View Videos', 'encore' ),
//         'add_new_item'        => __( 'Add New Videos', 'encore' ),
//         'add_new'             => __( 'Add Videos', 'encore' ),
//         'edit_item'           => __( 'Edit Videos', 'encore' ),
//         'update_item'         => __( 'Update Videos', 'encore' ),
//         'search_items'        => __( 'Search Videos', 'encore' ),
//         'not_found'           => __( 'Not found', 'encore' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'encore' ),
//       );
//       $args = array(
//         'label'               => __( 'video', 'encore' ),
//         'description'         => __( 'Post Type Description', 'encore' ),
//         'labels'              => $labels,
//         'supports'            => array( 'title'),
//         'taxonomies'          => array( 'category', 'post_tag' ),
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 10,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
//         'rewrite'             => array('slug' => 'videos'),
//         'menu_icon'           => 'dashicons-video-alt2',
//       );
//       register_post_type( 'video', $args );
//     }
    
//   // Hook into the 'init' action
  
//     add_action( 'init', 'video_post_type', 0 );

    function books_post_type() {
      $labels = array(
        'name'                => _x( 'Books', 'Post Type General Name', 'lucid' ),
        'singular_name'       => _x( 'Books', 'Post Type Singular Name', 'lucid' ),
        'menu_name'           => __( 'Books', 'lazyj' ),
        'parent_item_colon'   => __( 'Parent Book:', 'lucid' ),
        'all_items'           => __( 'All Books', 'lucid' ),
        'view_item'           => __( 'View Books', 'lucid' ),
        'add_new_item'        => __( 'Add New Book', 'lucid' ),
        'add_new'             => __( 'Add Book', 'lucid' ),
        'edit_item'           => __( 'Edit Books', 'lucid' ),
        'update_item'         => __( 'Update Books', 'lucid' ),
        'search_items'        => __( 'Search Books', 'lucid' ),
        'not_found'           => __( 'Not found', 'lucid' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lucid' ),
      );
      $args = array(
        'label'               => __( 'books', 'lucid' ),
        'description'         => __( 'Post Type Description', 'lucid' ),
        'labels'              => $labels,
        'supports'            => array( 'title'),
        'taxonomies'          => array( 'category', 'post_tag', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 10,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'rewrite'             => array('slug' => 'our-books'),
        'menu_icon'           => 'dashicons-cart',
      );
      register_post_type( 'books', $args );
    }
  // Hook into the 'init' action
  
    add_action( 'init', 'books_post_type', 0 );  


// Add Sidebars

    function my_sidebar() {

    register_sidebar( array(
      'name' => __( 'Sidebar', 'tnq' ),
      'id' => 'top',
      'description' => __( '' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  add_action('widgets_init', 'my_sidebar' );

  function page_sidebar() {

    register_sidebar( array(
      'name' => __( 'Page Sidebar', 'lucidbooks' ),
      'id' => 'page-sidebar',
      'description' => __( '' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  add_action('widgets_init', 'page_sidebar' );

  function post_sidebar() {

    register_sidebar( array(
      'name' => __( 'Post Sidebar', 'lucidbooks' ),
      'id' => 'post-sidebar',
      'description' => __( '' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  add_action('widgets_init', 'post_sidebar' );

  function sermon_sidebar() {

    register_sidebar( array(
      'name' => __( 'Sermon Sidebar', 'lucidbooks' ),
      'id' => 'sermon-sidebar',
      'description' => __( '' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  add_action('widgets_init', 'sermon_sidebar' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');

// add menu a tags attributes
add_filter( 'nav_menu_link_attributes', 'wpse134_contact_menu_atts', 10, 3 );

function wpse134_contact_menu_atts( $atts, $item, $args ) {
  // The ID of the target menu item
  $menu_target_one = 134;

  // inspect $item
  if ($item->ID == $menu_target_one) {
    $atts['data-toggle'] = 'collapse';
  }
  return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wpse137_contact_menu_atts', 10, 3 );

function wpse137_contact_menu_atts( $atts, $item, $args ) {
  // The ID of the target menu item
  $menu_target_one = 137;

  // inspect $item
  if ($item->ID == $menu_target_one) {
    $atts['data-toggle'] = 'collapse';
  }
  return $atts;
}


class Child_Wrap extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div id=\"test\" class=\"collapse\"><ul class=\"sub-menu\">\n";
      }
    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
  } 

  // Add to your init function
// add_filter('get_search_form', 'my_search_form');
 
// function my_search_form($text) {
//      $text = str_replace('value="Search"', 'value="🔍"', $text);
//      return $text;
// }
// filter the Gravity Forms button type
add_filter( 'gform_submit_button_4', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<input id='sendMeYourGuide' class='btn btn-success btn-block btn-lg' type='submit' value='send me the guide!''>";
}
// add_filter( 'gform_submit_button_5', 'form_submit_button', 10, 2 );
// function form_submit_button( $button, $form ) {
//     return "<input class='btn btn-success btn-block btn-lg' type='submit' value='send me the guide!''>";
// }
add_filter( 'gform_field_css_class_4', 'custom_class', 10, 3 );
function custom_class( $classes, $field, $form ) {
    if ( $field->type == 'email' ) {
        $classes .= ' form-control input-lg';
    }
    return $classes;
}

add_filter( 'gform_submit_button_1', 'form_submit_button_four', 10, 2 );
function form_submit_button_four( $button, $form ) {
    return "<input class='btn btn-success btn-block btn-lg' type='submit' value='Submit''>";
}
add_filter( 'gform_submit_button_2', 'form_submit_button_two', 10, 2 );
function form_submit_button_two( $button, $form ) {
    return "<input class='btn btn-success btn-block btn-lg' type='submit' value='Submit''>";
}
// add_filter( 'gform_field_css_class_1', 'custom_class_four', 10, 3 );
// function custom_class_four( $classes, $field, $form ) {
//     if ( $field->type == 'text' ) {
//         $classes .= ' form-control input-lg';
//     }
//     return $classes;
// }



		
add_filter( 'gform_confirmation_2', 'custom_confirmation_message', 10, 4 );
function custom_confirmation_message( $confirmation, $form, $entry, $ajax ) {
    $confirmation = '<h3>Thank you for completing the Lucid Books Submission Form! You will receive an email momentarily from Megan Poling, Lucid Books Director of Author Relations.</h3>
For now, you can <a href="https://www.lucidbooks.net/wp-content/uploads/2017/03/PPG-Final.pdf">download our Partnership Publishing Guide</a> to learn more about Lucid Books.'.
					"<script>
						fbq('track', 'CompleteRegistration', {
						value: 25.00,
						currency: 'USD'
						});
					</script>";

    return $confirmation;
}


add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
 
    if ( is_page() && !is_front_page() ) {
     
        $classes[] = 'inner-page'; 

    }      
    return $classes;
     
}

add_filter( 'body_class','halfhalf_body_class' );
function halfhalf_body_class( $classes ) {
 
    if ( is_page_template( 'template-fullwidth.php' ) ) {
        $classes[] = 'fullwidth-page';
    }
     
    return $classes;
     
}
add_filter( 'body_class','template_body_class' );
function template_body_class( $classes ) {
 
    if ( is_page_template( 'template-books.php' ) ) {
        $classes[] = 'books-page';
    }
     
    return $classes;
     
}

?>