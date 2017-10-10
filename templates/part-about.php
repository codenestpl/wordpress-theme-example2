<?php $page_part_query = new WP_Query( 'page_id=32&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>


  	<section class="howworks-section">
  		<div class="container">
  			<div class="row">  				
				<hgroup class="hgroup-section">
		  			<h3 class="subheading-section">
		  				<?php the_field( 'subheading_text' ); ?>
		  			</h3>
		  			<h2 class="heading-section">
		  				<?php the_field( 'about_heading' ); ?>
		  			</h2>
		  		</hgroup>
  			</div>
  		</div>  		
  		<div class="container howworks-container">
			<div class="row">

				<div id="collectAnimation" class="collect-anime-box col-md-4">

					<div id="collectAnimationPhone"  class="phone-model middle-phone ">
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
							<div class="collect-icon">
										<svg class="stroke-3" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><path style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;"  vector-effect="non-scaling-stroke" d="M9.5,36.5V14.25c0-1.657,1.343-3,3-3h23.167"/><path style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;"  vector-effect="non-scaling-stroke" d="M65.25,11.333H87.5c1.657,0,3,1.343,3,3V37.5"/><path  vector-effect="non-scaling-stroke" style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;" d="M90,63.583v22.25c0,1.657-1.343,3-3,3H63.833"/><path vector-effect="non-scaling-stroke" style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;" d="M34.25,88.75H12c-1.657,0-3-1.343-3-3V62.583"/><g></g><g></g><g></g><g></g><g></g><g></g></svg>
							</div>
							<div class="ratio-box">
								 <div class="centered"></div>
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

					<div id="collectAnimationDocuments" class="">
						<div class="document-icon">
						<svg  vector-effect="non-scaling-stroke"  class="ratio-box stroke-3 stroke-grey-blue"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667"   xml:space="preserve"><path  d="M59.167,3.667"/><g><path  vector-effect="non-scaling-stroke"  d="M127,155.333c0,1.65-1.35,3-3,3H7c-1.65,0-3-1.35-3-3V60.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H124c1.65,0,3,1.35,3,3V155.333z"/></g><g><path  vector-effect="non-scaling-stroke"   d="M142.5,14.083v155.25c0,1.65-1.35,3-3,3H13.083"/></g><g><path   vector-effect="non-scaling-stroke"  10;" d="M59.833,3.667V54c0,1.65-1.35,3-3,3H4.356"/></g><g><path  vector-effect="non-scaling-stroke"  id="path3673" class="filled" d="M82.292,106.77c-1.31-1.793-2.715-3.251-2.715-6.588V89.108c0-4.694,0.34-9.003-3.156-12.232c-2.752-2.619-7.324-3.543-10.821-3.543c-6.838,0-14.467,2.524-16.067,10.886c-0.169,0.888,0.483,1.353,1.074,1.484l6.963,0.746c0.652-0.033,1.123-0.667,1.249-1.306c0.597-2.882,3.036-4.266,5.776-4.266c1.478,0,3.156,0.535,4.031,1.846c1.007,1.46,0.872,3.467,0.872,5.153v0.928c-4.165,0.461-9.613,0.767-13.514,2.458c-4.499,1.928-7.658,5.851-7.658,11.617c0,7.39,4.701,11.084,10.754,11.084c5.108,0,7.904-1.193,11.844-5.167c1.307,1.874,1.735,2.778,4.119,4.74c0.535,0.282,1.224,0.255,1.698-0.169l0.002-0.002l0.016,0.018c1.435-1.263,4.04-3.502,5.509-4.72C82.855,108.185,82.751,107.415,82.292,106.77z M68.155,103.576c-1.141,2.005-2.957,3.232-4.976,3.232c-2.752,0-4.368-2.08-4.368-5.156c0-6.056,5.493-7.155,10.687-7.155v1.534h0.001C69.499,98.802,69.566,101.109,68.155,103.576z"/><g id="g3717" transform="matrix(4.0940394,0,0,4.0940394,105.99043,-56.114346)"><path  vector-effect="non-scaling-stroke"  id="path3719"  class="filled"  d="M-3.691,42.737c-1.68,1.24-4.116,1.899-6.215,1.899c-2.94,0-5.588-1.087-7.591-2.896c-0.157-0.142-0.017-0.336,0.172-0.226c2.162,1.258,4.835,2.015,7.596,2.015c1.863,0,3.91-0.386,5.794-1.186C-3.651,42.225-3.413,42.532-3.691,42.737L-3.691,42.737z"/><path  vector-effect="non-scaling-stroke"  id="path3721" class="filled" d="M-2.992,41.939c-0.215-0.275-1.421-0.13-1.962-0.065c-0.165,0.019-0.19-0.124-0.042-0.228c0.962-0.676,2.538-0.48,2.721-0.254c0.185,0.229-0.048,1.809-0.95,2.563c-0.139,0.116-0.27,0.055-0.209-0.098C-3.23,43.348-2.776,42.214-2.992,41.939z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
						</div>
						<div class="document-icon receipt"><svg class="ratio-box stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="154.875px" height="257.25px" viewBox="0 0 154.875 257.25" style="enable-background:new 0 0 154.875 257.25;" xml:space="preserve"><path   vector-effect="non-scaling-stroke"  d="M4.469,251.393c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l-0.002-0.042c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l0.141-0.11c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l-0.002-0.042c0,0,1.39-19.402,17.227-19.993c15.837-0.591,18.726,20.152,18.726,20.152h0.261V6.333v0.297c0,0-1.39,19.402-17.227,19.993S112.724,6.472,112.724,6.472l0.002,0.042c0,0-1.39,19.402-17.227,19.993S76.773,6.355,76.773,6.355l-0.141,0.11c0,0-1.39,19.402-17.227,19.993S40.68,6.307,40.68,6.307l0.002,0.042c0,0-1.39,19.402-17.227,19.993S4.729,6.19,4.729,6.19H4.469v245.5"/><line   vector-effect="non-scaling-stroke"  x1="23.844" y1="81.167" x2="98.177" y2="81.167"/><line  vector-effect="non-scaling-stroke" x1="113.677" y1="81.167" x2="119.344" y2="81.167"/><line  vector-effect="non-scaling-stroke"  x1="24.344" y1="117.167" x2="98.677" y2="117.167"/><line  vector-effect="non-scaling-stroke" x1="114.177" y1="117.167" x2="119.844" y2="117.167"/><line vector-effect="non-scaling-stroke" x1="24.344" y1="180" x2="57.344" y2="180"/><path vector-effect="non-scaling-stroke"  d="M120.844,165c0,0-5.583-3.583-12.5-3.583s-13.406,4.25-13.406,11.833s8.092,8.414,14.323,9.583c5.052,0.948,10.625,3.5,10.625,10.625s-5.152,10.511-10.792,10.25c-9.438-0.438-14.5-3.042-16.667-5.208"/><line vector-effect="non-scaling-stroke" x1="106.385" y1="152.167" x2="106.385" y2="211.5"/><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
						<div class="document-icon">
						<svg class="ratio-box stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667"  xml:space="preserve"><path  vector-effect="non-scaling-stroke" d="M59.167,3.667"/><g><path  vector-effect="non-scaling-stroke"  d="M127,155.333c0,1.65-1.35,3-3,3H7c-1.65,0-3-1.35-3-3V60.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H124c1.65,0,3,1.35,3,3V155.333z"/></g><g><path  vector-effect="non-scaling-stroke" d="M142.5,14.083v155.25c0,1.65-1.35,3-3,3H13.083"/></g><g><path   vector-effect="non-scaling-stroke"  d="M59.833,3.667V54c0,1.65-1.35,3-3,3H4.356"/></g><g><g><defs><rect  vector-effect="non-scaling-stroke" id="SVGID_1_" x="41.761" y="75.948" width="47.419" height="48.121"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" style="overflow:visible;"/></clipPath><path class="filled" style="clip-path:url(#SVGID_2_);" d="M86.992,75.929H72.646c-1.21,0-2.191,0.981-2.191,2.191c0,1.21,0.982,2.191,2.191,2.191h12.155v32.092c0,3.822-3.109,6.932-6.931,6.932H53.074c-3.822,0-6.931-3.11-6.931-6.932V80.312h12.155c1.211,0,2.191-0.982,2.191-2.191c0-1.21-0.98-2.191-2.191-2.191H43.952c-1.21,0-2.191,0.981-2.191,2.191v34.283c0,6.239,5.076,11.314,11.313,11.314H77.87c6.239,0,11.313-5.076,11.313-11.314V78.12C89.183,76.91,88.203,75.929,86.992,75.929L86.992,75.929z M86.992,75.929"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
						<div class="document-icon receipt"><svg class="ratio-box stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="154.875px" height="255.125px" viewBox="0 0 154.875 255.125"  xml:space="preserve"><path   vector-effect="non-scaling-stroke" d="M4.469,249.268c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l-0.002-0.042c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l0.141-0.11c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l-0.002-0.042c0,0,1.39-19.402,17.227-19.993c15.837-0.591,18.726,20.152,18.726,20.152h0.261V4.208v0.297c0,0-1.39,19.402-17.227,19.993S112.724,4.347,112.724,4.347l0.002,0.042c0,0-1.39,19.402-17.227,19.993S76.773,4.23,76.773,4.23l-0.141,0.11c0,0-1.39,19.402-17.227,19.993S40.68,4.182,40.68,4.182l0.002,0.042c0,0-1.39,19.402-17.227,19.993S4.729,4.065,4.729,4.065H4.469v245.5"/><line  vector-effect="non-scaling-stroke" x1="23.844" y1="79.042" x2="120.844" y2="79.042"/><line  vector-effect="non-scaling-stroke" x1="24.344" y1="115.042" x2="117.875" y2="115.042"/><path  vector-effect="non-scaling-stroke"  d="M87.844,162.875c0,0-5.583-3.583-12.5-3.583s-13.406,4.25-13.406,11.833s8.092,8.414,14.323,9.583c5.052,0.948,10.625,3.5,10.625,10.625s-5.152,10.511-10.792,10.25c-9.438-0.438-14.5-3.042-16.667-5.208"/><line   vector-effect="non-scaling-stroke" x1="73.385" y1="150.042" x2="73.385" y2="209.375"/><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
						<div class="document-icon"><svg class="ratio-box stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" xml:space="preserve"><path   vector-effect="non-scaling-stroke"  d="M65.167,9.667"/><g><path  vector-effect="non-scaling-stroke" d="M133,161.333c0,1.65-1.35,3-3,3H13c-1.65,0-3-1.35-3-3V66.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H130c1.65,0,3,1.35,3,3V161.333z"/></g><g><path   vector-effect="non-scaling-stroke"  d="M65.833,9.667V60c0,1.65-1.35,3-3,3H10.356"/></g><path   class="filled" vector-effect="non-scaling-stroke"   d="M102.331,115.3c-0.387,0.239-1.491,0.387-2.191,0.387c-2.283,0-5.081-1.049-9.039-2.743c1.528-0.11,2.909-0.166,4.16-0.166c2.283,0,2.945,0,5.191,0.571C102.681,113.901,102.699,115.061,102.331,115.3z M62.734,115.65c0.884-1.546,1.786-3.185,2.706-4.934c2.246-4.252,3.682-7.603,4.731-10.346c2.117,3.847,4.749,7.106,7.824,9.72c0.387,0.331,0.792,0.644,1.233,0.976C72.951,112.318,67.52,113.827,62.734,115.65z M70.061,75.353c1.252,0,1.97,3.141,2.025,6.104c0.055,2.945-0.626,5.007-1.491,6.553c-0.718-2.283-1.049-5.854-1.049-8.192C69.545,79.819,69.49,75.353,70.061,75.353z M45.504,131.905c0.718-1.933,3.516-5.762,7.658-9.168c0.258-0.202,0.902-0.81,1.491-1.362C50.327,128.296,47.418,131.039,45.504,131.905z M103.528,111.232c-1.252-1.233-4.05-1.878-8.284-1.933c-2.872-0.037-6.314,0.221-9.959,0.718c-1.62-0.939-3.295-1.951-4.621-3.185c-3.534-3.314-6.48-7.897-8.321-12.941c0.11-0.479,0.221-0.884,0.313-1.307c0,0,1.988-11.321,1.454-15.15c-0.074-0.534-0.11-0.681-0.258-1.086l-0.166-0.46c-0.534-1.244-1.602-2.57-3.277-2.498l-0.976-0.031h-0.018c-1.859,0-3.387,0.952-3.774,2.364c-1.215,4.473,0.037,11.137,2.301,19.771l-0.589,1.417c-1.62,3.939-3.645,7.916-5.431,11.413l-0.239,0.46c-1.878,3.682-3.59,6.811-5.136,9.462l-1.602,0.847c-0.11,0.074-2.853,1.51-3.498,1.896c-5.449,3.258-9.072,6.958-9.672,9.904c-0.191,0.92-0.048,2.117,0.922,2.688l1.546,0.773c0.668,0.331,1.386,0.497,2.104,0.497c3.884,0,8.394-4.823,14.598-15.666c7.179-2.338,15.353-4.289,22.514-5.357c5.449,3.074,12.15,5.21,16.384,5.21c0.755,0,1.399-0.074,1.933-0.221c0.81-0.202,1.491-0.663,1.915-1.307c0.81-1.233,0.994-2.927,0.755-4.676C104.393,112.318,103.97,111.673,103.528,111.232z"/><g></g><g></g><g></g><g></g><g></g><g></g></svg></div> 
						<div class="document-icon receipt"><svg class="stroke-3 stroke-grey-blue ratio-box" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="154.875px" height="257.25px" viewBox="0 0 154.875 257.25"   xml:space="preserve"><path   vector-effect="non-scaling-stroke" d="M4.469,251.393c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l-0.002-0.042c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l0.141-0.11c0,0,1.39-19.402,17.227-19.993s18.726,20.152,18.726,20.152l-0.002-0.042c0,0,1.39-19.402,17.227-19.993c15.837-0.591,18.726,20.152,18.726,20.152h0.261V6.333v0.297c0,0-1.39,19.402-17.227,19.993S112.724,6.472,112.724,6.472l0.002,0.042c0,0-1.39,19.402-17.227,19.993S76.773,6.355,76.773,6.355l-0.141,0.11c0,0-1.39,19.402-17.227,19.993S40.68,6.307,40.68,6.307l0.002,0.042c0,0-1.39,19.402-17.227,19.993S4.729,6.19,4.729,6.19H4.469v245.5"/><line   vector-effect="non-scaling-stroke" x1="23.844" y1="81.167" x2="98.177" y2="81.167"/><line   vector-effect="non-scaling-stroke" x1="113.677" y1="81.167" x2="119.344" y2="81.167"/><line   vector-effect="non-scaling-stroke"  x1="24.344" y1="117.167" x2="98.677" y2="117.167"/><line   vector-effect="non-scaling-stroke"  x1="114.177" y1="117.167" x2="119.844" y2="117.167"/><line  vector-effect="non-scaling-stroke" x1="24.344" y1="180" x2="57.344" y2="180"/><path   vector-effect="non-scaling-stroke"  d="M120.844,165c0,0-5.583-3.583-12.5-3.583s-13.406,4.25-13.406,11.833s8.092,8.414,14.323,9.583c5.052,0.948,10.625,3.5,10.625,10.625s-5.152,10.511-10.792,10.25c-9.438-0.438-14.5-3.042-16.667-5.208"/><line   vector-effect="non-scaling-stroke" x1="106.385" y1="152.167" x2="106.385" y2="211.5"/><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
						<div class="document-icon"><svg class="ratio-box stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" s xml:space="preserve"><path   vector-effect="non-scaling-stroke"  d="M59.167,3.667"/><g><path  vector-effect="non-scaling-stroke"  d="M127,155.333c0,1.65-1.35,3-3,3H7c-1.65,0-3-1.35-3-3V60.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H124c1.65,0,3,1.35,3,3V155.333z"/></g><g><path   vector-effect="non-scaling-stroke"  d="M142.5,14.083v155.25c0,1.65-1.35,3-3,3H13.083"/></g><g><path   vector-effect="non-scaling-stroke"  d="M59.833,3.667V54c0,1.65-1.35,3-3,3H4.356"/></g><path   vector-effect="non-scaling-stroke" class="filled"  d="M69.634,93.419c0,1.358-1.101,2.459-2.459,2.459h-0.683c-1.358,0-2.459-1.101-2.459-2.459V79.895c0-1.358,1.101-2.459,2.459-2.459h0.683c1.358,0,2.459,1.101,2.459,2.459V93.419z"/><path  class="filled"  vector-effect="non-scaling-stroke"  d="M59.698,95.106c0.973,0.948,0.993,2.504,0.046,3.477l-0.477,0.489c-0.948,0.973-2.504,0.993-3.477,0.046l-9.688-9.436c-0.973-0.948-0.993-2.504-0.046-3.477l0.477-0.489c0.948-0.973,2.504-0.993,3.477-0.046L59.698,95.106z"/><path  class="filled"  vector-effect="non-scaling-stroke" d="M55.722,102.921c1.358,0,2.459,1.101,2.459,2.459v0.683c0,1.358-1.101,2.459-2.459,2.459H42.198c-1.358,0-2.459-1.101-2.459-2.459v-0.683c0-1.358,1.101-2.459,2.459-2.459H55.722z"/><path class="filled"    vector-effect="non-scaling-stroke"  d="M56.589,112.858c0.948-0.973,2.504-0.993,3.477-0.046l0.489,0.477c0.973,0.948,0.993,2.504,0.046,3.477l-9.436,9.688c-0.948,0.973-2.504,0.993-3.477,0.046l-0.489-0.477c-0.973-0.948-0.993-2.504-0.046-3.477L56.589,112.858z"/><path class="filled"    vector-effect="non-scaling-stroke"  d="M64.853,117.498c0-1.358,1.101-2.459,2.459-2.459h0.683c1.358,0,2.459,1.101,2.459,2.459v13.524c0,1.358-1.101,2.459-2.459,2.459h-0.683c-1.358,0-2.459-1.101-2.459-2.459V117.498z"/><path  class="filled"  vector-effect="non-scaling-stroke"  d="M75.609,117.45c-0.973-0.948-0.993-2.504-0.046-3.477l0.477-0.489c0.948-0.973,2.504-0.993,3.477-0.046l9.688,9.436c0.973,0.948,0.993,2.504,0.046,3.477l-0.477,0.489c-0.948,0.973-2.504,0.993-3.477,0.046L75.609,117.45z"/><path class="filled"   vector-effect="non-scaling-stroke" d="M78.766,107.995c-1.358,0-2.459-1.101-2.459-2.459v-0.683c0-1.358,1.101-2.459,2.459-2.459H92.29c1.358,0,2.459,1.101,2.459,2.459v0.683c0,1.358-1.101,2.459-2.459,2.459H78.766z"/><path class="filled"  vector-effect="non-scaling-stroke"  d="M77.079,98.879c-0.948,0.973-2.504,0.993-3.477,0.046l-0.489-0.477c-0.973-0.948-0.993-2.504-0.046-3.477l9.436-9.688c0.948-0.973,2.504-0.993,3.477-0.046l0.489,0.477c0.973,0.948,0.993,2.504,0.046,3.477L77.079,98.879z"/><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
					</div>						
				</div>
					<div class="mobile-text">
						<div class="collect-text ">
						<div class="hgroup-box">
							<div class="subheading-box">Step 1</div>
							<div class="heading-box">
								<span>Collect </span>
								<div class="loading-line"></div>
							</div>							
							<p class="p-box"><?php the_field( 'about_collect' ); ?></p>
						</div>
					</div>
					</div>

				<div id="categorizeAnimation" class="collect-anime-box col-md-4">
					 <div id="categorizeAnimationRatioBox" class="ratio-box"></div>
				</div>

				<div class="mobile-text">
						<div class="collect-text  ">
						<div class="hgroup-box">
							<div class="subheading-box">Step 1</div>
							<div class="heading-box">
								<span>Categorize</span>
								<div class="loading-line"></div>
							</div>							
							<p class="p-box"><?php the_field( 'about_categorize' ); ?></p>
						</div>
					</div>
					</div>

				<div id="reconcileAnimation" class="collect-anime-box col-md-4">
					 <div id="cloudReconcile">	
							<div class="app-reconcile  to-hide">	</div>
							<div class="app-reconcile to-hide">	</div>
							<div class="app-reconcile to-hide">	</div>
							<div class="app-reconcile  to-hide">	</div>
							<div class="app-reconcile  to-hide">	</div>
							<div class="app-reconcile to-hide">	</div>
							<div class="app-reconcile  to-hide">	</div>
							<div class="app-reconcile to-hide">	</div>
							<div class="app-reconcile  to-hide">	</div>
							<div class="app-reconcile to-hide">	</div>
							<svg class="stroke-3 stroke-grey" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="290.5px" height="178px" viewBox="0 0 290.5 178" xml:space="preserve"><path   vector-effect="non-scaling-stroke"   d="M105.25,36.75"/><path    vector-effect="non-scaling-stroke"   d="M221.687,51.551"/><path   d="M161.5,114.25"/><path   vector-effect="non-scaling-stroke"   d="M200.5,174.25H60l-9.833-0.088
							c-0.923,0.058-1.854,0.088-2.792,0.088c-24.093,0-43.625-19.532-43.625-43.625c0-22.588,17.166-41.166,39.165-43.4l-1.658-1.767
							C41.679,58.485,63.676,36.75,90.75,36.75c4.493,0,8.846,0.599,12.983,1.72C113.705,17.012,136.28,4,161.5,4
							c29.795,0,53.776,19.703,60.187,47.551l0,0c0.85-0.034,1.705-0.051,2.563-0.051c34.656,0,62.75,28.094,62.75,62.75
							s-26.761,60.333-61.417,60.333C224.177,174.583,201.884,174.341,200.5,174.25"/><g></g><g></g><g></g><g></g><g></g><g></g></svg>
					 </div>
				</div>

				<div class="mobile-text">
						<div class="collect-text active">
						<div class="hgroup-box">
							<div class="subheading-box">Step 1</div>
							<div class="heading-box">
								<span>Reconcile </span>
								<div class="loading-line"></div>
							</div>							
							<p class="p-box"><?php the_field( 'about_reconcile' ); ?></p>
						</div>
					</div>
					</div>
				
			</div>
  		</div>  		

		<div class="container howworks-texts-container desktop-text">	
			<div class="row">	
					<div class="collect-text col-md-4 active">
						<div class="hgroup-box">
							<div class="subheading-box">Step 1</div>
							<div class="heading-box">
								<span>Collect </span>
								<div class="loading-line"></div>
							</div>							
							<p class="p-box"><?php the_field( 'about_collect' ); ?></p>
						</div>
					</div>
					<div class="collect-text col-md-4">
						<div class="hgroup-box">
							<div class="subheading-box">Step 2</div>
							<div class="heading-box">
								<span>Categorize</span>
								<div class="loading-line"></div>
							</div>							
							<p class="p-box"><?php the_field( 'about_categorize' ); ?></p>
						</div>
					</div>
					<div class="collect-text col-md-4">
						<div class="hgroup-box">
							<div class="subheading-box">Step 3</div>
							<div class="heading-box">
								<span>Reconcile</span>
								<div class="loading-line"></div>
							</div> 
							<p class="p-box"><?php the_field( 'about_reconcile' ); ?></p>
						</div>
					</div>
			</div>
		</div>
  	</section>

 
<?php endwhile; ?>
 