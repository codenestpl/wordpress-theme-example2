<?php /* Template Name: Blog */ ?>
<?php get_header('sub'); ?>

<?php $blog_categories_terms = get_field( 'blog_categories' );  ?> 

<section class="category-box"> 
    <div class="container"> 
            <div class="row category-header">
                <div class="col-auto">
                <h3 class="subheading-section ">Latest</h3>
                
                </div>
                 <a href="<?php echo get_category_link( 5 ); ?>">More <span>&nbsp;></span></a>
            </div>
            <div class="row">                
                      

           <?php
               $blog_term_id = $blog_categories_term ->term_id;
               $blog_posts = new WP_Query( 'posts_per_page=6&post_type=post&orderby=date&category=5' );  
           ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

                <div class="col-md-6 col-lg-4">
                  <div class="h-blog-box">
                    <?php $link_img_art= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id  ), 'your_thumb_handle' ); ?>
                    <div style="background-image: url('<?php echo $link_img_art[0]; ?>');" class="article-thumbnail">
                         <a href="<?php the_permalink();?>"></a>                      
                    </div>
                    <div class="article-text">
                        <h3 class="heading-box"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                               
                       
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
        </div>
    </section>
 
<?php if ( $blog_categories_terms ): ?>
  <?php foreach ( $blog_categories_terms as $blog_categories_term ): ?> 

    <section class="category-box"> 
    <div class="container"> 
            <div class="row category-header">
                <div class="col-auto">
                <h3 class="subheading-section "><?php echo $blog_categories_term->name; ?></h3>
                
                </div>
                 <a href="<?php echo get_category_link( $blog_categories_term->term_id ); ?>">More <span>&nbsp;></span></a>
            </div>
            <div class="row">                
                      

           <?php
               $blog_term_id = $blog_categories_term ->term_id;
               $blog_posts_cat = new WP_Query( 'posts_per_page=6&post_type=post&category=$blog_term_id ' );  
           ?>
            <?php while ( $blog_posts_cat->have_posts() ) : $blog_posts_cat->the_post(); ?>

                <div class="col-md-6 col-lg-4">
                  <div class="h-blog-box">
                    <?php $link_img_art= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id  ), 'your_thumb_handle' ); ?>
                    <div style="background-image: url('<?php echo $link_img_art[0]; ?>');" class="article-thumbnail">
                         <a href="<?php the_permalink();?>"></a>                      
                    </div>
                    <div class="article-text">
                        <h3 class="heading-box"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        
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
        </div>
    </section>
  <?php endforeach; ?>
<?php endif; ?> 
<section></section>
<?php get_footer(); ?>
