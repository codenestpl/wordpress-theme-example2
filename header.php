<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- build:css -->
   	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo TEMPL;?>/assets/css/style.css">
    <!-- endbuild -->
    <?php global $page_id;  $page_id =ID; wp_head();?> 
  </head>
  <body>
  	<div class="sidebar-nav" off-canvas="sidebarMenu right reveal">
		<nav>
            <?php wp_nav_menu(array('theme_location'  => 'main-menu', 'container'=>'' )); ?> 
            <div class="sidebar-btns">            	
				<a href="<?php echo STARTFREE;?>" class="btn btn-secondary">LOGIN</a>
             	<a href="<?php echo LOGIN;?>" class="btn btn-primary">START FREE</a>
            </div>
        </nav>
	</div>
	 

 	<header class="main-navbar container">
 		<a class="header-logo" href="<?php echo HOME;?>">
			<svg svg-fallback="iqboxy-logo.png" xmlns="http://www.w3.org/2000/svg" width="291" height="100" viewBox="0 0 291 100"><polygon points="43.1 28.3 0 64.4 0 36.2 43.1 0.1 " fill="#8F3E97"/><polygon points="43.1 28.3 86.1 64.4 86.1 36.2 43.1 0.1 " fill="#55BE8A"/><polygon points="43.1 72.3 86.1 36.2 86.1 64.4 43.1 100.5 " fill="#8F3E97"/><polygon points="43.1 72.3 16.8 50.3 0 36.2 0 64.4 43.1 100.5 " fill="#55BE8A"/><polygon points="16.8 50.3 0 64.4 0 36.4 " fill="#763193"/><polyline points="86.1 36.4 69.3 50.3 86.1 64.4 " fill="#763193"/><g class="logo-text"><path d="M117.5 72.6V29.1h9.2v43.5H117.5z" fill="#2B2A2A"/><path d="M160.5 64.9c-1.1 0.3-2.7 0.6-4 0.6 -3.7 0-6.4-1.2-8.3-3.7 -1.8-2.5-2.8-6.1-2.8-11 0-4.9 0.9-8.5 2.8-11s4.6-3.7 8.3-3.7c7.3 0 11 4.9 11 14.7 0 3.1-0.4 5.6-1.1 7.7l6.7 7.3c0 0 0.1-0.1 0.1-0.1 0.4-0.6 0.8-1.3 1.2-2 1.8-3.5 2.7-7.8 2.7-12.9 0-7.2-1.8-12.8-5.3-16.6 -3.5-3.9-8.7-5.8-15.4-5.8s-11.8 1.9-15.4 5.7 -5.4 9.4-5.4 16.6 1.8 12.8 5.4 16.7c3.6 3.9 8.7 5.8 15.4 5.8h0.7l8 9.8h11.8l-10.5-11.7L160.5 64.9z" fill="#2B2A2A"/><path d="M191.2 65.7v-27.4h8.9c2.9 0 5.1 0.6 6.7 1.9 1.6 1.2 2.4 3.1 2.4 5.6 0 1.2-0.4 2.3-1.2 3.3s-1.8 1.7-3.1 2.1c1.7 0.4 3 1.2 3.9 2.4s1.4 2.7 1.4 4.4c0 2.5-0.8 4.4-2.4 5.7s-3.8 2-6.6 2H191.2zM194.9 49.9h6c1.4 0 2.5-0.4 3.4-1.1s1.3-1.8 1.3-3.2c0-1.5-0.5-2.6-1.4-3.3 -0.9-0.7-2.3-1.1-4-1.1h-5.2V49.9zM194.9 52.8v9.9h6.4c1.7 0 3-0.4 3.9-1.2 0.9-0.8 1.4-2 1.4-3.5 0-1.6-0.4-2.9-1.2-3.8 -0.8-0.9-2-1.4-3.6-1.4H194.9z" fill="#2B2A2A"/><path d="M238.3 54.4c0 3.3-1 6.1-3.1 8.3 -2.1 2.2-4.8 3.3-8.1 3.3 -3.2 0-5.8-1.1-7.8-3.3 -2-2.2-3-5-3-8.3v-4.9c0-3.3 1-6.1 3-8.3 2-2.2 4.6-3.3 7.8-3.3 3.3 0 6 1.1 8.1 3.3 2.1 2.2 3.1 5 3.1 8.3V54.4zM234.6 49.5c0-2.5-0.7-4.6-2-6.2 -1.4-1.6-3.2-2.4-5.5-2.4 -2.2 0-3.9 0.8-5.2 2.4 -1.3 1.6-1.9 3.7-1.9 6.2v4.9c0 2.5 0.6 4.6 1.9 6.2 1.3 1.6 3 2.4 5.2 2.4 2.3 0 4.1-0.8 5.5-2.4 1.3-1.6 2-3.7 2-6.2V49.5z" fill="#2B2A2A"/><path d="M254 49l6.4-10.7h4.5l-8.7 13.6 8.9 13.8h-4.4l-6.6-10.9 -6.6 10.9h-4.5l8.9-13.8 -8.7-13.6h4.4L254 49z" fill="#2B2A2A"/><path d="M279.6 52.2l7.1-13.9h4.2L281.4 56v9.6h-3.7v-9.9l-9.5-17.5h4.2L279.6 52.2z" fill="#2B2A2A"/></g></svg>
	    </a>
		
		<div class="nav-box  collapse-box">
		    <div class="main-menu"> 
		    	<nav>
					<?php wp_nav_menu(array('theme_location'  => 'main-menu', 'container'=>'' )); ?> 
		    	</nav>
		    </div>
		    <div class="search-box">							
		    	<form role="search" method="get" action="<?php echo HOME;?>"> 
		    		<div id="searchMenu" class="to-collapse">
		    			<input name="s" required placeholder="Search..." type="text">
		    		</div>
		    		
		    		<button class="btn btn-search"> 
	    				<svg  svg-fallback="search-icon.png" class="search-icon"  xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><circle cx="12.6" cy="12.5" r="10.3"/><line x1="20.6" y1="20.9" x2="28.6" y2="28.3"/></svg> 			
		    		</button>		    		
		    	</form>
		    	<button class="btn-invisible-collapse btn-collapse btn-close">
		    		<svg class="close-icon" svg-fallback="close-icon.png"  xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><line x1="6.9" y1="5.8" x2="25.9" y2="23.2"/><line x1="8.2" y1="24.2" x2="25.5" y2="5.2"/></svg> <span>CLOSE</span>
		    	</button>
		    </div> 
		</div>
		
		<div id="toggleSidebarMenu" class="menu-icon" >
			<span></span>
			<span></span>
			<span></span>
		</div>

 	</header>
 	<main>