<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');
?>

	<div class='container-fluid'>
		<div class='container stdom-logout'>
	        <div class="row">
	        	<div class="col-lg-12">
	        			<h1>You are now <span class='stdom-red'>logged out.</span></h1>
	        			<h3>Go back to <a href='<?php echo base_url(); ?>'>Home</a> or <a href='<?php echo base_url() . "login" ;?>'>Login</a>.</h3>



	        	</div>
	        </div>
	    </div>
	    </div>



<?php
	require_once('footer-links.php');
	require_once('footer.php');
?>