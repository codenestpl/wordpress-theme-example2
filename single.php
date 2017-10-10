
 <?php get_header('sub'); ?>

<style type="text/css">
  .article-photo-box img {
    width: 100%;
  } 
  .social-media svg {
    position: relative;
    top: 8px;
  }
  .navigation-article-page {
    position: relative;
    top: 14px;
  }
    .article-photo-box.container-fluid {
        padding:0; 
        height: 50vh;
    }

     .article-photo-box.container-fluid img {
        visibility: hidden;
     }

     .article-header h2 {
        margin:0;
     }

     .subpage-header { margin-bottom: 20px;}

     article.single .social-media {
        width:50px;
        overflow:hidden; 
     }
    

    article.single.vertical  .social-media{
        position: relative;
        top: 0;
        left:0;
        width: 100%;
    }
     article.single.vertical .social-media ul li {
        display: inline-block;
        float: left;
     }

     .social-media .subheading-section {
        float: left;
        display: inline-block;
            font-size: 1rem;
                color: #1c2328;
                position: relative;
                top: 10px;
                margin-right: 15px;
     }
     .single.vertical  .article-info div {
            top: 25px;
        } 
.main.single img { 
    height: auto;
}
    @media (max-width: 991px){
 
article.single:not(.vertical) .social-media {
    display:none;
}

article.single.vertical  .social-media {
    margin: -15px 0 30px;
}
}


</style>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<section>
    <div class="container"> 
        <div class="row article-header">                   
            <div class="col-lg-12">  
             <article class="single">            
                 <div class="article-info">
                <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                <div>
                   <p class="p-smallbox"><strong><?php the_author();?></strong></p> 
                   <p class="p-smallbox"><?php the_author_meta('description'); ?></p>
                 <p class="p-smallbox"><?php the_date("M d, Y"); ?> &#x2022; <?php the_field('post_readtime');?> min read</p> 
                </div>
                </div> 

                <h1 class="heading-page"><?php the_title();?></h1> 
                <h2 class="subheading-page"><?php the_field('post_lead');?></h2> 
            </article>
            </div> 
        </div> 

    </div>          
</section>

     <div class="container-fluid article-photo-box" style="background:no-repeat center url(<?php the_post_thumbnail_url('full');?> ); background-size: cover; "> 
          <?php the_post_thumbnail('medium');?>           
    </div>   

 <section>
    <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    

                    <article class="single main">
                       
                            
                  
                          <?php the_content();?>
                       
                        <div class="social-media sticker-socialmedia">
                            <ul  id="sticker" >                                
                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 288.861 288.861" style="enable-background:new 0 0 288.861 288.861;" xml:space="preserve">
  
    <path class="fil0" d="M167.172,288.861h-62.16V159.347H70.769v-59.48h34.242v-33.4C105.011,35.804,124.195,0,178.284,0
        c19.068,0,33.066,1.787,33.651,1.864l5.739,0.746l-1.382,55.663l-6.324-0.058c-0.013,0-14.223-0.135-29.724-0.135
        c-11.536,0-13.066,2.847-13.066,14.171v27.629h50.913l-2.821,59.48h-48.086v129.501H167.172z M117.858,276.007h36.453V146.5h48.677
        l1.607-33.779h-50.284V72.238c0-13.368,3.078-27.025,25.919-27.025c9.178,0,17.899,0.045,23.509,0.09l0.778-31.292
        c-5.675-0.508-15.116-1.157-26.247-1.157c-44.544,0-60.419,27.693-60.419,53.613v46.254H83.61V146.5h34.242v129.507H117.858z"/>
 
