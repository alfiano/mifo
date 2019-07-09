<?php

/**
 * @author  rs-theme
 * @since   1.0
 * @version 1.0 
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php global $rs_option; 
$tm_sort = $rs_option['topmenu-sortable'];
$mm_sort = $rs_option['middlemenu-sortable'];
$bm_sort = $rs_option['bottommenu-sortable'];
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <!--Preloader start here-->
   <?php require get_parent_theme_file_path( 'inc/header/preloader.php' ); ?>
 <!--Preloader area end here-->
 <?php
    if(is_page()):
       $page_bg = get_post_meta( $post->ID, 'page_bg', true ); 
       $page_bg_back = ( $page_bg == 'Dark' ) ? 'dark' : '';
       else:
       $page_bg_back = '';
    endif;
    ?>
  <div id="page" class="site <?php echo esc_attr($page_bg_back);?>">
    
  <?php //require get_parent_theme_file_path( 'inc/header/top-head.php' ); ?> 
  
  <header id="rs-header" class="<?php echo esc_attr( $header_style ); ?>">  
    <!-- Header Menu Start -->
      <!-- Top menu inlcude here -->
      <?php 
      if (in_array("1", $tm_sort)):
		require get_parent_theme_file_path( 'inc/header/top-menu.php' ); 
      endif;
      ?> 
      <!-- end top menu here -->


    <div class="menu-area <?php echo esc_attr( $sticky_menu ); ?>">
     
	  <?php 
      if (in_array("1", $mm_sort)):?>
        <div class="container">

          <div class="middle-header">
            <!-- logo include here -->
            <?php require get_parent_theme_file_path( 'inc/header/middle-menu.php' ); ?>
            <!-- end logo here -->
		
           
          </div>
        </div>   
		<?php endif;?>
		
		<!-- Top menu inlcude here -->
      <?php 
      if (in_array("1", $bm_sort)):
		require get_parent_theme_file_path( 'inc/header/bottom-menu.php' ); 
      endif;
      ?> 
      <!-- end top menu here -->
    </div>
    <!-- Header Menu End --> 
	
	 
	
	
  </header>
  <!-- End Header Menu End -->
  <div class="main-contain">
