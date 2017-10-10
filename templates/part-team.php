<?php $page_part_query = new WP_Query( 'page_id=33&post_type=page-part ' ); ?>   

<?php while ( $page_part_query->have_posts() ) : $page_part_query->the_post(); ?>

   	<section   >	
		<div class="container">
  			<div class="row">  				
				<hgroup class="hgroup-section">
		  			<h3 class="subheading-section">
		  				<?php the_field( 'team_subheading' ); ?>
		  			</h3>
		  			<h2 class="heading-section">
		  				<?php the_field( 'team_heading' ); ?>
		  			</h2>
		  		</hgroup>
  			</div>
  		</div>

  		<div class="container team-animation-box">
  		  	<div class="row team-text">
				<div class="team-text-box">	
					<h3 class="heading-box"><?php the_field( 'team_accoutant_heading' ); ?><h3>
					<p class="p-box"><?php the_field( 'team_accoutant_text' ); ?></p>
				</div>
  		  	</div>
  		  	<div class="row team-animation">
				
					 	
						<div class="accountant-box">
						<div class="vertical-text accountant-text">ACCOUNTANT</div>
						<!-- ROUNDS -->
								<div class="team-path-box-roads">	
									<div id="employee-phone-route-5">
										<div class="purchase-icon"><svg class="stroke-3 stroke-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M65.167,9.667"></path> <path vector-effect="non-scaling-stroke" d="M133,161.333c0,1.65-1.35,3-3,3H13c-1.65,0-3-1.35-3-3V66.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H130c1.65,0,3,1.35,3,3V161.333z"></path> <path vector-effect="non-scaling-stroke" d="M65.833,9.667V60c0,1.65-1.35,3-3,3H10.356"></path></svg></div>										
										<div class="route-square r1"></div> 
										<div class="route-square r2"></div> 
									</div>
								</div>	
								<!--BOSS PHONE -->
							<div class="phone-model small-phone ">
								<div class="upper-phone-model">
									<div class="ratio-box">
										<svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1024px" height="201.888px" viewBox="-9 -5.111 1024 201.888" enable-background="new -9 -5.111 1024 201.888"
	 xml:space="preserve"> 
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
	c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
	C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
 
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
 
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
	c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
									</div>
								</div>
								<div class="content-phone-model purple-bg"> 
									<div class="ratio-box">
										 <div class="centered  portrait-team">
										 		 <svg class="stroke-3 stroke-grey" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="181.25px" height="245.75px" viewBox="0 0 181.25 245.75" style="enable-background:new 0 0 181.25 245.75;" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M50.104,234.16
	c-26.668-7.914-45.479-21.321-45.479-26.41c0-15.875,14.582-21.247,26.208-25.917c20.333-8.167,27.194-11.619,33.5-15.667
	c4.324-2.775,4.042-6.167,4.042-6.167v-10c0,0-9.042-5-16.208-12S40.5,114.5,40.5,114.5c-5.333,1.292-6.993,0.238-9.281-1.781
	c-1.417-1.25-5.677-10.542-5.344-15.875s6.292-5.344,6.292-5.344l0,0C29,73,26.667,47,45,25.167S96.5,7.333,96.5,7.333"/><path vector-effect="non-scaling-stroke" d="M84.66,7.333c0,0,33.167-4,51.5,17.833
	S152.16,73,148.993,91.5l0,0c0,0,5.958,0.01,6.292,5.344s-3.927,14.625-5.344,15.875c-2.288,2.019-3.948,3.073-9.281,1.781
	c0,0-1.447,5.307-4.007,11.178"/><path vector-effect="non-scaling-stroke" d="M150.377,82.005
	c-32.083,0-39.877-28.755-39.877-28.755S83.167,82.833,31.833,82.833"/><path vector-effect="non-scaling-stroke" d="M62.25,165.5"/><path vector-effect="non-scaling-stroke" d="M120.496,168.508"/><path vector-effect="non-scaling-stroke" d="M177,156.501"/><path vector-effect="non-scaling-stroke" d="M151.477,75"/><path vector-effect="non-scaling-stroke" d="M115.125,165.5"/><path vector-effect="non-scaling-stroke" d="M90.198,185.5"/><path vector-effect="non-scaling-stroke" d="M65.27,165.5"/><path vector-effect="non-scaling-stroke" d="M68.375,155.667"/><line vector-effect="non-scaling-stroke" x1="51.464" y1="173.101" x2="51.034" y2="170.827"/><path vector-effect="non-scaling-stroke" d="M51.104,173.267"/><path vector-effect="non-scaling-stroke" d="M63.5,209.333"/><path vector-effect="non-scaling-stroke" d="M90.198,186"/><path vector-effect="non-scaling-stroke" d="M63,209.333"/><path vector-effect="non-scaling-stroke" d="M86.833,241"/><path vector-effect="non-scaling-stroke" d="M91.98,186"/><path vector-effect="non-scaling-stroke" d="M118.878,208.751"/><path vector-effect="non-scaling-stroke" d="M93.756,240.199"/><path vector-effect="non-scaling-stroke" d="M102.625,194.625"/><path vector-effect="non-scaling-stroke" d="M76.568,227.157"/><path vector-effect="non-scaling-stroke" d="M86.125,202.688"/><path vector-effect="non-scaling-stroke" d="M104.232,227.475"/><path vector-effect="non-scaling-stroke" d="M94.809,202.688"/><path vector-effect="non-scaling-stroke" d="M138.752,237.776c0,1.412-1.145,2.557-2.557,2.557
		H77.66c-1.412,0-2.557-1.145-2.557-2.557v-67.627c0-1.412,1.145-2.557,2.557-2.557h58.535c1.412,0,2.557,1.145,2.557,2.557V237.776
		z"/><path vector-effect="non-scaling-stroke" d="M110.337,167.591v-26.425
		c0-1.412,1.145-2.557,2.557-2.557h60.808c1.412,0,2.557,1.145,2.557,2.557c0,0,0,63.72,0,63.72h-15.557
		c-1.412,0-2.557,1.145-2.557,2.557c0,0,0,15.841,0,15.841h-18.683"/><line vector-effect="non-scaling-stroke" x1="176.74" y1="205.242" x2="158.558" y2="223.68"/><rect class="stroke-2"  vector-effect="non-scaling-stroke" x="88.031" y="180.946" width="38.36" height="13.177"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="122.023" y1="152.887" x2="164.006" y2="152.887"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="148.129" y1="166.952" x2="164.006" y2="166.952"/><line class="stroke-2" class="stroke-2" vector-effect="non-scaling-stroke" x1="148.662" y1="180.485" x2="164.538" y2="180.485"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="149.514" y1="194.124" x2="165.391" y2="194.124"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="88.031" y1="205.242" x2="89.949" y2="205.242"/><line class="stroke-2" class="stroke-2" vector-effect="non-scaling-stroke" x1="99.966" y1="205.242" x2="101.724" y2="205.242"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="111.5" y1="205.242" x2="113.152" y2="205.242"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="123.15" y1="205.242" x2="124.802" y2="205.242"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="88.031" y1="217.176" x2="89.949" y2="217.176"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="99.966" y1="217.176" x2="101.724" y2="217.176"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="111.5" y1="217.176" x2="113.152" y2="217.176"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="123.15" y1="217.176" x2="124.802" y2="217.176"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="88.031" y1="228.258" x2="89.949" y2="228.258"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="99.966" y1="228.258" x2="101.724" y2="228.258"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="111.5" y1="228.258" x2="113.152" y2="228.258"/><line class="stroke-2" vector-effect="non-scaling-stroke" x1="123.15" y1="228.258" x2="124.802" y2="228.258"/></svg>

										 </div>
									</div>
								</div>
								<div class="lower-phone-model">
									<div class="ratio-box">
									<svg   class="stroke-3 stroke-grey-blue"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1021px" height="203.305px" viewBox="-7.375 0 1021 203.305" enable-background="new -7.375 0 1021 203.305"
	 xml:space="preserve">
