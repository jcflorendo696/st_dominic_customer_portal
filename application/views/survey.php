<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');

?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<form name="sdca_survey_form" method="post">
				<div class="form-group">
					<div>
						<h1 class="stdom-red">Visitor Survey</h1>
						<h4>We want to know your side! Please answer the questions below for us to know on how to improve our service.</h4>
						<hr class="stdom-red"/>
					</div>
				</div>
				<div class="form-group">
					<div>
						<h4 class="stdom-red">1. How well do the professors teach at this school?</h1>

						  <input type="radio" name="survey_q1" value="Extremely Well"> Extremely Well<br>
						  <input type="radio" name="survey_q1" value="Very Well"> Very Well<br>
						  <input type="radio" name="survey_q1" value="Somewhat Well"> Somewhat Well <br/>
						  <input type="radio" name="survey_q1" value="Not So Well"> Not So Well <br/>
						  <input type="radio" name="survey_q1" value="Poor"> Poor <br/>

					</div>
				</div>
				<div class="form-group">
					<div>
						<h4 class="stdom-red">2. How well-maintained are the facilities at this school?</h1>

						  <input type="radio" name="survey_q2" value="Extremely Well-Maintained"> Extremely well-maintained<br>
						  <input type="radio" name="survey_q2" value="Very Well-Maintained"> Very well-maintained<br>
						  <input type="radio" name="survey_q2" value="Somewhat Well-Maintained"> Somewhat well-maintained<br/>
						  <input type="radio" name="survey_q2" value="Not So Well-Maintained"> Not so well-maintained<br/>
						  <input type="radio" name="survey_q2" value="Not Maintained"> Not Maintained <br/>

					</div>
				</div>
				<div class="form-group">
					<div>
						<h4 class="stdom-red">3. How likely are you to recommend this school to others?</h1>

						  <input type="radio" name="survey_q3" value="Extremely Likely"> Extremely Likely<br>
						  <input type="radio" name="survey_q3" value="Very Likely"> Very Likely<br>
						  <input type="radio" name="survey_q3" value="Somewhat Likely"> Somewhat Likely <br/>
						  <input type="radio" name="survey_q3" value="Not So Likely"> Not So Likely <br/>
						  <input type="radio" name="survey_q3" value="Not At All"> Not At All <br/>

					</div>
				</div>
				<div class="form-group">
					<div>
						<h4 class="stdom-red">4. How satisfied are you with the policies that this school sets?</h1>

						  <input type="radio" name="survey_q4" value="Extremely Satisfied"> Extremely Satisfied<br>
						  <input type="radio" name="survey_q4" value="Very Satisfied"> Very Satisfied<br>
						  <input type="radio" name="survey_q4" value="Somewhat Satisfied"> Somewhat Satisfied <br/>
						  <input type="radio" name="survey_q4" value="Not Satisfied"> Not Satisfied <br/>

					</div>
				</div>
				<div class="form-group">
					<div>
						<h4 class="stdom-red">5.	How likely are you to continue attending this school next year?</h1>

						  <input type="radio" name="survey_q5" value="Extremely Likely"> Extremely Likely<br>
						  <input type="radio" name="survey_q5" value="Very Likely"> Very Likely<br>
						  <input type="radio" name="survey_q5" value="Somewhat Likely"> Somewhat Likely <br/>
						  <input type="radio" name="survey_q5" value="Not Applicable"> Not Applicable <br/>

					</div>
				</div>

				<div class="form-group">
					<input type="submit" value="Submit My Response" class="btn btn-stdom center">
				</div>


				<!-- 	This is where the errors will appear -->
				<div class="form-group">
					<?php echo validation_errors(); ?>
				</div>
				<!-- 	This is where the errors will appear -->
			</form>
		</div>
	</div>
</div>


<?php

	require_once('footer-links.php');
	require_once('footer.php');

?>