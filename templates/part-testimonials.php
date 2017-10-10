<?php $page_part_query = new WP_Query( 'page_id=35&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

  
    <section  class="testimonial-section skewed "> 
        <div class="container">
            <div class="row"> 
                    <hgroup class="hgroup-section">
                        <h3 class="subheading-section">T<?php the_field( 'testimonials_subheading' ); ?></h3>
                        <h2 class="heading-section"><?php the_field( 'testimonials_heading' ); ?></h2>
                    </hgroup> 
            </div>

            <div class="container">
            <div class="row list-reviews desktop-version">
     
            <?php $testimonials_query = new WP_Query( 'posts_per_page=12&post_type=testimonial' ); 
                 $testimonials_num=$testimonials_query->post_count;
                 $testimonials_num_col =  floor ( ($testimonials_num)/3); 
                 $testimonials_extra = $testimonials_num - 3*$testimonials_num_col;
                 $extra_1 = 0;
                 $extra_2 = 0;

                 if($testimonials_extra==1) {
                       $extra_1 = 1; 
                 } else  if ($testimonials_extra==2) {
                    $extra_1 = 1;
                    $extra_2 = 1;
                 };

                 $testimonials_i=0; 
                 $onemore = ($testimonials_extra>0)?true:false; 

                 $testimonials_query_posts=$testimonials_query->posts; 
                 ?>

            <div class="col-md-4">
                <?php           
                for ($i=0; $i <  $testimonials_num_col + $extra_1; $i++) { 
                  $review =  $testimonials_query_posts[$i];
                  $review_id= $review->ID; 
                  ?>
                      
                    <div class="reviews-box">
                      <p class="quot p-smallbox"><?php the_field( 'testimonial:_text', $review_id ); ?></p>
                      <div class="avatar">
                          <div class="avatar-icon">
                              <?php if ( get_field( 'testimonial:_author_img', $review_id) ) { ?>
                                  <img src="<?php the_field( 'testimonial:_author_img', $review_id ); ?>" />
                              <?php } ?>
                          </div>
                          <p class="name"><?php the_field( 'testimonial_author_name', $review_id ); ?></p>
                          <p class="pos"><?php the_field( 'testimonial:_author_profession', $review_id ); ?></p>
                          <p class="date"><?php $date = DateTime::createFromFormat('Ymd', get_field( 'testimonial:_publish_date', $review_id )); echo $date->format('M d, Y');?></p>
                      </div>
                  </div> 

               <?php }?>
            </div>


             <div class="col-md-4">
                <?php                 
                for ($i=$testimonials_num_col   + $extra_1; $i <  $testimonials_num_col*2   + $extra_1  + $extra_2; $i++) { 
                  $review =  $testimonials_query_posts[$i];
                  $review_id= $review->ID; 
                  ?>
                      
                    <div class="reviews-box">
                      <p class="quot p-smallbox"><?php the_field( 'testimonial:_text', $review_id ); ?></p>
                      <div class="avatar">
                          <div class="avatar-icon">
                              <?php if ( get_field( 'testimonial:_author_img', $review_id) ) { ?>
                                  <img src="<?php the_field( 'testimonial:_author_img', $review_id ); ?>" />
                              <?php } ?>
                          </div>
                          <p class="name"><?php the_field( 'testimonial_author_name', $review_id ); ?></p>
                          <p class="pos"><?php the_field( 'testimonial:_author_profession', $review_id ); ?></p>
                          <p class="date"><?php $date = DateTime::createFromFormat('Ymd', get_field( 'testimonial:_publish_date', $review_id )); echo $date->format('M d, Y');?></p>
                      </div>
                  </div> 

               <?php }?>
            </div>

            <div class="col-md-4">
                <?php                 
                for ($i=$testimonials_num_col*2  + $extra_1  + $extra_2; $i <  $testimonials_num_col*3  + $extra_1  + $extra_2; $i++) { 
                  $review =  $testimonials_query_posts[$i];
                  $review_id= $review->ID; 
                  ?>
                      
                    <div class="reviews-box">
                      <p class="quot p-smallbox"><?php the_field( 'testimonial:_text', $review_id ); ?></p>
                      <div class="avatar">
                          <div class="avatar-icon">
                              <?php if ( get_field( 'testimonial:_author_img', $review_id) ) { ?>
                                  <img src="<?php the_field( 'testimonial:_author_img', $review_id ); ?>" />
                              <?php } ?>
                          </div>
                          <p class="name"><?php the_field( 'testimonial_author_name', $review_id ); ?></p>
                          <p class="pos"><?php the_field( 'testimonial:_author_profession', $review_id ); ?></p>
                          <p class="date"><<?php $date = DateTime::createFromFormat('Ymd', get_field( 'testimonial:_publish_date', $review_id )); echo $date->format('M d, Y');?></p>
                      </div>
                  </div> 

               <?php }?>
            </div>
 
              

              <?php if ( $testimonials_num>12) { ?>
           
                 <a href="#" class="btn btn-secondary more-button"><span class="more-icon"></span>MORE REVIEWS</a>

             <?php };?>
            </div>
            </div>
            <div class="container">
            <div class="row list-reviews mobile-version">
                <div class="list-reviews-slider owl-carousel"> 

            <?php $testimonials_query = new WP_Query( 'posts_per_page=-1&post_type=testimonial' ); ?>  
            <?php while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); ?>
                    <div class="reviews-box">
                        <p class="quot p-smallbox"><?php the_field( 'testimonial:_text' ); ?></p>
                        <div class="avatar">
                            <div class="avatar-icon">
                                <?php if ( get_field( 'testimonial:_author_img') ) { ?>
                                    <img src="<?php the_field( 'testimonial:_author_img' ); ?>" />
                                <?php } ?>
                            </div>
                            <p class="name"><?php the_field( 'testimonial_author_name' ); ?></p>
                            <p class="pos"><?php the_field( 'testimonial:_author_profession' ); ?></p>
                            <p class="date"><?php $date = DateTime::createFromFormat('Ymd', get_field( 'testimonial:_publish_date', $review_id )); echo $date->format('M d, Y');?></p>
                        </div>
                    </div> 
            <?php endwhile; ?> 

                </div>
            </div>
        </div>
        </div>
    </section>

 
<?php endwhile; ?>
 