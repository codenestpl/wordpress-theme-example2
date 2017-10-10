<?php $page_part_query = new WP_Query( 'page_id=20&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

  
 
<?php endwhile; ?>
 