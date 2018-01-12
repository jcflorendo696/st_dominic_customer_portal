<?php

	require_once('header.php');
	require_once('nav.php');

?>

<div class="container-fluid newsletter-page">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 " >
			<h1 class='stdom-red'>Get In The Know, Dominican!</h1>
			<h4>To get the latest and greatest updates from our Alma Mater every week, enter your name and email below! </h3>
			

			<form name="newsletter-form" method="post" action="">

				

				<div class="form-group">
					<label>Your name:</label>
					<input type="text" class="form-control input-sm" name="newsletter_name" id="newsletterName" style="width: 60%;"/>
				</div>
				<div class="form-group">
					<label>Your email:</label>
					<input type="email" class="form-control input-sm" name="newsletter_email" id="newsletterEmail" style="width: 60%;"/>
				</div>
				




				<div class='form-group'>
					<input type="submit" class="btn btn-success" value="Count Me In!"/>
				</div>




			</form>
		</div>
	</div>
	</div>

</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
				<div class="form-group">
					<?php echo validation_errors(); ?>
				</div>
		</div>
	</div>
</div>

<?php

	require_once('footer-links.php');
	require_once('footer.php');
?>