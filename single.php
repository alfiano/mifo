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
              <?php
                get_template_part( 'template-parts/post/content', get_post_format() );               
              ?>
              <div class="clear-fix"></div>
              <?php 
              if(has_tag()){
             //tag add
                $seperator = ','; // blank instead of comma
                $after = '';
                echo '<div class="tag-line"><i class="fa fa-tag"></i>';
                esc_html( 'Tags: ', 'mifo' );
                the_tags( '', $seperator, $after );
                echo '</div>';
               }?>    
          </article>
          
		  <?php foreach($sb_sort as $key=>$value){?>
		  <?php switch($key){
		  case "pagination":?>
		  <?php if ($value =="1"):?>
		  <?php
            get_template_part( 'pagination');
          ?>
		  <?php endif;?>
			<?php break;?>
          <!-- .ps-navigation -->          
          <?php
			case "author":?>
			<?php if ($value =="1"):?>
            <?php 
			$author_meta = get_the_author_meta('description'); 
            if( !empty($author_meta) ){
            ?>
              <div class="author-block">
                <div class="author-img"> <?php echo get_avatar(get_the_author_meta( 'ID' ), 200);?> </div>
                <div class="author-desc">
                  <h3 class="author-title">
                    <?php the_author();?>
                  </h3>
                  <p>
                    <?php   
                      echo wpautop( get_the_author_meta( 'description' ) );
                    ?>
                  </p>
                  <a href="<?php echo esc_url(get_the_author_meta('user_url'))?>" target="_blank">
                    <?php echo esc_url(get_the_author_meta( 'user_url'))?></a> 
                  </div>
              </div>
              <!-- .author-block -->
			 <?php }?>
			  <?php endif;?>
              <?php break;?>

          <?php 
		  case "comment":?>
		  <?php if ($value =="1"):?>
          <?php 
			if ( comments_open() || get_comments_number() ) :
              comments_template();
              endif;
			endif;
			break;?>
			
			<?php case "related":?>
			<?php if ($value =="1"):?>
				<?php echo "related";?>
			<?php endif;?>
			<?php break;?>
			<?php }?>
		  <?php };?>
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