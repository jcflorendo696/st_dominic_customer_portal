<?php

	require_once('header.php');
	require_once('nav.php');

?>

<div class="container">

	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 concern-form">
			<div>
				<h1 class='stdom-red'>Concerns / Suggestions Corner</h3>
			</div>
			<form name="concerns-form" method="post" action="">
				<div class="form-group">
					<label>Your name:</label>
					<input type="text" class="form-control input-sm" name="concern_Name" id="concern_Name" style="width: 60%;"/>
				</div>
				<div class="form-group">
					<label>Your email:</label>
					<input type="email" class="form-control input-sm" name="concern_Email" id="concern_Email" style="width: 60%;"/>
				</div>
				<div class="form-group">
					<label>Your contact #:</label>
					<input type="text" class="form-control input-sm" name="concern_Contact" id="concern_Contact" style="width: 60%;"/>
				</div>
				<div class="form-group">
					<label><h3 class='stdom-red'>Concern Title</h3></label>
					<input type="text" class="form-control input-sm" name="concern_Subject" id="concern_Subject" style="width: 60%;"/>
				</div>
				<div class="form-group">
					<label><h3 class='stdom-red'>Your Concern:</h3></label>
					<textarea class="form-control " rows="6" name="concern_Complaint" id="concern_Complaint"></textarea>
				</div>
				<div class='form-group'>
					<input type="submit" class="btn btn-success" value="Submit Suggestion"/>
				</div>
			</form>
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