<path   vector-effect="non-scaling-stroke" class="fill-white" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M3.399,0c0,0,0,17.225,0,57.636
	c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
	c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
<path   vector-effect="non-scaling-stroke" fill="none" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
	h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
	z"/>
</svg>
									</div>
								</div>
							</div>
							<!--END BOSS PHONE -->
						</div>


					<div class="col-md-12">	
					 	<div class="boss-box">	
					 		<div class="vertical-text boss-text">BOSS</div>
					 		<!--BOSS PHONE -->
							<div class="phone-model small-phone ">
								<div class="upper-phone-model">
									<div class="ratio-box">
										<svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1024px" height="201.888px" viewBox="-9 -5.111 1024 201.888" enable-background="new -9 -5.111 1024 201.888"
	 xml:space="preserve">
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
	c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
	C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
 
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
 
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
	c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
									</div>
								</div>
								<div class="content-phone-model green-bg"> 
									<div class="ratio-box">
										 <div class="centered  portrait-team">
										 			 <svg class="stroke-3 stroke-grey" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="181.25px" height="245.75px" viewBox="0 0 181.25 245.75" enable-background="new 0 0 181.25 245.75" xml:space="preserve"><path  vector-effect="non-scaling-stroke"  d="M84.66,7.333c0,0,33.167-4,51.5,17.833
													S152.16,73,148.993,91.5l0,0c0,0,5.958,0.01,6.292,5.344s-3.927,14.625-5.344,15.875c-2.288,2.019-3.948,3.073-9.281,1.781
													c0,0-4.5,16.5-11.667,23.5c-7.167,7-16.208,12-16.208,12v10c0,0-0.282,3.391,4.042,6.167c6.306,4.048,13.167,7.5,33.5,15.667
													c11.627,4.67,26.208,10.042,26.208,25.917c0,4.75-43.017,32.5-85.955,32.5l0,0c-46,0-85.955-25.083-85.955-32.5
													c0-15.875,14.582-21.247,26.208-25.917c20.333-8.167,27.194-11.619,33.5-15.667c4.324-2.775,4.042-6.167,4.042-6.167v-10
													c0,0-9.042-5-16.208-12S40.5,114.5,40.5,114.5c-5.333,1.292-6.993,0.238-9.281-1.781c-1.417-1.25-5.677-10.542-5.344-15.875
													s6.292-5.344,6.292-5.344l0,0C29,73,26.667,47,45,25.167S96.5,7.333,96.5,7.333"/><path  vector-effect="non-scaling-stroke"  d="M150.377,82.005
													c-32.083,0-39.877-28.755-39.877-28.755S83.167,82.833,31.833,82.833"/><path  vector-effect="non-scaling-stroke"  d="M62.25,165.5"/><path  vector-effect="non-scaling-stroke"  d="M120.496,168.508"/><path  vector-effect="non-scaling-stroke"  d="M177,156.501"/><path  vector-effect="non-scaling-stroke"  d="M151.477,75"/><path  vector-effect="non-scaling-stroke"  d="M65.27,165.5c0,0,17.774,19.994,24.927,20
													c6.927,0.005,24.927-20,24.927-20"/><path  vector-effect="non-scaling-stroke"  d="M68.375,155.667"/><line vector-effect="non-scaling-stroke"  x1="51.464" y1="173.101" x2="51.034" y2="170.827"/><polyline  vector-effect="non-scaling-stroke"  points="90.198,186 63.5,209.333 51.104,173.267 
													"/><path class="stroke-2" vector-effect="non-scaling-stroke"  d="M86.833,241c0-0.5-23.833-31.667-23.833-31.667"/><polyline vector-effect="non-scaling-stroke"  points="91.98,186 118.678,209.333 
													131.074,173.267 "/><line  class="stroke-2"  vector-effect="non-scaling-stroke"  x1="93.756" y1="240.199" x2="118.878" y2="208.751"/><path  class="stroke-2"   vector-effect="non-scaling-stroke"  d="M80.75,194.625c0,0,3.708,7.313,5.375,8.063
													s7.833,0.925,9.198,0.344c0.506-0.215,7.302-8.406,7.302-8.406"/><line  vector-effect="non-scaling-stroke"  x1="86.125" y1="202.688" x2="76.568" y2="227.157"/><line   class="stroke-2"  vector-effect="non-scaling-stroke" x1="94.809" y1="202.688" x2="104.232" y2="227.475"/><polyline  class="stroke-2"  vector-effect="non-scaling-stroke" points="98,93.833 98,117.333 84.667,117.333 "/><g></g><g></g><g></g><g></g><g></g><g></g></svg>

										 </div>
									</div>
								</div>
								<div class="lower-phone-model">
									<div class="ratio-box">
									<svg   class="stroke-3 stroke-grey-blue"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1021px" height="203.305px" viewBox="-7.375 0 1021 203.305" enable-background="new -7.375 0 1021 203.305"
	 xml:space="preserve">
