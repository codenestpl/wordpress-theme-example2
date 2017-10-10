<?php $page_part_query = new WP_Query( 'page_id=34&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

  
  	  <section class="extensions-section">
        <div class="container">
          
                    <hgroup class="hgroup-section">
                        <h3 class="subheading-section"><?php the_field( 'extensions_subheading' ); ?></h3>
                        <h2 class="heading-section"><?php the_field( 'extensions_heading' ); ?></h2>
                        <h4 class="p-section"><?php the_field( 'extensions_section_text' ); ?></h4>
                    </hgroup>
                 
        </div>
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="list-for-box desktop-version">

					<?php 
					$apps_query = new WP_Query( '&post_type=connected-app&posts_per_page=-1' ); ?>   

					<?php while ( $apps_query->have_posts() ) : $apps_query->the_post(); ?> 

                        <a href="<?php the_field( 'app:_link' ); ?>" class="servive-box">
                            <div class="icon">

                            <?php $app_logo = get_field( 'app:_logo' ); ?>
							<?php if ( $app_logo ) { ?>
								<img src="<?php echo $app_logo['url']; ?>" alt="<?php echo $app_logo['alt']; ?>" />
							<?php } ?>
                                 
                            </div>
                            <div class="descryption">
                                <h3>
                                <?php if ( get_field("app_small_text") ) { ?>
                               		 <small><?php the_field( 'app_small_text' ); ?></small>
								<?php } ?>
                                <?php the_title();?></h3>
                                <p><?php the_field( 'app:_short_description' ); ?></p>
                            </div>
                        </a> 
					<?php endwhile; ?>

                    </div>


                    <div class="list-for-box mobile-version">
                        <div class="owl-carousel list-for-box-slider">
                            
						<?php $app_1 = 0; while ( $apps_query->have_posts() ) : $apps_query->the_post(); ?> 
	
						<?php if($app_1==0) {echo '<div>';}?>

                        <a href="<?php the_field( 'app:_link' ); ?>" class="servive-box">
                            <div class="icon">

                            <?php $app_logo = get_field( 'app:_logo' ); ?>
							<?php if ( $app_logo ) { ?>
								<img src="<?php echo $app_logo['url']; ?>" alt="<?php echo $app_logo['alt']; ?>" />
							<?php } ?>
                                 
                            </div>
                            <div class="descryption">
                                <h3>
                                <?php if ( get_field("app_small_text") ) { ?>
                               		 <small><?php the_field( 'app_small_text' ); ?></small>
								<?php } ?>
                                <?php the_title();?></h3>
                                <p><?php the_field( 'app:_short_description' ); ?></p>
                            </div>
                        </a> 

                        <?php if($app_1==2) {echo '</div>'; $app_1 =0;}?>

					<?php $app_1++; endwhile; ?>
					<?php if($app_1==1) {echo '</div>';};?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
<?php endwhile; ?>
 