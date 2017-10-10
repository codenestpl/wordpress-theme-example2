<?php $page_part_query = new WP_Query( 'page_id=20&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

 
<section class="landing-section">
        <div class="container"> 
            <div class="row">
                
                <div id="appShowcase" class="indepedent-cols col-md-7">
                    <div class="mobile-showcase">
                        <div class="phone-model landing-phone">
                            <div class="upper-phone-model">
                                <div class="ratio-box">
                                    <svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="1009px" height="196.777px" viewBox="-3.746 -4.223 1009 196.777" enable-background="new -3.746 -4.223 1009 196.777"
     xml:space="preserve">
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
    c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
    C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
<ellipse  vector-effect="non-scaling-stroke"  class="fill-grey-light stroke-none" cx="374.217" cy="105.765" rx="18.125" ry="20.167"/>
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
<path  vector-effect="non-scaling-stroke"  class="fill-grey-light stroke-none"  d="M600.418,109.286c0,8.203-4.889,10.562-8.346,12.562H432.576c-1.676-2-6.997-4.307-6.997-10.716v-7.793
    c0-7.434,5.321-9.741,6.997-9.741h160.466c3.119,0,7.57,1.492,7.57,9.9L600.418,109.286z"/>
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
    c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
                                </div>
                            </div>
                            <div class="content-phone-model">
                                <div class="ratio-box">

                                    <button  data-toggle="modal" data-target=".bd-example-modal-lg"  class="btn-play"></button> 

                                    <div style="background-image: url(
                                    <?php the_field( ' homepage_landing_mobile_img' ); ?>
                                    );" class="phone-screen-img">
                                        
                                    </div>
                                    
                                    <?php if ( get_field( 'homepage_mobile_video' ) ) { ?>
                                    <div class="mobile-video">
                                        <video autoplay="true" class="video-bg" data-autoplay="" loop="true" muted="" poster="" preload="true" volume="0"> <source src="<?php the_field( 'homepage_mobile_video' ); ?>" type="video/mp4"> </video>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="lower-phone-model">
                                <div class="ratio-box">
                                  <svg  class="stroke-3 stroke-grey-blue" width="1006.125px" height="195.555px" viewBox="0 0 1006.125 195.555" enable-background="new 0 0 1006.125 195.555">
                                    <path vector-effect="non-scaling-stroke"  class="fill-white" d="M3.399,0c0,0,0,17.225,0,57.636
                                        c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
                                        c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
                                    <path vector-effect="non-scaling-stroke"  class="fill-grey-light stroke-none"  d="M560.833,97.366c0,37.693-30.557,68.25-68.25,68.25c-26.096,0-48.771-14.646-60.254-36.167
                                        c0,0,43.087,5.259,78.587-21.241c25.725-19.203,19.826-67.436,19.826-67.436C548.897,53.037,560.833,73.808,560.833,97.366z"/>
                                    <path vector-effect="non-scaling-stroke"  d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
                                        h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
                                        z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="webapp-showcase">
                        <div class="desktop-model landing-webapp disabled">
                            <div class="upper-webapp-model">
                                <div class="upper-webapp-model-balls">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="upper-webapp-model-tab">
                                    <div class="ratio-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="955" height="264" viewBox="0 0 954.8 264"><path d="M951.1 264L906 88.1c0 0-18-85-107-85s-323 0-323 0h2.1c0 0-234 0-323 0s-107 85-107 85L3 264" vector-effect="non-scaling-stroke"  style="fill:none;stroke-width:4;stroke:#D7DAE3"/><path d="M246.8 141.6c1.2 1.2 1.2 3.1 0 4.2l-40.1 40.1c-1.2 1.2-3.1 1.2-4.2 0l-40.1-40.1c-1.2-1.2-1.2-3.1 0-4.2l40.1-40.1c1.2-1.2 3.1-1.2 4.2 0L246.8 141.6z" vector-effect="non-scaling-stroke" style="fill:none;stroke-width:2;stroke:#D7DAE3"/><path d="M348.6 116.1h-8.4v-7.3h8.4V116.1zM348.6 162.5h-8.4v-37.2h8.4V162.5z" fill="#D7DAE3"/><path d="M365.3 144.4c0-5.9 1.3-10.7 3.8-14.4 2.5-3.6 6.1-5.5 10.7-5.5 2.2 0 4.1 0.4 5.7 1.3 1.7 0.9 3.1 2.2 4.2 3.9l1-4.5h6.8v51.6h-8.4v-17.8c-1.1 1.4-2.5 2.5-4.1 3.2 -1.6 0.7-3.3 1.1-5.3 1.1 -4.6 0-8.1-1.7-10.7-5 -2.5-3.3-3.8-7.7-3.8-13.1V144.4zM373.7 145.1c0 3.4 0.7 6.2 2 8.3 1.3 2.1 3.4 3.1 6.3 3.1 1.7 0 3.1-0.3 4.3-1 1.2-0.7 2.2-1.7 2.9-2.9v-17.3c-0.8-1.2-1.8-2.2-3-2.9 -1.2-0.7-2.6-1-4.2-1 -2.8 0-4.9 1.2-6.3 3.7s-2 5.6-2 9.4V145.1z" fill="#D7DAE3"/><path d="M448.5 145.1c0 5.4-1.3 9.8-3.8 13.1 -2.5 3.3-6.1 5-10.7 5 -2.3 0-4.3-0.5-6-1.4 -1.7-0.9-3.1-2.3-4.3-4.1l-0.8 4.8h-7v-53.7h8.4v20.7c1.1-1.6 2.5-2.8 4.1-3.6 1.6-0.8 3.5-1.3 5.6-1.3 4.7 0 8.3 1.8 10.8 5.4 2.5 3.6 3.8 8.4 3.8 14.4V145.1zM440.1 144.4c0-3.9-0.7-7-2-9.4 -1.3-2.4-3.4-3.6-6.3-3.6 -1.9 0-3.4 0.4-4.7 1.2 -1.3 0.8-2.2 2-3 3.4v15.6c0.7 1.5 1.7 2.6 3 3.5 1.3 0.8 2.8 1.2 4.8 1.2 2.9 0 5-1 6.3-3 1.3-2 2-4.8 2-8.2V144.4z" fill="#D7DAE3"/><path d="M463.1 143.5c0-5.5 1.5-10.1 4.5-13.6 3.1-3.6 7.2-5.3 12.5-5.3 5.3 0 9.5 1.8 12.6 5.3 3.1 3.5 4.6 8.1 4.6 13.6v0.7c0 5.6-1.5 10.2-4.6 13.7 -3 3.5-7.2 5.3-12.5 5.3 -5.3 0-9.5-1.8-12.6-5.3 -3-3.5-4.5-8.1-4.5-13.7V143.5zM471.5 144.2c0 3.6 0.7 6.6 2.1 8.9 1.4 2.3 3.6 3.4 6.6 3.4 2.9 0 5.1-1.1 6.5-3.4 1.5-2.3 2.2-5.2 2.2-8.9v-0.7c0-3.6-0.7-6.5-2.2-8.8 -1.4-2.3-3.6-3.5-6.6-3.5 -2.9 0-5.1 1.2-6.5 3.5 -1.4 2.3-2.1 5.2-2.1 8.8V144.2z" fill="#D7DAE3"/><path d="M526 138l6.9-12.8h9.6l-11.7 18.4 12 18.8h-9.5l-7.2-13.1 -7.2 13.1h-9.6l12-18.8 -11.7-18.4h9.5L526 138z" fill="#D7DAE3"/><path d="M569.7 147.6l0.8 3.7h0.2l8.2-26h9.2l-15.4 42.9c-1 2.6-2.4 4.8-4.2 6.6s-4.3 2.8-7.6 2.8c-0.7 0-1.4-0.1-2.2-0.2s-1.6-0.3-2.3-0.5l0.9-6.5c0.3 0 0.7 0.1 1.3 0.1 0.6 0 1 0.1 1.2 0.1 1.5 0 2.7-0.5 3.6-1.5 0.9-1 1.6-2.2 2.2-3.6l1.4-3.4 -13.5-36.8h9.1L569.7 147.6z" fill="#D7DAE3"/><path d="M605.9 162.5h-8.3v-8h8.3V162.5z" fill="#D7DAE3"/><path d="M640.7 156.5c2 0 3.8-0.6 5.2-1.8 1.4-1.2 2.1-2.7 2.1-4.5h7.6l0.1 0.2c0.1 3.5-1.3 6.5-4.3 9 -2.9 2.5-6.5 3.8-10.7 3.8 -5.5 0-9.7-1.8-12.6-5.3 -2.9-3.5-4.4-8-4.4-13.4v-1.2c0-5.4 1.5-9.9 4.4-13.4 2.9-3.5 7.1-5.3 12.6-5.3 4.5 0 8.1 1.3 10.9 3.9 2.8 2.6 4.1 5.9 4 9.9l-0.1 0.2h-7.6c0-2-0.7-3.8-2-5.2 -1.3-1.4-3.1-2.1-5.2-2.1 -3.1 0-5.4 1.1-6.7 3.4 -1.3 2.3-2 5.1-2 8.6v1.2c0 3.5 0.7 6.4 2 8.6C635.4 155.4 637.6 156.5 640.7 156.5z" fill="#D7DAE3"/><path d="M669.8 143.5c0-5.5 1.5-10.1 4.5-13.6 3.1-3.6 7.2-5.3 12.5-5.3 5.3 0 9.5 1.8 12.6 5.3 3.1 3.5 4.6 8.1 4.6 13.6v0.7c0 5.6-1.5 10.2-4.6 13.7 -3 3.5-7.2 5.3-12.5 5.3 -5.3 0-9.5-1.8-12.6-5.3 -3-3.5-4.5-8.1-4.5-13.7V143.5zM678.1 144.2c0 3.6 0.7 6.6 2.1 8.9 1.4 2.3 3.6 3.4 6.6 3.4 2.9 0 5.1-1.1 6.5-3.4 1.5-2.3 2.2-5.2 2.2-8.9v-0.7c0-3.6-0.7-6.5-2.2-8.8 -1.4-2.3-3.6-3.5-6.6-3.5 -2.9 0-5.1 1.2-6.5 3.5 -1.4 2.3-2.1 5.2-2.1 8.8V144.2z" fill="#D7DAE3"/><path d="M727.8 125.3l0.4 4.9c1.2-1.8 2.7-3.1 4.6-4.1s4-1.4 6.4-1.4c2.4 0 4.5 0.6 6.3 1.7 1.7 1.1 3.1 2.8 3.9 5 1.1-2.1 2.7-3.7 4.5-4.9 1.9-1.2 4.1-1.8 6.6-1.8 3.7 0 6.7 1.3 8.9 3.8 2.2 2.6 3.3 6.4 3.3 11.7v22.4h-8.4v-22.5c0-3.2-0.5-5.4-1.6-6.7 -1.1-1.3-2.7-1.9-4.9-1.9 -1.8 0-3.3 0.5-4.5 1.4s-2.1 2.3-2.7 3.9c0 0.3 0 0.6 0 0.9 0 0.3 0 0.5 0 0.7v24.1h-8.4v-22.5c0-3.1-0.6-5.2-1.7-6.6 -1.1-1.3-2.7-2-4.9-2 -1.7 0-3.1 0.3-4.3 1 -1.2 0.7-2.1 1.6-2.8 2.8v27.3h-8.4v-37.2H727.8z" fill="#D7DAE3"/></svg>
                                    </div> 
                                </div>
                                <div class="upper-webapp-model-menu">
                                    <div class="ratio-box">
                                        <span></span><span></span><span></span>     
                                    </div>
                                </div>
                            </div>
                            <div class="content-webapp-model">
                                <div class="ratio-box">

                                    <button data-toggle="modal" data-target=".bd-example-modal-lg" class="btn-play"></button>

                                    <div style="background-image: url(<?php the_field( 'homepage_landing_webapp_img' ); ?>);" class="webapp-screen-img"></div>
                                    
                                    <?php if ( get_field( 'homepage_landing_webapp_video ' ) ) { ?>
                                    <div class="webapp-video">
                                        <video autoplay="true" class="video-bg" data-autoplay="" loop="true" muted="" poster="" preload="true" volume="0"> <source src="
                                        <?php the_field( 'homepage_landing_webapp_video ' ); ?>
                                        " type="video/mp4"> </video>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="  col-md-5">
                    <hgroup>
                        <h1 class="heading-page">
                            <?php the_field( 'homepage_landing_heading_text'); ?>                         
                        </h1>
                        <h2 class="subheading-page">
                            <?php the_field( 'homepage_landing_subheading_text' ); ?>
                        </h2>
                    </hgroup> 

                    <a href="<?php echo get_option("iqboxy_singingoogle");?>" class="btn btn-primary">
                        Sing up with <svg class="google-icon" svg-fallback="google-icon.png" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 92" width="272" height="92"><path d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/><path d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/><path d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z"/><path d="M225 3v65h-9.5V3h9.5z"/><path d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-23.27-7.98l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z"/><path d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.89.36 34.91.36 15.93 16.32.47 35.3.47c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86 0-24.7 11.17-24.7 25.03 0 13.86 10.84 25.03 24.7 25.03 8.99 0 14.11-3.61 17.39-6.89 2.66-2.66 4.41-6.46 5.1-11.65l-22.49.01z"/></svg>
                    </a>

                    <div class="clients-box">
                        <p class="clients-box-title">
                        <?php the_field( 'homepage_landing_clients_text' ); ?>                            
                        </p>
                        <div class="clients-box-carousel">
                            <div id="clientsCarousel" class="owl-carousel  owl-theme"> 

                                <?php $homepage_landing_clients_logos = get_field( 'homepage_landing_clients_logos' ); ?>
                                <?php if ( $homepage_landing_clients_logos ): ?>
                                    <?php foreach ( $homepage_landing_clients_logos as $post ):  ?>
                                        <?php setup_postdata ($post); ?>


                                <div style="background-image:url(<?php echo $post->guid; ?>)" class="item">
                                </div>
                                             
                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>                              
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


      <!-- Do special_cat stuff... -->
<?php endwhile; ?>
 

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div  style="position: relative; padding-top: 56%;"  class="modal-content">
      <iframe style="position:absolute; top:0; left:0; margin:auto; width:100%; height: 100%;" width="560" height="315" src="https://www.youtube.com/embed/2UnKzxV_RHE" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div> 