<path   vector-effect="non-scaling-stroke" class="fill-white" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M3.399,0c0,0,0,17.225,0,57.636
	c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
	c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
<path   vector-effect="non-scaling-stroke" fill="none" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
	h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
	z"/>
</svg>
									</div>
								</div>
							</div>
							<!--END BOSS PHONE -->
					 	</div>	
				</div>

				<!--EMPLOYEE BIG PHONE -->
					<div id="employee-2" class="team-path-box">
								<!-- ROUNDS -->
								<div class="team-path-box-roads">	
									<div id="employee-phone-route-4">
										<div class="purchase-icon"><svg class="stroke-3 stroke-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M65.167,9.667"></path> <path vector-effect="non-scaling-stroke" d="M133,161.333c0,1.65-1.35,3-3,3H13c-1.65,0-3-1.35-3-3V66.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H130c1.65,0,3,1.35,3,3V161.333z"></path> <path vector-effect="non-scaling-stroke" d="M65.833,9.667V60c0,1.65-1.35,3-3,3H10.356"></path></svg></div>										
										<div class="route-square"></div> 
									</div>
								</div>
								<!-- PHONE -->
								<div id="employee-phone-4"  class="phone-model xsmall-phone "> 
									<div class="upper-phone-model">
										<div class="ratio-box">
											<svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1024px" height="201.888px" viewBox="-9 -5.111 1024 201.888" enable-background="new -9 -5.111 1024 201.888"
	 xml:space="preserve">
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
	c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
	C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
 
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
 
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
	c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
										</div>
									</div>
									<div class="content-phone-model border-green"> 
										<div class="ratio-box">
											 <div class="centered portrait-team">
											 			 <svg class="stroke-3 stroke-green" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="181.25px" height="245.75px" viewBox="0 0 181.25 245.75" enable-background="new 0 0 181.25 245.75" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M84.66,7.333c0,0,33.167-4,51.5,17.833S152.16,73,148.993,91.5l0,0c0,0,5.958,0.01,6.292,5.344s-3.927,14.625-5.344,15.875c-2.288,2.019-3.948,3.073-9.281,1.781c0,0-4.5,16.5-11.667,23.5c-7.167,7-16.208,12-16.208,12v10c0,0-0.282,3.391,4.042,6.167c6.306,4.048,13.167,7.5,33.5,15.667c11.627,4.67,26.208,10.042,26.208,25.917c0,4.75-43.017,32.5-85.955,32.5l0,0c-46,0-85.955-25.083-85.955-32.5c0-15.875,14.582-21.247,26.208-25.917c20.333-8.167,27.194-11.619,33.5-15.667c4.324-2.775,4.042-6.167,4.042-6.167v-10c0,0-9.042-5-16.208-12S40.5,114.5,40.5,114.5c-5.333,1.292-6.993,0.238-9.281-1.781c-1.417-1.25-5.677-10.542-5.344-15.875s6.292-5.344,6.292-5.344l0,0C29,73,26.667,47,45,25.167S96.5,7.333,96.5,7.333"/><path vector-effect="non-scaling-stroke" d="M150.377,82.005c-32.083,0-39.877-28.755-39.877-28.755S83.167,82.833,31.833,82.833"/><path vector-effect="non-scaling-stroke" d="M62.25,165.5"/><path vector-effect="non-scaling-stroke" d="M120.496,168.508"/><path vector-effect="non-scaling-stroke" d="M177,156.501"/><path vector-effect="non-scaling-stroke" d="M151.477,75"/><path vector-effect="non-scaling-stroke" d="M65.27,165.5c0,0,17.774,19.994,24.927,20c6.927,0.005,24.927-20,24.927-20"/><path vector-effect="non-scaling-stroke" d="M68.375,155.667"/><line vector-effect="non-scaling-stroke" x1="51.464" y1="173.101" x2="51.034" y2="170.827"/><polyline class="stroke-2" vector-effect="non-scaling-stroke" points="90.198,186 63.5,209.333 51.104,173.267 "/><polyline class="stroke-2" vector-effect="non-scaling-stroke" points="91.98,186 118.678,209.333 131.074,173.267 "/></svg>

											 </div>
										</div>
									</div>
									<div class="lower-phone-model">
										<div class="ratio-box">
										<svg   class="stroke-3 stroke-grey-blue"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1021px" height="203.305px" viewBox="-7.375 0 1021 203.305" enable-background="new -7.375 0 1021 203.305"
	 xml:space="preserve">
