<?php 
global $rs_option;
$mm_sort = $rs_option['middlemenu-sortable'];
//print_r($mm_sort);

foreach($mm_sort as $key=>$value){
	switch($key){
	case "logo";?>
	<?php if ($value == "1"):?>
<?php if(!empty($rs_option['logo-type'])){
$logo = $rs_option['logo-type'];
if( $logo == 'Text' ){
   ?>
   <div class="logo-area">
     <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php echo esc_attr($rs_option['mifotext']); ?>
          </a>
          </span>
      </h1><!-- end of #logo -->
    </div>
   <?php
} 
else{
if(is_page()){
 $post_meta_header = get_post_meta($post->ID, 'logo_style', true); 
 if($post_meta_header == 'Dark Logo'){ ?>
  <div class="logo-area">
    <?php
       if (!empty( $rs_option['mifologo']['url'] ) ) { ?>
    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['mifologo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php }	else{?>
      <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
      </h1><!-- end of #logo -->
    <?php } 
    ?>
  </div>
  <?php } else {?>

  <div class="logo-area">
    <?php
       if (!empty( $rs_option['mifologo_transparent']['url'] ) ) { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['mifologo_transparent']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php } else{?>
      <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
      </h1><!-- end of #logo -->
    <?php } 
    ?>
  </div>
<?php }

 if (!empty( $rs_option['rswplogo_sticky']['url'] ) ) { ?>
    <div class="logo-area sticky-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['rswplogo_sticky']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
       </div>
    <?php } 
    }
else{
  ?>
  <div class="logo-area">
    <?php
       if (!empty( $rs_option['mifologo']['url'] ) ) { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['mifologo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php }	else{?>
      <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
      </h1><!-- end of #logo -->
    <?php } 
    ?>
  </div>
  <?php

  if (!empty( $rs_option['rswplogo_sticky']['url'] ) ) { ?>
    <div class="logo-area sticky-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['rswplogo_sticky']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
       </div>
    <?php }
} 
}
}
else{
  if(is_page()){
 $post_meta_header = get_post_meta($post->ID, 'logo_style', true); 
 if($post_meta_header == 'Dark Logo'){ ?>
  <div class="logo-area">
    <?php
       if (!empty( $rs_option['mifologo']['url'] ) ) { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['mifologo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php } else{?>
      <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
      </h1><!-- end of #logo -->
    <?php } 
    ?>
  </div>
  <?php } else {?>

  <div class="logo-area">
    <?php
       if (!empty( $rs_option['mifologo_transparent']['url'] ) ) { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['mifologo_transparent']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php } else{?>
      <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
      </h1><!-- end of #logo -->
    <?php } 
    ?>
  </div>
<?php } 
    }
else{
  ?>
  <div class="logo-area">
    <?php
       if (!empty( $rs_option['mifologo']['url'] ) ) { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['mifologo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php } else{?>
      <h1 id="logo">
          <span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
      </h1><!-- end of #logo -->
    <?php } 
    ?>
  </div>
  <?php

  if (!empty( $rs_option['rswplogo_sticky']['url'] ) ) { ?>
    <div class="logo-area sticky-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['rswplogo_sticky']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
       </div>
    <?php 
    }
  } 
}


if(!empty($rs_option['logo-type'])){
$logo = $rs_option['logo-type'];
if( $logo == 'Text' ){
  ?>
  <div class="logo-area sticky-logo">
    <h1 class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php echo esc_attr($rs_option['mifotext']); ?>
      </a>
    </h1>
  </div>
  <?php
}
}
else{
if (!empty( $rs_option['rswplogo_sticky']['url'] ) ) { ?>
    <div class="logo-area sticky-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $rs_option['rswplogo_sticky']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
       </div>
<?php } 
}
?>
<?php endif;?>
<?php break;?>
<?php case "main-menu";?>
<?php if ($value == "1"):?>
<?php
    $off_style = get_post_meta(get_the_ID(), 'off_style', true);
    $off_full="";
    if($off_style=="Fullwidth"):
        $off_full = "mainmenu-hide";
    endif;
?>
<nav class="nav navbar <?php echo  esc_attr($off_full); ?>">
    <div class="navbar-menu">
        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu-single',
			) );
		?>
    </div>
    <div class='nav-link-container mobile-menu-link'> 
        <a href='#' class="nav-menu-link"><i class="fa fa-bars" aria-hidden="true"></i></a> 
    </div>
</nav>
<nav class="nav-container mobile-menu-container <?php echo  esc_attr($off_full); ?>">
    <ul class="sidenav">
        <li class='nav-close-menu-li'><button><?php esc_html_e('x', 'mifo');?></button></li>
        <li>
          <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu-single2',
                ) );
            ?>
        </li>
    </ul>
</nav>
	<?php endif;?>
	<?php break;?>
	
	<?php case "iklan";?>
		<?php if ($value == "1") {?>
			<img src="http://localhost/devel/wp-content/uploads/2019/07/iklan-leaderboard-2.jpg" alt="iklan header">
		<?php }?>
	<?php break;?>
	<?php }?>
<?php }?>