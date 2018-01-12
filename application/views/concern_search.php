<?php
	require_once('header.php');
	require_once('nav.php');
?>


<div class="container" style="margin-top: 5em;">
	<div class="row">
		<div class="col-xs-12">
			<h1 style="margin-bottom: 2em;">Results for "<?php echo $mystring; ?>"</h1>
		</div>
	</div>
</div>

<div class="container" style="margin-bottom: 5em;">
	<div class="row">
		<div class="col-xs-12">
			
			<table class="table">
				<tr class="stdom-red-bg">
					<td>Name</td>
					<td>Email</td>
					<td>Subject</td>
					<td>Concern</td>
					<td>Date Submitted</td>
					<td>Status</td>
				</tr>

				<?php foreach($results as $data): ?>
				
				<tr>
					<td><?=$data['c_name']; ?></td>
					<td><?=$data['c_email']; ?></td>
					<td><?=$data['c_subject']; ?></td>
					<td><?=$data['c_concern']; ?></td>
					<td><?=$data['c_datesubmitted']; ?></td>
					<td><?=$data['c_status']; ?></td>
				</tr>
				

				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>



<?php
	require_once('footer-links.php');
	require_once('footer.php');

?>