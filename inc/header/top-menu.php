<?php 
/* Top menu part for Totalwall template
*/
global $rs_option;
?>
<?php
$tm_sort = $rs_option['topmenu-sortable'];
//print_r($tm_sort);
?>
<div class="top-header menu-sticky">
	<div class="container">
	
	<?php 
	foreach ($tm_sort as $key=>$value):
		switch($key) {
			case "top-menu";?>
			<?php if ($value == "1") {?>
			<nav class="nav navbar-top">
				<div class="navbar-top-menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'top-menu',
							'menu_id'        => 'top-menu-single',
						) );
					?>
				</div>
				
			</nav>
			<?php }?>
			<?php break;?>
			
			<?php 
			case "social-link";?>
			<?php if ($value == "1") {?>
			<ul class="social-link">
				<?php if(!empty($rs_option['facebook'])) { ?>
				<li> <a href="<?php echo esc_url($rs_option['facebook']);?>" target="_blank"><i class="fa fa-facebook"></i></a> </li>
				<?php } ?>
				<?php if(!empty($rs_option['twitter'])) { ?>
				<li> <a href="<?php echo esc_url($rs_option['twitter']);?>" target="_blank"><i class="fa fa-twitter"></i></a> </li>
				<?php } ?>
				 <?php if(!empty($rs_option['pinterest'])) { ?>
				<li> <a href="<?php echo esc_url($rs_option['pinterest']);?>" target="_blank"><i class="fa fa-pinterest"></i></a> </li>
				<?php } ?>
				<?php if(!empty($rs_option['instagram'])) { ?>
				<li> <a href="<?php echo esc_url($rs_option['instagram']);?>" target="_blank"><i class="fa fa-instagram"></i></a> </li>
				<?php } ?>
				<?php if(!empty($rs_option['youtube'])) { ?>
				<li> <a href="<?php echo esc_url($rs_option['youtube']);?>" target="_blank"><i class="fa fa-youtube"></i></a> </li>
				<?php } ?>
			</ul>
			<?php }?>
			<?php break;?>
			
			<?php 
			case "search-form";?>
			<?php if ($value == "1") {?>
			<?php get_search_form();?>
			<?php }?>
			<?php break;?>
		<?php }?>
	<?php endforeach;?>
	</div>
</div>