<path   vector-effect="non-scaling-stroke" class="fill-white" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M3.399,0c0,0,0,17.225,0,57.636
	c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
	c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
<path   vector-effect="non-scaling-stroke" fill="none" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
	h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
	z"/>
</svg>
										</div>
									</div>
								</div>
								 <!-- PHONE -->
					</div>
							<div id="employee-1" class="team-path-box">
								<!-- ROUNDS -->
								<div class="team-path-box-roads">	
									<div id="employee-phone-route-1">

										<div class="purchase-icon"><svg class="stroke-3 stroke-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M65.167,9.667"></path> <path vector-effect="non-scaling-stroke" d="M133,161.333c0,1.65-1.35,3-3,3H13c-1.65,0-3-1.35-3-3V66.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H130c1.65,0,3,1.35,3,3V161.333z"></path> <path vector-effect="non-scaling-stroke" d="M65.833,9.667V60c0,1.65-1.35,3-3,3H10.356"></path></svg></div>										
										<div class="route-square r1"></div>
										<div class="route-square r2"></div>
									</div>
									<div id="employee-phone-route-2">
										<div class="purchase-icon"><svg class="stroke-3 stroke-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M65.167,9.667"></path> <path vector-effect="non-scaling-stroke" d="M133,161.333c0,1.65-1.35,3-3,3H13c-1.65,0-3-1.35-3-3V66.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H130c1.65,0,3,1.35,3,3V161.333z"></path> <path vector-effect="non-scaling-stroke" d="M65.833,9.667V60c0,1.65-1.35,3-3,3H10.356"></path></svg></div>										
										<div class="route-square"></div> 
									</div>
									<div id="employee-phone-route-3">
										<div class="purchase-icon"><svg class="stroke-3 stroke-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="146.333px" height="176.667px" viewBox="0 0 146.333 176.667" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M65.167,9.667"></path> <path vector-effect="non-scaling-stroke" d="M133,161.333c0,1.65-1.35,3-3,3H13c-1.65,0-3-1.35-3-3V66.333c0-1.65,0.987-3.921,2.193-5.048l23.365-21.821c1.206-1.126,3.141-3.008,4.301-4.182l23.2-23.482c1.16-1.174,3.458-2.134,5.108-2.134H130c1.65,0,3,1.35,3,3V161.333z"></path> <path vector-effect="non-scaling-stroke" d="M65.833,9.667V60c0,1.65-1.35,3-3,3H10.356"></path></svg></div>										
										<div class="route-square"></div> 
									</div>
								</div>
								<!-- PHONE -->
								<div id="employee-phone-1"  class="phone-model small-phone "> 
										<div class="vertical-text employee-text">EMPLOYEE</div>
									<div class="upper-phone-model">
										<div class="ratio-box">
											<svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1024px" height="201.888px" viewBox="-9 -5.111 1024 201.888" enable-background="new -9 -5.111 1024 201.888"
	 xml:space="preserve">
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
	c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
	C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
 
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
 
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
	c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
										</div>
									</div>
									<div class="content-phone-model border-green"> 
										<div class="ratio-box">
											 <div class="centered portrait-team">
											 			 <svg class="stroke-3 stroke-green" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="181.25px" height="245.75px" viewBox="0 0 181.25 245.75" enable-background="new 0 0 181.25 245.75" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M84.66,7.333c0,0,33.167-4,51.5,17.833S152.16,73,148.993,91.5l0,0c0,0,5.958,0.01,6.292,5.344s-3.927,14.625-5.344,15.875c-2.288,2.019-3.948,3.073-9.281,1.781c0,0-4.5,16.5-11.667,23.5c-7.167,7-16.208,12-16.208,12v10c0,0-0.282,3.391,4.042,6.167c6.306,4.048,13.167,7.5,33.5,15.667c11.627,4.67,26.208,10.042,26.208,25.917c0,4.75-43.017,32.5-85.955,32.5l0,0c-46,0-85.955-25.083-85.955-32.5c0-15.875,14.582-21.247,26.208-25.917c20.333-8.167,27.194-11.619,33.5-15.667c4.324-2.775,4.042-6.167,4.042-6.167v-10c0,0-9.042-5-16.208-12S40.5,114.5,40.5,114.5c-5.333,1.292-6.993,0.238-9.281-1.781c-1.417-1.25-5.677-10.542-5.344-15.875s6.292-5.344,6.292-5.344l0,0C29,73,26.667,47,45,25.167S96.5,7.333,96.5,7.333"/><path vector-effect="non-scaling-stroke" d="M150.377,82.005c-32.083,0-39.877-28.755-39.877-28.755S83.167,82.833,31.833,82.833"/><path vector-effect="non-scaling-stroke" d="M62.25,165.5"/><path vector-effect="non-scaling-stroke" d="M30.148,74.624c0,21.293-7.226,70.297-7.226,70.297S44.5,150,68.375,150"/><path vector-effect="non-scaling-stroke" d="M120.496,168.508"/><path vector-effect="non-scaling-stroke" d="M177,156.501"/><path vector-effect="non-scaling-stroke" d="M151.477,75"/><path vector-effect="non-scaling-stroke" d="M150.149,75.624c0,21.293,7.226,70.297,7.226,70.297S135.797,151,111.922,151"/><path class="fill-white" vector-effect="non-scaling-stroke" d="M91.625,70.285l-7.358,20.566c0,0-2.264,5.377-7.264,5.377c-0.566,0-18.585,0-18.585,0s-6.792,0-6.792-5.755c0-3.585,0-20.189,0-20.189H91.625z"/><path class="fill-white" vector-effect="non-scaling-stroke" d="M91.875,70.125l7.358,20.566c0,0,2.264,5.377,7.264,5.377c0.566,0,18.585,0,18.585,0s6.792,0,6.792-5.755c0-3.585,0-20.189,0-20.189H91.875z"/></svg>

											 </div>
										</div>
									</div>
									<div class="lower-phone-model">
										<div class="ratio-box">
										<svg   class="stroke-3 stroke-grey-blue"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1021px" height="203.305px" viewBox="-7.375 0 1021 203.305" enable-background="new -7.375 0 1021 203.305"
	 xml:space="preserve">