</svg>
</a>
</li>


                                <li><a target="_blank" href="https://twitter.com/intent/tweet?text=By%20IGBoxy%20<?php echo the_permalink();?>"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 341.117 341.117" style="enable-background:new 0 0 341.117 341.117;" xml:space="preserve">
 
    <path class="fil0" d="M115.394,304.407c-33.085,0-65.862-9.158-94.777-26.479L0,265.582l24.024,0.405c0.778,0.039,2.031,0.103,4.004,0.103
        c9.145,0,38.278-1.472,68.15-18.329c-22.455-6.677-41.01-24.036-48.651-46.762l-3.785-11.253l10.309,2.68
        c-16.523-12.693-27.333-32.205-28.516-53.953l-0.566-10.411l9.557,4.171c1.742,0.765,3.515,1.44,5.315,2.024
        c-13.573-18.998-21.787-48.355-4.659-79.538l4.717-8.593l5.996,7.757c28.728,37.141,71.325,59.789,117.778,62.899
        c-0.283-2.886-0.482-5.54-0.482-6.369c0-34.474,26.234-70.13,70.13-70.13c18.426,0,36.164,7.32,49.23,20.206
        c17.513-4.113,34.249-14.325,34.429-14.435l15.18-9.345l-5.733,16.883c-2.751,8.085-6.941,15.534-12.314,22.038
        c2.931-0.958,5.81-2.057,8.773-3.348l18.233-8.908l-7.661,16.453c-6.324,13.593-16.87,24.808-29.968,31.98
        c2.879,44.994-15.624,95.194-48.908,132.059c-24.705,27.372-68.703,60.084-138.016,60.528L115.394,304.407z M47.841,277.472
        c21.427,9.248,44.409,14.075,67.546,14.075l1.099-0.006c64.628-0.411,105.586-30.836,128.556-56.286
        c32.031-35.483,49.397-83.999,45.309-126.621l-0.431-4.524l4.113-1.915c6.523-3.04,12.365-7.262,17.269-12.397
        c-5.488,1.388-11.343,2.423-18.092,3.239l-4.929,0.598l-3.843-9.743l4.473-3.445c6.266-3.67,11.729-8.451,16.144-14.049
        c-6.986,2.976-15.232,5.887-23.477,7.423l-3.522,0.656l-2.41-2.648c-10.836-11.89-26.254-18.702-42.321-18.702
        c-35.849,0-57.276,29.12-57.276,57.276c0,1.703,0.848,9.454,1.15,11.446l2.918,8.297l-9.28-0.199
        c-49.744-1.073-96.023-22.873-128.511-60.181c-12.854,33.754,8.728,60.721,19.036,68.799l15.071,11.819l-19.146-0.334
        c-5.996-0.103-11.864-0.919-17.552-2.436c5.058,22.558,22.886,40.682,46.048,45.656l25.354,5.45l-24.962,7.025
        c-4.351,1.221-9.287,1.838-14.672,1.838c-2.519,0-4.929-0.135-7.153-0.341c10.039,17.674,28.734,29.551,49.416,30.56l18.072,0.887
        L117.264,249.4C92.283,267.774,66.37,274.85,47.841,277.472z"/>

</svg>
</a></li> 

<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink();?>&source=IQBoxy">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 288.693 288.693" style="enable-background:new 0 0 288.693 288.693;" xml:space="preserve">
 
    <path class="fil0" d="M74.609,288.359H4.544V91.698h70.065V288.359z M17.397,275.506h44.358V104.552H17.397V275.506z M39.589,79.423
        C17.764,79.423,0,61.678,0,39.872S17.764,0.334,39.589,0.334c21.819,0,39.564,17.738,39.564,39.538
        C79.153,61.685,61.408,79.423,39.589,79.423z M39.589,13.188c-14.743,0-26.736,11.973-26.736,26.684
        c0,14.724,11.992,26.697,26.736,26.697c14.73,0,26.71-11.98,26.71-26.697C66.299,25.161,54.32,13.188,39.589,13.188z
         M288.693,288.359h-69.969v-95.798c0-28.67-3.483-42.314-23.297-42.314c-20.045,0-27.854,11.427-27.854,40.759v97.354H97.63V91.698
        h67.642v13.914c10.771-10.148,27.096-18.477,48.439-18.477c66.068,0,74.975,47.514,74.975,93.992v107.232H288.693z
         M231.578,275.506h44.262v-94.378c0-50.091-10.392-81.139-62.122-81.139c-25.515,0-42.019,14.145-48.4,26.254l-1.806,3.432h-11.086
        v-25.116H110.49v170.954h44.236v-84.506c0-14.66,0-53.613,40.708-53.613c36.151,0,36.151,35.887,36.151,55.168v82.945H231.578z"/> 
