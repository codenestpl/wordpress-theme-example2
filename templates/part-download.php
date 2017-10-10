<?php $page_part_query = new WP_Query( 'page_id=105&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

  
    
    <section class="download-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hgroup>
                      <h3 class="subheading-section">
                          <?php the_field( 'download_subheading' ); ?>
                      </h3>
                      <h2 class="heading-section">
                          <?php the_field( 'download_heading' ); ?>
                      </h2>
                    </hgroup>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="download-app-box">
                        <div class="icon">
                            <img src="<?php echo TEMPL;?>/assets/img/hub.png" alt="">
                        </div>
                        <h3>Hub (Web Portal)</h3>
                        <a href="<?php the_field('download_hub');?>">LOGIN</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="download-app-box">
                        <div class="icon">
                            <img src="<?php echo TEMPL;?>/assets/img/iphone.png" alt="">
                        </div>
                        <h3>iPhone / iPad</h3>
                        <a href="<?php the_field('download_istore');?>"><img src="<?php echo TEMPL;?>/assets/img/appstore.png" alt=""></a>
                        <p class="version"><?php the_field('download_istore_version');?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="download-app-box">
                        <div class="icon">
                            <img src="<?php echo TEMPL;?>/assets/img/android.png" alt="">
                        </div>
                        <h3>Android</h3>
                        <a href="<?php the_field('download_android');?>"><img src="<?php echo TEMPL;?>/assets/img/googleplay.png" alt=""></a>
                        <p class="version"><?php the_field('download_android_version');?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
<?php endwhile; ?>
 