<?php get_header('sub');  ?>
 <?php while (have_posts()) : the_post(); ?>

	 <section>
    <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                	 <?php the_content();?>                  
                </div>
            </div>
    </div>
    </section>
 	<?php endwhile; ?>
<?php get_footer(); ?>