<path   vector-effect="non-scaling-stroke" class="fill-white" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M3.399,0c0,0,0,17.225,0,57.636
	c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
	c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
<path   vector-effect="non-scaling-stroke" fill="none" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
	h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
	z"/>
</svg>
										</div>
									</div>
								</div>
								 <!-- PHONE -->

								 	<!-- PHONE -->
								<div id="employee-phone-2"  class="phone-model xsmall-phone "> 
									<div class="upper-phone-model">
										<div class="ratio-box">
											<svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1024px" height="201.888px" viewBox="-9 -5.111 1024 201.888" enable-background="new -9 -5.111 1024 201.888"
	 xml:space="preserve">
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
	c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
	C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
 
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
 
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
	c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
										</div>
									</div>
									<div class="content-phone-model border-green"> 
										<div class="ratio-box">
											 <div class="centered portrait-team">
											 			 <svg class="stroke-3 stroke-green" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="181.25px" height="245.75px" viewBox="0 0 181.25 245.75" enable-background="new 0 0 181.25 245.75" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M84.66,7.333c0,0,33.167-4,51.5,17.833S152.16,73,148.993,91.5l0,0c0,0,5.958,0.01,6.292,5.344s-3.927,14.625-5.344,15.875c-2.288,2.019-3.948,3.073-9.281,1.781c0,0-4.5,16.5-11.667,23.5c-7.167,7-16.208,12-16.208,12v10c0,0-0.282,3.391,4.042,6.167c6.306,4.048,13.167,7.5,33.5,15.667c11.627,4.67,26.208,10.042,26.208,25.917c0,4.75-43.017,32.5-85.955,32.5l0,0c-46,0-85.955-25.083-85.955-32.5c0-15.875,14.582-21.247,26.208-25.917c20.333-8.167,27.194-11.619,33.5-15.667c4.324-2.775,4.042-6.167,4.042-6.167v-10c0,0-9.042-5-16.208-12S40.5,114.5,40.5,114.5c-5.333,1.292-6.993,0.238-9.281-1.781c-1.417-1.25-5.677-10.542-5.344-15.875s6.292-5.344,6.292-5.344l0,0C29,73,26.667,47,45,25.167S96.5,7.333,96.5,7.333"/><path vector-effect="non-scaling-stroke" d="M150.377,82.005c-32.083,0-39.877-28.755-39.877-28.755S83.167,82.833,31.833,82.833"/><path vector-effect="non-scaling-stroke" d="M62.25,165.5"/><path vector-effect="non-scaling-stroke" d="M120.496,168.508"/><path vector-effect="non-scaling-stroke" d="M177,156.501"/><path vector-effect="non-scaling-stroke" d="M151.477,75"/><path class="filled" vector-effect="non-scaling-stroke" d="M63.131,119.625c0,0,6.375,14.351,14.351,14.351s9.783-5.517,12.268-7.643c0.92-0.787,1.208-0.227,1.893,0.417c1.939,1.824,4.524,7.226,10.274,7.226s16.292-13.351,18.042-15.101s-8.688,5.813-11.375,3.125s-7.625-8.75-12-8.75s-4.375,5.125-6.375,5.125s-3.625-5.75-7.5-5.75s-5.646,9.875-8.958,9.875S69.428,123.375,63.131,119.625z"/></svg>

											 </div>
										</div>
									</div>
									<div class="lower-phone-model">
										<div class="ratio-box">
										<svg   class="stroke-3 stroke-grey-blue"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1021px" height="203.305px" viewBox="-7.375 0 1021 203.305" enable-background="new -7.375 0 1021 203.305"
	 xml:space="preserve">