</svg>
</a></li> 

                            </ul>
                        </div>
                    </article>
                </div>
            </div>
           
        </div>
    </section>
    
    <section class="category-box"> 
    <div class="container"> 
           <div class="row category-header"> 
            </div>
            <div class="row">                
            

            <div class="col-md-6">  
            <article class="single vertical">
                 <div class="social-media">
                  <h3 class="subheading-section">SHARE </h3>
                            <ul >                                
                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 288.861 288.861" style="enable-background:new 0 0 288.861 288.861;" xml:space="preserve">
  
    <path class="fil0" d="M167.172,288.861h-62.16V159.347H70.769v-59.48h34.242v-33.4C105.011,35.804,124.195,0,178.284,0
        c19.068,0,33.066,1.787,33.651,1.864l5.739,0.746l-1.382,55.663l-6.324-0.058c-0.013,0-14.223-0.135-29.724-0.135
        c-11.536,0-13.066,2.847-13.066,14.171v27.629h50.913l-2.821,59.48h-48.086v129.501H167.172z M117.858,276.007h36.453V146.5h48.677
        l1.607-33.779h-50.284V72.238c0-13.368,3.078-27.025,25.919-27.025c9.178,0,17.899,0.045,23.509,0.09l0.778-31.292
        c-5.675-0.508-15.116-1.157-26.247-1.157c-44.544,0-60.419,27.693-60.419,53.613v46.254H83.61V146.5h34.242v129.507H117.858z"/>
 
</svg>
</a>
</li>


                                <li><a target="_blank" href="https://twitter.com/intent/tweet?text=By%20IGBoxy%20<?php echo the_permalink();?>"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 341.117 341.117" style="enable-background:new 0 0 341.117 341.117;" xml:space="preserve">
 
    <path class="fil0" d="M115.394,304.407c-33.085,0-65.862-9.158-94.777-26.479L0,265.582l24.024,0.405c0.778,0.039,2.031,0.103,4.004,0.103
        c9.145,0,38.278-1.472,68.15-18.329c-22.455-6.677-41.01-24.036-48.651-46.762l-3.785-11.253l10.309,2.68
        c-16.523-12.693-27.333-32.205-28.516-53.953l-0.566-10.411l9.557,4.171c1.742,0.765,3.515,1.44,5.315,2.024
        c-13.573-18.998-21.787-48.355-4.659-79.538l4.717-8.593l5.996,7.757c28.728,37.141,71.325,59.789,117.778,62.899
        c-0.283-2.886-0.482-5.54-0.482-6.369c0-34.474,26.234-70.13,70.13-70.13c18.426,0,36.164,7.32,49.23,20.206
        c17.513-4.113,34.249-14.325,34.429-14.435l15.18-9.345l-5.733,16.883c-2.751,8.085-6.941,15.534-12.314,22.038
        c2.931-0.958,5.81-2.057,8.773-3.348l18.233-8.908l-7.661,16.453c-6.324,13.593-16.87,24.808-29.968,31.98
        c2.879,44.994-15.624,95.194-48.908,132.059c-24.705,27.372-68.703,60.084-138.016,60.528L115.394,304.407z M47.841,277.472
        c21.427,9.248,44.409,14.075,67.546,14.075l1.099-0.006c64.628-0.411,105.586-30.836,128.556-56.286
        c32.031-35.483,49.397-83.999,45.309-126.621l-0.431-4.524l4.113-1.915c6.523-3.04,12.365-7.262,17.269-12.397
        c-5.488,1.388-11.343,2.423-18.092,3.239l-4.929,0.598l-3.843-9.743l4.473-3.445c6.266-3.67,11.729-8.451,16.144-14.049
        c-6.986,2.976-15.232,5.887-23.477,7.423l-3.522,0.656l-2.41-2.648c-10.836-11.89-26.254-18.702-42.321-18.702
        c-35.849,0-57.276,29.12-57.276,57.276c0,1.703,0.848,9.454,1.15,11.446l2.918,8.297l-9.28-0.199
        c-49.744-1.073-96.023-22.873-128.511-60.181c-12.854,33.754,8.728,60.721,19.036,68.799l15.071,11.819l-19.146-0.334
        c-5.996-0.103-11.864-0.919-17.552-2.436c5.058,22.558,22.886,40.682,46.048,45.656l25.354,5.45l-24.962,7.025
        c-4.351,1.221-9.287,1.838-14.672,1.838c-2.519,0-4.929-0.135-7.153-0.341c10.039,17.674,28.734,29.551,49.416,30.56l18.072,0.887
        L117.264,249.4C92.283,267.774,66.37,274.85,47.841,277.472z"/>

