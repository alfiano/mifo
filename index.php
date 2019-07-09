<?php
/**
 * @author  rs-theme
 * @since   1.0
 * @version 1.0 
 */
get_header(); ?>
<?php 
global $rs_option;
$blog_sort = $rs_option['blog-sortable'];
//get_template_part( 'inc/page-header/breadcrumbs-blog' ); ?>
<div class="rs-blog">
    <div class="container">
        <div id="content">
          <div class="row">
            <?php
                //checking blog layout form option  
                $col='';
                $blog_layout=''; 
                $column=''; 
                $blog_grid='';
                if(!empty($rs_option['blog-layout']))
                  {
                    $blog_layout=($rs_option['blog-layout']);
                    $blog_grid=$rs_option['blog-grid'];
                    if($blog_layout == 'full')
                      {
                         $layout ='full-layout';
                         $col = '-full';
                         $column = 'sidebar-none';  
                      } 
                      
                    elseif($blog_layout == '2left')
                      {
                         $layout = 'full-layout-left';  
                      }
                
                    elseif($blog_layout == '2right')
                      {
                         $layout = 'full-layout-right'; 
                      } 
                    else{
                      $col = '';
                      $blog_layout = ''; 
                    }
                  }
                  else{
                    $col='';
                    $blog_layout=''; 
                    $layout='';
                    $blog_grid='';
                  }
                ?>
            <div class="col-md-9<?php echo esc_attr($col); ?> <?php echo esc_attr($layout); ?>"> 
              <?php
              if ( have_posts() ) :           
                /* Start the Loop */
                while ( have_posts() ) : the_post();      
              ?>
			  <div class="col-sm-<?php echo esc_attr($blog_grid);?> col-xs-12">
			  <div class="row">
               <article <?php post_class(); ?>>  
                    <div class="blog-item">
					<?php foreach ($blog_sort as $key=>$value):
						switch($key) {
							case "thumbnail":?>
							<?php if ($value == "1"):?>
						<?php if ( has_post_thumbnail() ) {?>
                        <div class="blog-img">
                          <?php
                            the_post_thumbnail();
                          ?>
                          <div class="blog-img-content">
                            <div class="display-table">
                              <div class="display-table-cell">
                                <a class="blog-link" href="<?php the_permalink();?>">
                                  <i class="fa fa-link"></i>
                                </a>               
                              </div>
                            </div>
                          </div>       
                        </div><!-- .blog-img -->
						<?php
							} ?>
							<?php endif;?>
						<?php break;?>
                      
                      <div class="full-blog-content">
                        <div class="blog-meta">
						<?php case "title":?>
						<?php if ($value == "1"):?>
                          <h2 class="blog-title"><a href="<?php the_permalink();?>">
                            <?php the_title();?>
                            </a>
                          </h2>
						  <?php endif;?>
						<?php break;?>
						
						<?php case "post-meta":?>
						<?php if ($value == "1"):?>
							<div class="blog-date"> <i class="fa fa-calendar"></i>
								<?php $post_date = get_the_date(); echo esc_attr($post_date);?>
								<span class="author"> <i class="fa fa-user"></i>
								<?php the_author();?>
								<?php if(get_the_category()){?>
								<span class="category-name"><i class="fa fa-folder-open-o"></i>
								  <?php the_category(', '); ?>
								</span>
								<?php }?>
								</span>
							</div>
							<?php endif;?>
						<?php break;?>
                        </div>
						
						<?php case "excerpt":?>
						<?php if ($value == "1"):?>
                        <div class="blog-desc">   
                          <?php the_excerpt();?>            
                        </div>
						<?php endif;?>
						<?php break;?>
						
						<?php case "gallery":?>
						<?php if ($value == "1"):?>
								<?php mifo_archive_gallery("archive");?>
							<?php endif;?>
						<?php break;?>

                    </div>
					<?php }?>
					<?php endforeach;?>
                  </div>
				  
				</article>
				</div>
			</div>
              <?php  
              endwhile;   
              ?>
              <div class="pagination-area">
                <?php
                    the_posts_pagination();
                  ?>
              </div>
              <?php
              else :
              get_template_part( 'template-parts/content', 'none' );
              endif; ?> 
          </div>
          <?php if( $layout != 'full-layout' ):     
             get_sidebar();    
           endif;
          ?>
        </div>  
    </div>
</div>
<?php
get_footer();