<path   vector-effect="non-scaling-stroke" class="fill-white" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M3.399,0c0,0,0,17.225,0,57.636
	c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
	c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
<path   vector-effect="non-scaling-stroke" fill="none" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
	h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
	z"/>
</svg>
										</div>
									</div>
								</div>
								 <!-- PHONE -->
								
								 	<!-- PHONE -->
								<div id="employee-phone-3"  class="phone-model xsmall-phone "> 
									<div class="upper-phone-model">
										<div class="ratio-box">
											<svg class="stroke-3 stroke-grey-blue" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1024px" height="201.888px" viewBox="-9 -5.111 1024 201.888" enable-background="new -9 -5.111 1024 201.888"
	 xml:space="preserve">
 
<path  vector-effect="non-scaling-stroke" class="fill-white" d="M1006.793,196.777c0,0,0-17.225,0-57.636
	c0-54.655-61.731-132.727-161.502-132.727c-66.904,0-347.406,0.147-347.406,0.147s-267.237-0.16-334.141-0.16
	C63.972,6.402,2.241,84.474,2.241,139.129c0,40.411,0,57.636,0,57.636"/>
 
<circle  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none"  cx="374.258" cy="103.348" r="17.75"/>
 
<path  vector-effect="non-scaling-stroke"  class="fill-grey-blue stroke-none" d="M599.413,106.348c0,6.667-4.833,8.583-8.25,8.583H433.496c-1.657,0-6.917-1.875-6.917-7.083v-6.333
	c0-6.042,5.26-7.917,6.917-7.917h158.625c3.083,0,7.483,1.213,7.483,8.046L599.413,106.348z"/>
