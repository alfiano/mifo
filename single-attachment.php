<?php
/**
 * @author  rs-theme
 * @since   1.0
 * @version 1.0 
 */

get_header();?>
<?php 
global $rs_option;
$sb_sort = $rs_option['singlebottom-sortable'];?>
<div class="container"> 
  <div id="content">
  <!-- Blog Detail Start -->
    <div class="rs-blog-details">
      <div class="row">
        <div class="col-md-9">
		<?php get_template_part( 'inc/page-header/breadcrumbs-single' ); ?>
          <?php
           while ( have_posts() ) : the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <h1 class="page-title"><?php the_title();?></h1>
			 <div class="bs-info single-page-info">
			  <ul class="bs-meta">
				<li><i class="fa fa-calendar"></i><span>
				   <?php $post_date = get_the_date(); echo esc_attr($post_date);?>
				  </span></li>
				<li><i class="fa fa-user"></i>
				  <?php the_author(); ?>
				  </li>
				<?php if(get_the_category()){?>
				<li class="category-name"><i class="fa fa-folder-open-o"></i>
				  <?php the_category(', '); 
				?>
				</li>
				<?php }?>
			</ul>  
			</div>
			<div class="bs-img">
			 <?php echo wp_get_attachment_link( $attachment->ID, 'full', true );?>
			</div>
            
			<div class="attachment-description">
				<?php echo "description";?>
			</div>
			
			<?php mifo_archive_gallery("attachment");?>
			
          </article>
          
		  <?php //foreach($sb_sort as $key=>$value){?>
		  <?php //switch($key){?>
		        
			<?php echo "disclaimer";?>
			
			<?php echo "share sosmed";?>
			
			<?php //case "related":?>
			<?php //if ($value =="1"):?>
				<?php echo "related";?>
			<?php //endif;?>
			<?php //break;?>
			<?php //}?>
		  <?php //};?>
         <?php endwhile; // End of the loop.
          ?>
		  
        </div>
        <?php
          get_sidebar();
        ?>      
      </div>
    </div>
  <!-- Blog Detail End --> 
  </div>
</div>
<!-- .container -->
<?php
get_footer();