<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');

?>


		<div class='container-fluid forgot-pass-container'>
			<div class='container'>
		        <div class="row">
		        	<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
		        			<h1 class="stdom-red">Forgot Password?</h1>
		        			<form name='forgotPasswordForm' id="forgotPasswordForm" method='post' action="" class='clearfix'> 
		        				<div class="form-group">
		        					<p>
										If you forgot your password then we'll attempt to email you instructions on how to reset it. If you don't receive the email then try looking in your spam folder.
									</p>
		        				</div>
		        				<div class="form-group input-group">
		        					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		        					<input type="email" id="" name="forgottenEmail" class='form-control' placeholder="Your Email"/>
		        				</div>
		        				<div class="form-group pull-right">
									<input type="submit" value="Reset My Password" class="btn btn-stdom"/>
		        				</div>
		        			</form>
		        				<div class="form-group">
		        					<p><a href="<?php echo site_url() . 'login' ?>" class='stdom-red'>&lt; Back</a></p>
		        				</div>
		        	</div>
		        </div>
			</div>
	    </div>



		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
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