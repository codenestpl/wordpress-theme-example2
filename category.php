<?php /* Template Name: Blog */ ?>
<?php get_header('sub'); ?>

<?php $blog_categories_terms = get_field( 'blog_categories' );  ?> 

<section class="category-box"> 
    <div class="container">  
            <div class="row">                
                      

  
               <?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array( 
				  'paged'          => $paged
				);

				$blog_posts = new WP_Query( $args );  
           ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

                <div class="col-md-6">
                  <div class="h-blog-box">
                    <?php $link_img_art= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id  ), 'your_thumb_handle' ); ?>
                    <div style="background-image: url('<?php echo $link_img_art[0]; ?>');" class="article-thumbnail">
                         <a href="<?php the_permalink();?>"></a>                      
                    </div>
                    <div class="article-text">
                        <h3 class="heading-box"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                               
                        <p class="article-description p-smallbox">
                             <?php the_content('Read more...');?> 
                        </p>
                         <div class="article-info">
                             <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                            <div>
                               <p class="p-smallbox"><strong><?php the_author();?></strong></p> 
                             <p class="p-smallbox"><?php the_date("M d, Y"); ?> &#x2022; <?php the_field('post_readtime');?></p> 
                            </div>
                        </div> 
                    </div>
                </div>
                </div>

      <?php endwhile; ?>     
            </div>

            <div class="row pagination-row">

                 <?php
            the_posts_pagination( array(
                'prev_text'          => __( '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="7" viewBox="0 0 30 14.4"><polyline class="arrow" points="1.3 1.9 15.2 12.3 29 1.9 " style="stroke-linecap:round;fill:none;stroke-width:3.5;stroke:#31393E"></polyline></svg>' ),
                'next_text'          => __( '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="7" viewBox="0 0 30 14.4"><polyline class="arrow" points="1.3 1.9 15.2 12.3 29 1.9 " style="stroke-linecap:round;fill:none;stroke-width:3.5;stroke:#31393E"></polyline></svg>'),
            ) );
                  ?>    
 
               
            </div>
        </div>
    </section>
  
<section></section>
<?php get_footer(); ?>