</svg>
										</div>
									</div>
									<div class="content-phone-model border-green"> 
										<div class="ratio-box">
											 <div class="centered portrait-team">
											 			 <svg class="stroke-3 stroke-green" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="181.25px" height="245.75px" viewBox="0 0 181.25 245.75" enable-background="new 0 0 181.25 245.75" xml:space="preserve"><path vector-effect="non-scaling-stroke" d="M84.66,7.333c0,0,33.167-4,51.5,17.833S152.16,73,148.993,91.5l0,0c0,0,5.958,0.01,6.292,5.344s-3.927,14.625-5.344,15.875c-2.288,2.019-3.948,3.073-9.281,1.781c0,0-4.5,16.5-11.667,23.5c-7.167,7-16.208,12-16.208,12v10c0,0-0.282,3.391,4.042,6.167c6.306,4.048,13.167,7.5,33.5,15.667c11.627,4.67,26.208,10.042,26.208,25.917c0,4.75-43.017,32.5-85.955,32.5l0,0c-46,0-85.955-25.083-85.955-32.5c0-15.875,14.582-21.247,26.208-25.917c20.333-8.167,27.194-11.619,33.5-15.667c4.324-2.775,4.042-6.167,4.042-6.167v-10c0,0-9.042-5-16.208-12S40.5,114.5,40.5,114.5c-5.333,1.292-6.993,0.238-9.281-1.781c-1.417-1.25-5.677-10.542-5.344-15.875s6.292-5.344,6.292-5.344l0,0C29,73,26.667,47,45,25.167S96.5,7.333,96.5,7.333"/><path vector-effect="non-scaling-stroke" d="M150.377,82.005c-32.083,0-39.877-28.755-39.877-28.755S83.167,82.833,31.833,82.833"/><path vector-effect="non-scaling-stroke" d="M62.25,165.5"/><path vector-effect="non-scaling-stroke" d="M30.148,74.624c0,21.293-15.847,71.824-25.523,81.501c0,0,32.375,22.5,56.504,12.006"/><path vector-effect="non-scaling-stroke" d="M151.477,75c0,21.293,15.847,71.824,25.523,81.501c0,0-32.375,22.5-56.504,12.006"/> </svg>
											 </div>
										</div>
									</div>
									<div class="lower-phone-model">
										<div class="ratio-box">
										<svg   class="stroke-3 stroke-grey-blue"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1021px" height="203.305px" viewBox="-7.375 0 1021 203.305" enable-background="new -7.375 0 1021 203.305"
	 xml:space="preserve">
