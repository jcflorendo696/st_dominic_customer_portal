<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');
?>




	<div class="container-fluid" >
		<div class="container" style="">
			<div class="row">
				<div class="col-xs-12 temp-slider-area">
					
					<h1 class='stdom-red'><b>SDCA Customer Support</b></h1>
				
					<!-- <img src="<?php echo base_url() . 'assets/img/banner-guidelines.jpg' ?>" style="margin: 20px 0;"/>
					<a id="stdom_newsletter" style="display: none;" href="<?php echo base_url() . '/assets/img/dummy-image-800x800.jpg'?>" title="St. Dominic Newsletter">Material Design Sample</a>
					-->
				</div>
			</div>
		</div>
	</div>





	<div class="container-fluid" style="display: none;">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-responsive center" style="margin-bottom: 20px;" src="<?php echo base_url() . '/assets/img/banner-guidelines.jpg'; ?>" />
			</div>
		</div>
	</div>
		
<div class='container-fluid stdom-strip stdom-bg'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-6 col-md-8 hidden-xs'>
				<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/DOXmZeqZcqs?rel=0&autoplay=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class='col-lg-6 col-md-4 col-xs-12 video-teaser-header'>
				<h1 class='stdom-red'><b>#IAmRevolutionized</b> </h3>
				<p class=''>St. Dominic College of Asia performs its various roles toward the achievement of its Vision-Mission-Goals as it anchors itself on a four-point set of core values. </p>

				<p>I am proud to be a Dominican!</p>
			</div>
		</div>
	</div>
</div>



	<div class='container'>
		<!-- School Showcase -->
		<div class='row'>
			<div class="col-xs-12">
				<h1 style="visibility: hidden;">St. Dominic College of Asia</h1>
			</div>
		</div>
		
		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="<?php echo base_url() . '/assets/img/showcase02.jpg'?>" alt="...">
		      <div class="caption">
		        <h3 class='stdom-red'><b>Dominican Alumni</b></h3>
		        <p>Meet some of the best Dominicans in the industry. Pursuing greatness.</p><br>
		        <p class='text-right'><a href="https://www.facebook.com/St-Dominic-College-of-Asia-Alumni-Page-257043431028102/?fref=ts/" class="btn btn-stdom" role="button">Read More</a> </p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="<?php echo base_url() . '/assets/img/showcase01.jpg'?>" alt="...">
		      <div class="caption">
		        <h3 class='stdom-red'><b>Facilities</b></h3>
		        <p>See what you will get access to as a proud Dominican.</p><br>
		        <p class='text-right'><a href="http://stdominiccollege.edu.ph/higher-education/sbcs-facilities.html/" class="btn btn-stdom" role="button">Read More</a> </p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="<?php echo base_url() . '/assets/img/showcase03.jpg'?>" alt="...">
		      <div class="caption">
		        <h3 class='stdom-red'><b>One Asia Heritage</b></h3>
		        <p>St. Dominic College of Asia, an institution that envisions a community of dynamic and proactive learners within the Asia-Pacific region.</p>
		        <p class='text-right'><a href="http://stdominiccollege.edu.ph/culture/one-asia-heritage.html/" class="btn btn-stdom" role="button">Read More</a> </p>
		      </div>
		    </div>
		  </div>
		</div>
	</div> <!-- Container End -->




<?php
//	Footer with links
require_once('footer-links.php');

//	Footer with javascripts
require_once('footer.php');
?>