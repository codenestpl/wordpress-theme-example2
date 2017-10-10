<?php $page_part_query = new WP_Query( 'page_id=36&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>
<?php
$table = get_field( 'competitoranalysis_table' );
$table=$table['body']; 
?>

     <section class="competitor-section">
        <div class="container">
            <div class="row"> 
                    <hgroup class="hgroup-section">
                        <h2 class="subheading-section"><?php the_field( 'competitoranalysis_subheading' ); ?></h2>
                        <h3 class="heading-section"><?php the_field( 'competitoranalysis_heading' ); ?></h3>
                    </hgroup>
                 
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="competitor-table">
                      <svg class="swipe-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255 255"><line x1="63.7" y1="0.2" x2="63.7" y2="0.2" fill="none"/><path d="M220 133.8c-4.8-28.6-23.3-33.7-32.1-34.5 -6.6-8.7-16.1-13.4-27-13.4 -2.3 0-4.7 0.2-7.1 0.6 -6.4-7.7-15.3-11.9-25.5-11.9 -7.6 0-14.4 2.4-19.1 5.1L90.4 20.1C86.5 7.8 76.3 0 63.7 0c0 0 0 0 0 0 -9.5 0-18.4 4.5-23.9 12 -5.3 7.2-6.6 16.2-3.8 25.3l23.9 75.3c-3.4 2-6.4 4.6-8.9 7.7 -4.9 6.2-7.8 14.3-8.7 24.2 -1.3 14.7 3.6 31.2 14.5 48.8 7.4 11.9 15.6 21.2 19 24.8l11.2 26.3C89.7 250.9 96 255 103 255h74.9c8.5 0 15.8-6 17.2-14.4 0-0.2 0.1-0.3 0.1-0.5l3.1-26.2c0.1-0.3 0.3-0.7 0.5-1.1C215.6 174.5 222.5 148.7 220 133.8zM186.9 210.1c-0.2 0.4-0.3 0.8-0.4 1.2l-3.3 27.3c-0.4 2.6-2.7 4.4-5.4 4.4h-74.9c-2.2 0-4.2-1.2-5-3.2L86.3 212.3c-0.3-0.6-0.6-1.1-1.1-1.6 -4.8-5-33.6-36.5-31-65.1 1.5-17 9.8-22.5 15.4-24.2 2.8-0.9 4.4-4 3.5-6.8L47.4 33.7c-4-12.8 6.2-21.5 16.3-21.5 6.4 0 12.7 3.5 15.3 11.7l22 69c0.8 2.5 3 3.8 5.3 3.8 1.6 0 3.1-0.7 4.2-2.1 0.9-1.2 2-2.4 3.3-3.4 2.9-2.2 8.5-4.6 14.7-4.6 6.3 0 13.2 2.5 18.1 10.2 1 1.6 2.8 2.6 4.6 2.6 0.5 0 1-0.1 1.5-0.2 2.2-0.6 5.1-1.2 8.3-1.2 6.2 0 13.5 2.2 18.9 10.7 1 1.6 2.7 2.6 4.6 2.6 0 0 0.1 0 0.1 0 0.2 0 0.4 0 0.6 0 6.4 0 19.4 2.8 23 24.6C211.6 156 189.4 204.1 186.9 210.1z"/> </svg>
                        <table>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><p class="best">Best option</p></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><img src="<?php echo TEMPL;?>/assets/img/shoeboxed.png" alt=""></td>
                                <td><img src="<?php echo TEMPL;?>/assets/img/receipt-bank.png" alt=""></td>
                                <td><img src="<?php echo TEMPL;?>/assets/img/iqboxy.png" alt=""></td>
                                <td><img src="<?php echo TEMPL;?>/assets/img/expensify.png" alt=""></td>
                                <td><img src="<?php echo TEMPL;?>/assets/img/tallie.png" alt=""></td>
                            </tr>
							
							<?php foreach ($table as $key => $tr) {?>
							 <tr> 
							 <?php foreach ($tr as $key => $td) {?>
                              
								<?php  $td= $td[c];
								if($td==="y") {
									echo '<td class="check"></td>';
								}else if($td==="n") {
									echo ' <td class="cross"></td>';
								} else {
									echo '<td>'.$td.'</td>';
								};?> 
                             <?php }?> 
                            </tr> 
							
							<?php }?>
 
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a class="btn btn-primary" href="<?php the_field( 'freetrail_link' ); ?>">START FREE</a></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> 
          
 
<?php endwhile; ?>
 