<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');
?>




	<div class="container-fluid disappear-print">
		<div class="row">
			<div class="col-xs-12">
				
				<?php if( $this->session->account_type == "Administrator"): ?>
				<h1 class='stdom-red'><b>Admin Dashboard</b></h1>
				<?php endif;?>

				<?php if( $this->session->account_type == "Executive"): ?>
				<h1 class='stdom-red'><b>Executive's Dashboard</b></h1>
				<?php endif;?>

				<?php if( $this->session->account_type == "Guest"): ?>
				<h1 class='stdom-red'><b>Member Dashboard</b></h1>
				<?php endif;?>

			</div>
		</div>
	</div>


	<?php if( $this->session->account_type == "Administrator" || $this->session->account_type == "Executive"): ?>
		<?php require_once('dashboards-content/admin_executive_dashboard.php'); ?>
	<?php endif;?>
	


	<?php if( $this->session->account_type == "Guest"): ?>
		<?php require_once('dashboards-content/guest_dashboard.php'); ?>
	<?php endif;?>


<?php
	require_once('footer.php');
?>