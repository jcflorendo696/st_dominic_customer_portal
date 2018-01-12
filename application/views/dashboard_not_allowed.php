<?php

	require_once('header.php');
	require_once('nav.php');
?>

	<div class='container'>
		<div class='row'>
			<div class='col-xs-12'>
				<!-- <h1 class='text-center'>Direct Access Not Allowed!</h1> -->
				<a href="<?php echo base_url(); ?>">
				<img class='img-responsive' style='margin: 0 auto;' src="<?php echo base_url() . '/assets/img/dashboard-direct-access-error.png';?> "/>
				</a>
			</div>
		</div>
	</div>

<?php

	require_once('footer.php');
?>