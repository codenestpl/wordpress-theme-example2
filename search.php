<?php
/*
Template Name: Search Page
*/
?>

<?php
global $query_string;

?>
<?php get_header('sub'); ?>

<section > 
    <div class="container ">
        <div class="row search-row category-header">
                
                 <form role="search" method="get" action="http://codenest.pl/dev/iqboxy/wp">                   
                        <input name="s" required="" value="" placeholder="Search..." type="text">  
                    <button class="btn btn-search"> 
                        <svg svg-fallback="search-icon.png" class="search-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><circle cx="12.6" cy="12.5" r="10.3"></circle><line x1="20.6" y1="20.9" x2="28.6" y2="28.3"></line></svg>             
                    </button>                   
                </form>



        </div>
    </div>
</section> 

<section class="category-box"> 
    <div class="container">  
            <div class="row">                
                      
<?php if ( have_posts() ) : ?>

    <?php
            // Start the loop.
            while ( have_posts() ) : the_post(); ?>
                
                <?php $link_img_art= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id  ), 'your_thumb_handle' ); ?>

                <div class="col-md-6">
                  <div class="h-blog-box <?php echo ($link_img_art)?'':'noimg';?>">   
                    <?php if($link_img_art) {?>                
                    <div style="background-image: url('<?php echo $link_img_art[0]; ?>');" class="article-thumbnail">
                         <a href="<?php the_permalink();?>"></a>                      
                    </div>
                    <?php };?>
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



              <?php endif; ?> 
 
               
            </div>
        </div>
    </section>
  





<section></section>
<?php get_footer(); ?>
 