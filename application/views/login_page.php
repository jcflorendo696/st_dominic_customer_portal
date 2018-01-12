<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');
?>

		<div class='container-fluid login-container'>
			<div class='container'>
		        <div class="row">
		        	<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
		        			<h1 class="stdom-red">Account Login</h1>
		        			<form name='loginForm' method='post' action=""> 
		        				<div class="form-group">
		        					<label>Username</label>
		        					<input autofocus type="text" class="form-control input-sm" id="txtUsername" name='txtUsername' placeholder="" autocomplete="off" value='<?php  echo set_value("txtUsername"); ?>'/>
		        				</div>
		        				<div class="form-group">
		        					<label>Password</label>
		        					<input type="password" class="form-control input-sm" id="txtPassword" name='txtPassword' placeholder="" value="<?php echo set_value('txtPassword'); ?>"/>
		        				</div>

		        				<!-- Google reCAPTCHA -->
		        				<!-- <div class="g-recaptcha" data-sitekey="6LecOSkTAAAAAMvWVbtgBn0ogU0nOmFZnZF2Xj_5"></div>-->
		        				<!-- End -->

		        				<div class="form-group text-right">
		        					<p><a href="<?php echo site_url() . "forgot-password"; ?>" class="stdom-red">Forgot Password?</a></p>
		        				</div>

							      <div class="modal-footer">
							        
							        <input type="submit" class="btn btn-stdom" value="Sign In"></input>
							        </form>
							      </div>

		        			</form>
		        	</div>
		        </div>
			</div>
	    </div>

	    <div class='container'>
	    	<div class='row'>
	    		<div class='col-lg-12'>
					<!-- Errors Area -->
					<div class="row">
						<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
							<!-- <h1>Home</h1> -->

							<?php if(isset($login_status)): ?>
							
								<div class="alert alert-danger stdom-login-error" role="alert">
								  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
								  <span class="sr-only">Error:</span>
								  <?php echo $login_status; ?>
								</div>
							
							<?php endif; ?>


							<?php echo validation_errors(); ?>
							<?php //echo $_GET['status']; ?>

							
							
						</div>
					</div>
	    		</div>
	    	</div>
	    </div>


<?php
	require_once('footer-links.php');
	require_once('footer.php');
?>