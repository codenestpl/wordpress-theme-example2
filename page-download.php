<?php /* Template Name: Download */ ?>
<?php get_header('sub'); ?>
<?php get_template_part('templates/part', 'download' );  ?>
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
