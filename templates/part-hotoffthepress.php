<?php $page_part_query = new WP_Query( 'page_id=20&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

  <section  class="hot-press-section">
     	<div class="container">	
     	 <hgroup class="hgroup-section">
                        <h2 class="subheading-section">HOT OFF THE PRESS</h2>
                        <h3 class="heading-section">What’s new in <strong>IQBoxy</strong></h3>
                    </hgroup> 
         </div>
        <div class="container">
             
            <div class="row">
            <?php $posts_query = new WP_Query( 'posts_per_page=1&post_type=post ' ); ?>   
			<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
                <div class=" col-lg-4 col-sm-12">
                    <div class="last-news-box">
                        <h2 class="subheading-box"><a href="<?php the_permalink();?>" class="green-hover"><?php the_title();?></a></h2>
                        <div class="sneack-article">
                            <p><?php the_content('Read more...');?> </p>
                            <span class="small-text">Latest News</span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
                <div class="col-lg-8 col-sm-12">
                    <div class="sneack-article-list">
                    <?php $posts_query = new WP_Query( 'posts_per_page=7&post_type=post&offset=1' ); ?>   
					<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
                        <a class="sneack-article-box" href="<?php the_permalink();?>"><?php the_title();?></a>
                   <?php endwhile; ?>
                </div>
            </div>
            
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-secondary more-button"><span class="more-icon"></span>MORE NEWS</a>
                </div>
            </div>
    </section>
 
<?php endwhile; ?>
 