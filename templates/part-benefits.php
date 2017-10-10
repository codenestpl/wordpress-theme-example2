<?php $page_part_query = new WP_Query( 'page_id=31&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

  
    <section class="skewed grey-bg">
        <div class="container">
            <div class="row">               
                <hgroup class="hgroup-section">
                    <h3 class="subheading-section">
                        <?php the_field( 'benefits_subheading' ); ?>
                    </h3>
                    <h2 class="heading-section">
                        <?php the_field( 'benefits_heading' ); ?>
                    </h2>
                </hgroup>
            </div>
        </div>          
        <div class="container-fluid benefits-carousel-box">
            <div class="row">
                <div id="benefitsCarousel" class="benefits-carousel owl-carousel  owl-theme">

                <?php $benefits_i=0; $benefits_query = new WP_Query( 'post_type=benefits&posts_per_page=-1' ); ?>   

                <?php while ( $benefits_query->have_posts() ) : $benefits_query->the_post(); ?>
                    <!--//-->
                    <div data-hash="ben-<?php echo $benefits_i;?>" class="item benefits-item-carousel">
                        <div class="icon-item-carousel">
                            <?php the_field( 'benefit_svg' ); ?>
                        </div>
                        <a class="link-item-carousel" href="#ben-<?php echo $benefits_i;?>"><span><?php the_title();?></span></a>
                        <p class="text-item-carousel p-section">
                           <?php the_field( 'benefit_description' ); ?>
                        </p>
                    </div>
                    <!--//-->
                    <?php $benefits_i++;?>
                 <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>

 
<?php endwhile; ?>
 