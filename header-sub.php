 <?php get_header(); ?>

 <?php 
 $page_quried = get_queried_object(); 
 global $query_string;
 ?>
  <section class="subpage-header <?php echo (is_single())?'no-heading':'';?>" >
        <div class="container">
            <div class="row">
			
			<?php if(!is_single()) {?>
           
            <div class="col-lg-12">

                <?php if(!is_search()) {?> 

                    <?php if(!get_field('hide_headings')){?> 
                    <hgroup>    

                        <h1 class="heading-page"> 
                        <?php if(is_category( )) {
                            echo $page_quried->name;
                        }else{
                            the_title();
                        }
                        ?>
                        </h1>
                         <h2 class="subheading-page">
                            <?php if(is_category( )) {
                                the_field('page_subheading', 'category_'.$page_quried->term_id);
                            }else{
                               the_field('page_subheading', $page_id);
                            }
                            ?> 
                             
                         </h2>
                    </hgroup>
                    <?php }; ?>

                    <?php } else {?>

                          <hgroup>                       
                        <h1 class="heading-page"> 
                         <?php printf( __( 'Search Results for: %s'), get_search_query() ); ?>
                        </h1>
                         <h2 class="subheading-page">
                            Results: <?php echo $wp_query->found_posts?>                         
                         </h2>
                    </hgroup>

                    <?php };?>
                </div>
            </div> 
			<?php };?>

             <?php if(!is_search()) {?> 
            <div class="row">
                <div class="col-lg-12">

                    <svg class="swipe-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255 255"><line x1="63.7" y1="0.2" x2="63.7" y2="0.2" fill="none"/><path d="M220 133.8c-4.8-28.6-23.3-33.7-32.1-34.5 -6.6-8.7-16.1-13.4-27-13.4 -2.3 0-4.7 0.2-7.1 0.6 -6.4-7.7-15.3-11.9-25.5-11.9 -7.6 0-14.4 2.4-19.1 5.1L90.4 20.1C86.5 7.8 76.3 0 63.7 0c0 0 0 0 0 0 -9.5 0-18.4 4.5-23.9 12 -5.3 7.2-6.6 16.2-3.8 25.3l23.9 75.3c-3.4 2-6.4 4.6-8.9 7.7 -4.9 6.2-7.8 14.3-8.7 24.2 -1.3 14.7 3.6 31.2 14.5 48.8 7.4 11.9 15.6 21.2 19 24.8l11.2 26.3C89.7 250.9 96 255 103 255h74.9c8.5 0 15.8-6 17.2-14.4 0-0.2 0.1-0.3 0.1-0.5l3.1-26.2c0.1-0.3 0.3-0.7 0.5-1.1C215.6 174.5 222.5 148.7 220 133.8zM186.9 210.1c-0.2 0.4-0.3 0.8-0.4 1.2l-3.3 27.3c-0.4 2.6-2.7 4.4-5.4 4.4h-74.9c-2.2 0-4.2-1.2-5-3.2L86.3 212.3c-0.3-0.6-0.6-1.1-1.1-1.6 -4.8-5-33.6-36.5-31-65.1 1.5-17 9.8-22.5 15.4-24.2 2.8-0.9 4.4-4 3.5-6.8L47.4 33.7c-4-12.8 6.2-21.5 16.3-21.5 6.4 0 12.7 3.5 15.3 11.7l22 69c0.8 2.5 3 3.8 5.3 3.8 1.6 0 3.1-0.7 4.2-2.1 0.9-1.2 2-2.4 3.3-3.4 2.9-2.2 8.5-4.6 14.7-4.6 6.3 0 13.2 2.5 18.1 10.2 1 1.6 2.8 2.6 4.6 2.6 0.5 0 1-0.1 1.5-0.2 2.2-0.6 5.1-1.2 8.3-1.2 6.2 0 13.5 2.2 18.9 10.7 1 1.6 2.7 2.6 4.6 2.6 0 0 0.1 0 0.1 0 0.2 0 0.4 0 0.6 0 6.4 0 19.4 2.8 23 24.6C211.6 156 189.4 204.1 186.9 210.1z"/><path d="M116.5 35h58.5l-12.9 12.9c-2.3 2.3-2.3 6.1 0 8.5 1.2 1.2 2.7 1.8 4.2 1.8 1.5 0 3.1-0.6 4.2-1.8l22.4-22.4c2.3-2.3 2.3-6.1 0-8.5L170 2.5c-2.3-2.3-6.1-2.3-8.5 0 -2.3 2.3-2.3 6.1 0 8.5L173.5 23h-57c-3.3 0-6 2.7-6 6S113.2 35 116.5 35z"/></svg>

                  
                        <?php wp_nav_menu( array( 
                        'theme_location' => 'blog-menu' ,
                        'menu_class' => 'blog-navigation owl-carousel' ,
                        ) ); ?>  
                    


                </div>
            </div>
            <?php } else {?> 


            <div class="anti-margin"></div>
            <?php };?>




    </div>
    </section>


    <style>
      .anti-margin  {
                margin-bottom: -135px;
        }
    
        .category-header.search-row {
            margin-bottom: -60px;
        }

       section .search-row input {  
            width: 20vw;
            min-width: 200px;
            border:none;
            border-bottom: 2px rgb(84, 191, 139) solid;
            font-size: 1rem;
            color:#1c2328;
            padding-bottom: 10px;
            position: relative;
            top: 5px;
            padding-right: 30px;
            outline-width: 0;
        }

      section    .search-row input:focus {
            border-color: #369e6b;
         }

      section   .search-row .btn.btn-search { 
                transform: scale(0.8,0.8);
                left: -63px;
                top: 3px;
                position: relative;
        } 

        .screen-reader-text {
            display: none;
        }

        .page-numbers {
            display: inline-block;
            width: 58px;
            border: 2px #e6e7e8 solid;
            font-weight: 700;
            font-size: 0.875em;
            color: #31393e;
            text-align: center;
                position: relative;
          
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            margin:0 3px;
        }

        .page-numbers:hover, .page-numbers.current {
            background: #54bf8b;
            border: 2px #54bf8b solid;
            color: #ffffff;
        }


        .page-numbers:hover    polyline {
                stroke:#fff !important;
            } 

      .pagination-row .pagination      {
                    margin: 50px auto -60px;
            }
</style>