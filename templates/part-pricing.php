<?php $page_part_query = new WP_Query( 'page_id=106&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

 <?php
$table = get_field( 'pricing_table' );
 
$table_header=$table['header']; 
$table=$table['body']; 
 ?> 
    <section class="pack-table-section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-4 col-md-12">
                    <div class="pack-table-box">
                        <?php print($table_header[0][c]);?>
                        <ul>
                            <li><?php the_field('pricing_testdrive');?></li>
                            <li class="green"><img src="<?php echo TEMPL;?>/assets/img/smartphone.png" alt=""><img src="<?php echo TEMPL;?>/assets/img/desktop.png" alt=""><img src="<?php echo TEMPL;?>/assets/img/smartwatch.png" alt=""></li> 
                            <?php foreach ($table as $key => $tr) {?>
                                <li><?php echo $tr[0][c];?></li>
                            <?php }?> 


                        </ul>
                        <a href="<?php the_field( 'freetrail_link', 38 ); ?>">Start free</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="pack-table-box prime">
                        <?php print($table_header[1][c]);?>
                        <ul>
                            <li><?php the_field('pricing_testdrive');?></li>
                            <li class="green"><img src="<?php echo TEMPL;?>/assets/img/smartphone.png" alt=""><img src="<?php echo TEMPL;?>/assets/img/desktop.png" alt=""><img src="<?php echo TEMPL;?>/assets/img/smartwatch.png" alt=""></li>

                             <?php foreach ($table as $key => $tr) {?>
                                <li><?php echo $tr[1][c];?></li>
                            <?php }?>                           


                        </ul>
                        <a href="<?php the_field( 'freetrail_link', 38 ); ?>">Start free</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="pack-table-box">
                        <?php print($table_header[2][c]);?>
                        <ul>
                            <li><?php the_field('pricing_testdrive');?></li>
                            <li class="green"><img src="<?php echo TEMPL;?>/assets/img/smartphone.png" alt=""><img src="<?php echo TEMPL;?>/assets/img/desktop.png" alt=""><img src="<?php echo TEMPL;?>/assets/img/smartwatch.png" alt=""></li>
                             <?php foreach ($table as $key => $tr) {?>
                                <li><?php echo $tr[2][c];?></li>
                            <?php }?>  

                        </ul>
                        <a href="<?php the_field( 'freetrail_link', 38 ); ?>">Start free</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
<?php endwhile; ?>
 