<path   vector-effect="non-scaling-stroke" class="fill-white" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M3.399,0c0,0,0,17.225,0,57.636
	c0,54.655,61.352,132.727,160.511,132.727c66.493,0,345.273-0.147,345.273-0.147s265.597,0.16,332.09,0.16
	c99.159,0,160.511-78.072,160.511-132.727c0-40.411,0-57.636,0-57.636"/>
<path   vector-effect="non-scaling-stroke" fill="none" stroke="#D7DAE3" stroke-width="4" stroke-miterlimit="10" d="M523.902,123.548c0,1.461-1.184,2.645-2.645,2.645
	h-52.363c-1.461,0-2.645-1.184-2.645-2.645V71.185c0-1.461,1.184-2.645,2.645-2.645h52.363c1.461,0,2.645,1.184,2.645,2.645V123.548
	z"/>
</svg>
										</div>
									</div>
								</div>
								 <!-- PHONE -->



							</div>
							<!--EMPLOYEE BIG PHONE -->
  		  	</div>
  		  	<div class="row team-text">
				<div class="team-text-box to-right">	
					<h3 class="heading-box"><?php the_field( 'team_team_heading' ); ?><h3>
					<p class="p-box"><?php the_field( 'team_team_text' ); ?></p>
				</div>
  		  	</div>
  		  </div>  

  	</section>


 
<?php endwhile; ?>
 