</svg>
</a></li> 

<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink();?>&source=IQBoxy">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 288.693 288.693" style="enable-background:new 0 0 288.693 288.693;" xml:space="preserve">
 
    <path class="fil0" d="M74.609,288.359H4.544V91.698h70.065V288.359z M17.397,275.506h44.358V104.552H17.397V275.506z M39.589,79.423
        C17.764,79.423,0,61.678,0,39.872S17.764,0.334,39.589,0.334c21.819,0,39.564,17.738,39.564,39.538
        C79.153,61.685,61.408,79.423,39.589,79.423z M39.589,13.188c-14.743,0-26.736,11.973-26.736,26.684
        c0,14.724,11.992,26.697,26.736,26.697c14.73,0,26.71-11.98,26.71-26.697C66.299,25.161,54.32,13.188,39.589,13.188z
         M288.693,288.359h-69.969v-95.798c0-28.67-3.483-42.314-23.297-42.314c-20.045,0-27.854,11.427-27.854,40.759v97.354H97.63V91.698
        h67.642v13.914c10.771-10.148,27.096-18.477,48.439-18.477c66.068,0,74.975,47.514,74.975,93.992v107.232H288.693z
         M231.578,275.506h44.262v-94.378c0-50.091-10.392-81.139-62.122-81.139c-25.515,0-42.019,14.145-48.4,26.254l-1.806,3.432h-11.086
        v-25.116H110.49v170.954h44.236v-84.506c0-14.66,0-53.613,40.708-53.613c36.151,0,36.151,35.887,36.151,55.168v82.945H231.578z"/> 
</svg>
</a></li> 

                            </ul>
                        </div>
                        </article> 
            </div>       
<div class="col-md-6">
            <article class="single vertical">            
                 <div class="article-info">
                        <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                <div>
                   <p class="p-smallbox"><strong><?php the_author();?></strong></p> 
                   <p class="p-smallbox"><?php the_author_meta('description'); ?></p>   
                     <p>&nbsp;</p>            
                </div>
                </div>  
            </article>
            </div>    
            </div>
        </div>
    </section>

    <section class="category-box"> 
    <div class="container"> 
            <div class="row category-header">
                <div class="col-auto">
                <h3 class="subheading-section ">Related</h3>
                
                </div> 
            </div>
            <div class="row">                
                      

           <?php
               $related_ids = get_field('related_posts'); 
               $blog_posts_cat = new WP_Query( array( 'post_type' => 'post', 'post_per_page' => 3, 'post__in' => $related_ids)  );  
           ?>
            <?php while ( $blog_posts_cat->have_posts() ) : $blog_posts_cat->the_post(); ?>

                <div class="col-md-4">
                  <div class="h-blog-box">
                    <?php $link_img_art= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id  ), 'your_thumb_handle' ); ?>
                    <div style="background-image: url('<?php echo $link_img_art[0]; ?>');" class="article-thumbnail">
                         <a href="<?php the_permalink();?>"></a>                      
                    </div>
                    <div class="article-text">
                        <h3 class="heading-box"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        
                         <div class="article-info">
                             <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                            <div>
                               <p class="p-smallbox"><strong><?php the_author();?></strong></p> 
                             <p class="p-smallbox"><?php the_date("M d, Y"); ?> &#x2022; <?php the_field('post_readtime');?></p> 
                            </div>
                        </div> 
                    </div>
                </div>
                </div>

      <?php endwhile; ?>  
                
            </div>
        </div>
    </section>

    <section>
    </section>
<?php endwhile; ?>
 
<?php endif; ?>
<?php get_footer(); ?>


<script>
  $(document).ready(function(){
    $(".sticker-socialmedia").height($(".col-lg-12 .single.main").height())
    var spacingBottom = $(document).height() - $(".sticker-socialmedia").height() - $(".sticker-socialmedia").offset().top;
 
    $("#sticker").sticky({topSpacing:100, bottomSpacing: spacingBottom}); 
  });
</script>