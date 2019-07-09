<div class="bottom-header menu-sticky">
	<div class="container">

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
<?php get_search_form();?>
</div>
</div>