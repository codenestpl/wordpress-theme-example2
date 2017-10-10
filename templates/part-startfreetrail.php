<?php $page_part_query = new WP_Query( 'page_id=38&post_type=page-part ' ); ?>   
<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>
  <section  class="free-trail-section skewed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <hgroup class="hgroup-section">
                    <h3 class="subheading-section">
                        <?php the_field( 'freetrail_subheading' ); ?>
                    </h3>
                    <h2 class="heading-section">
                        <?php the_field( 'freetrail_heading' ); ?>
                    </h2>
                </hgroup>
                    <a class="btn btn-primary btn-green-dark" href="<?php the_field( 'freetrail_link' ); ?>">Start free</a>
                </div>
            </div>
        </div>
    </section>  
<?php endwhile; ?>