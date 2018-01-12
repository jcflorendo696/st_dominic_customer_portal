<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

?>





	<div class="container-fluid stdom-dashboard">

		<div class='row'>

			<div class='col-xs-12'>





				<div class=''>



				  <!-- Nav tabs -->

				  <ul class="nav nav-tabs" role="tablist">

				    <!--<li role="presentation" ><a href="#student_info" aria-controls="student_info" role="tab" data-toggle="tab"><i class="fa fa-search" aria-hidden="true"></i> Student Details</a></li>-->

				    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-info" aria-hidden="true"></i> Account Profile</a></li>				    

				    <li role="presentation" ><a href="#accountApproval" aria-controls="accountApproval" role="tab" data-toggle="tab"><i class="fa fa-check-square-o" aria-hidden="true"></i> Account Approval</a></li>

				    <li role="presentation" ><a href="#livechatspace" aria-controls="chat" role="tab" data-toggle="tab"><i class="fa fa-weixin" aria-hidden="true"></i> Chat</a></li>

				    <li role="presentation"><a href="#concerns" aria-controls="concerns" role="tab" data-toggle="tab"><i class="fa fa-life-ring" aria-hidden="true"></i> Concerns <span class="badge"><?php echo $count['count'];?></span></a></li>

				    <li role="presentation"><a href="#newsletters" aria-controls="newsletters" role="tab" data-toggle="tab"><i class="fa fa-envelope" aria-hidden="true"></i> Newsletter Signups</a></li>

				    <li role="presentation" ><a href="#createadmin" aria-controls="create_admin" role="tab" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i> Create Admin Account</a></li>

				    <li role="presentation" class="active"><a href="#survey_results" aria-controls="survey_results" role="tab" data-toggle="tab"><i class="fa fa-list-alt" aria-hidden="true"></i> Survey Results</a></li>

				    <!--

				    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a></li>

				    -->

				  </ul>



				  <!-- Tab panes -->

				  <div class="tab-content">





				  	<!-- Student Information Search -->

				    <div role="tabpanel" class="tab-pane fade in " id="student_info">

				    	<!-- <h3 class=''>Student Information</h3> -->


				    	<!--
				    	<form class='form-inline' id="search_student_form">

				    		<div class="form-group">

				    			<input type="text" class='form form-control input-sm' id="student_search" placeholder="Search Student..."/>

				    			<button class='btn btn-success' id="btnSearchStudent">Search Student <i class="fa fa-search" aria-hidden="true"></i></button>

				    		</div>

				    	</form>
						-->
				    	

				    	<table id="student_list_table" class='table'>

				    		<tr id="headers" class='stdom-red-bg'>

				    			<th></th>

				    			<th>Student ID</th>

				    			<th>Name</th>

				    			<th>Year</th>

				    			<th>Course</th>

				    			<th>Address</th>

				    			<th>Email</th>

				    			<th>Contact #</th>

				    		</tr>



				    	<?php foreach($student_details as $sd): ?>

				    		<tr class="student-rows" 

				    			data-studid="<?php echo $sd['student_id']; ?>"

				    			data-studname="<?php echo $sd['firstname'] . " " . $sd['middlename'] . " " . $sd['lastname']; ?>"

				    			data-course="<?php echo $sd['course']; ?>"

				    			data-address="<?php echo $sd['address']; ?>"

				    			data-gender="<?php echo $sd['gender']; ?>"

				    			data-cpno="<?php echo $sd['cp_no']; ?>"

				    			data-birthdate="<?php echo $sd['birthdate']; ?>"

				    			data-telno="<?php echo $sd['tel_no']; ?>"

				    			data-year="<?php echo $sd['year']; ?>"

				    			data-nationality="<?php echo $sd['nationality']; ?>"

				    			data-email="<?php echo $sd['email']; ?>"

				    			data-major="<?php echo $sd['major']; ?>"

				    			> 

				    			<td>

				    				<button class='view-student btn-info btn' data-toggle="modal" data-target=".bs-example-modal-lg" data-studid="<?php echo $sd['student_id']; ?>"> <i class="fa fa-info-circle" aria-hidden="true"></i> View Details </button>

				    			</td>	

				    			<td id='student_id'><?php echo $sd['student_id']; ?></td>

				    			<td id="student_name"><?php echo $sd['firstname'] . " " . $sd['middlename'] . " " . $sd['lastname']; ?></td>

				    			<td id="year"><?php echo $sd['year']; ?></td>

				    			<td id="course"><?php echo $sd['course']; ?></td>

				    			<td id="address"><?php echo $sd['address']; ?></td>

				    			<td id="email"><a href="mailto:<?php echo $sd['email']; ?>"><?php echo $sd['email']; ?></a></td>

				    			<td id="cp_no"><?php echo $sd['cp_no']; ?></td>

				    		</tr>

				    	<?php endforeach; ?>









				    	



				    	</table>



				    	<?php //echo $paginationlinks; ?>



						<!-- View Students Modal -->

						<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">

						  <div class="modal-dialog modal-lg" role="document">

						    <div class="modal-content">

						      <div class="modal-header">

						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						        <h2 class="modal-title stdom-red" id="v_student_name"></h2>

						        <h4 class="stdom-red" id="v_student_id"></h4>

						        <h4 class="" id="v_course"></h4>

						        <h4 class="stdom-red" id="v_year"></h4>

						      </div>

						      <div class="modal-body">





						      	<div class="form-group">

							    	<label>Address</label>

							    	<input type="text" class='form-control input-sm' id="v_address" value='<?php  ?>' disabled/>

						      	</div>



						      	<div class='form-group'>

						      		<label>Birthdate</label>

						    		<input type="text" class='form-control input-sm' id="v_birthdate" value='' disabled/>

						      	</div>



						      	<div class='form-group'>

							    	<label>Major</label>

							    	<input type="text" class='form-control input-sm' id="v_major" value='' disabled/>

						      	</div>



						      	<div class='form-group'>

							    	<label>Email</label>

							    	<input type="text" class='form-control input-sm' id="v_email" value='' disabled/>

						      	</div>



						      	<div class='form-group'>

							    	<label>Nationality</label>

							    	<input type="text" class='form-control input-sm' id="v_nationality" value='' disabled/>

						      	</div>







						      </div>

						      	

						      

						      <div class="modal-footer">

						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

						      </div>

						    </div><!-- /.modal-content -->

						  </div><!-- /.modal-dialog -->

						</div><!-- /.modal -->

						<!-- View Students Modal End -->

						

				    </div>

				    







				    <!-- Account Overview Tab -->

				    <div role="tabpanel" class="tab-pane fade " id="profile">

				    	<h4 class='text-center'>Your Account Overview</h4>

						<div class='container'>

							<div class='row'>

								<div class='col-lg-6 col-lg-offset-3'>

						    		<table class='table  table-responsive table-bordered'>

							    		<tr>

							    			<td><strong>Username:</strong></td>

							    			<td><?php echo $this->session->username; ?></td>

							    		</tr>

							    		<tr>

							    			<td><strong>Password:</strong></td>

							    			<td>********</td>

							    		</tr>

							    	</table>

							    	<table  class='table table-hover table-responsive '>

							    		<tr>

							    			<td colspan="2" class='text-center stdom-red-bg' ><strong>Personal Details</strong></td>

							    		</tr>

							    		<tr>

							    			<td style="vertical-align: middle;"><strong>Firstname:</strong></td>

							    			<td><?php echo $this->session->firstname; ?></td>

							    		</tr>

							    		<tr>

							    			<td style="vertical-align: middle;"><strong>Lastname:</strong></td>

							    			<td><?php echo $this->session->lastname; ?></td>

							    		</tr>

							    		<tr>

							    			<td><strong>Email:</strong></td>

							    			<td><a href="mailto:<?php echo $this->session->	email; ?>"><?php echo $this->session->email; ?></a></td>

							    		</tr>

							    		<tr>

							    			<td style="vertical-align: middle;"><strong>Position:</strong></td>

							    			<td>

												<?php //echo $this->session->position; ?>

												<select id="account-position" class="form-control" style="font-size: 14px;" disabled>	

													<option value="Professor">Professor</option>

													<option value="Principal">Principal</option>

													<option value="Vice Chancellor of Academics">Vice Chancellor of Academics</option>

													<option value="Custodian">Custodian</option>

												</select>	

											</td>

							    		</tr>

							    		<tr>

							    			<td style="vertical-align: middle;"><strong>Account Type:</strong></td>

							    			

							    			<td id="">

							    				<?php //echo $this->session->account_type; ?>

							    				<select id="account_details_dropdown" class='form-control  ' style="font-size: 14px;" disabled>

							    					<option value='Administrator'>Administrator</option>

							    					<option value='Executive'>Executive</option>

							    					<option value='Guest'>Guest</option>

							    				</select>

							    			</td>



							    		</tr>

										<tr>

											<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>"/>

							    			<td colspan="2"><input type="submit" class="btn btn-info" id="btnEditAccountDetails" value="Change Account Type"/></td>

							    		</tr>

							    	</table>	

							    	<div class="text-center"><i class="accnt-loading fa fa-spinner fa-spin fa-2x"></i></div>

									<div id="account_details_alert" class="alert alert-success">

									  <strong>Success!</strong> Account Type Updated!

									</div>

									<div id="response-ajax">



									</div>

								</div>

							</div>

						</div>

				    </div>









				   <!-- Account Approval Tab -->

				   <div role="tabpanel" class="tab-pane fade " id="accountApproval">

				    	<h4 class='text-center'>Account Management</h4>

				    	<?php //print_r($testing); ?>

						<table  class='table table-hover table-responsive table-bordered table-striped'>

							<tr class=''>

								<td colspan='' class='text-center stdom-red-bg'><strong>Action</strong></td>

								<td class='text-center stdom-red-bg'><strong>Fullname</strong></td>

								<td class='text-center stdom-red-bg'><strong>Username</strong></td>

								<td class='text-center stdom-red-bg'><strong>Email Address</strong></td>

							</tr>



							<?php foreach ($approvals as $approval): ?>

							<tr>

								 

								<td class='text-center'>

									<button class='btn-approved btn' id='<?php echo $approval["id"] ?>'>Approve <i class="fa fa-thumbs-up" aria-hidden="true"></i></button> 

									<button class='btn-warning btn' id='<?php echo $approval["id"] ?>'>Reject <i class="fa fa-thumbs-down" aria-hidden="true"></i></button></td>

								<td class=''><?php echo $approval['firstname'] . " " . $approval['lastname']; ?></td>

								<td><?php echo $approval['username']; ?></td>

								<td class='text-center'><a href=""><?php echo $approval['email']; ?></a></td>

								

							</tr>

						<?php endforeach; ?>

						</table>

				    </div>

				

				    <!-- Livechat Tab -->

				    <div role="tabpanel" class="tab-pane fade in " id="livechatspace">



				    	<?php if( $this->session->account_type == "Administrator"): ?>

				    	<h1 class='text-center stdom-red'>Live Chat</h4>

				    		<h4 class="text-center">(This opens in a new window)</h4>

				    		<br/><br/>

				    	<a  href="http://jdcsworks.com/livechat" target="_blank">

				    	<p class="text-center"><button class="btn btn-live-chat">Start Live Chat</button></p>

				    	</a>

				    	<?php endif; ?>



				    	<?php if ($this->session->account_type == "Executive"): ?>

				    	<h1 class='text-center stdom-red'>Live Chat</h4>

				    		<h4 class="text-center">(Please login an <span class="stdom-red">Administrator Account</span> to use LiveChat)</h4>

				    		<br/><br/>

				    	<a  href="http://jdcsworks.com/livechat" target="_blank">

				    	<p class="text-center"><button class="btn btn-live-chat" disabled>Start Live Chat</button></p>

				    	</a>

				    	<?php endif; ?>





				    </div>	







				    <!-- Concerns Tab -->

				    <div role="tabpanel" class="tab-pane fade" id="concerns">

				    	<h3>Concerns</h3>


	





				    	<table class='table'>

				    		<h3>Recent Concerns</h3>

				    		<tr class="stdom-red-bg">

				    			<td class="disappear-print">Actions</td>

				    			<td>Status</td>

				    			<td>Subject</td>

				    			<td>Name</td>

				    			<td>Contact Number</td>

				    			<!-- <td>Concern</td> -->

				    			<td>Date Submitted</td>

				    		</tr>

				    	

				    		<?php foreach($concerns as $c): ?>



					    		<tr data-cID="<?php echo $c['id']; ?>"

					    			data-cName="<?php echo $c['name']; ?>" 

					    			data-cEmail="<?php echo $c['email']; ?>"

					    			data-cContact="<?php echo $c['contact']; ?>"

					    			data-cConcern="<?php echo $c['concern']; ?>"

					    			data-cDateSubmitted="<?php echo $c['date_submitted']; ?>"

					    			data-cSubject="<?php echo $c['subject']; ?></a>"

					    			data-cStatus="<?php echo $c['status']; ?>"

					    			>



					    			<!-- View Concern Button -->

					    			<td class="disappear-print">

					    				<button id="btn<?php echo $c['id']; ?>" class='btn btn-info view-concern' data-toggle="modal" data-target="#viewConcern"><i class="fa fa-search-plus" aria-hidden="true"></i> View Concern</button>

					    			</td>

					    			



					    			<!-- Status -->

					    			<td>

					    				<span id="<?php echo 'status'.$c["id"]; ?>" class="concernStatusLabel clabel label"><?php echo $c['status']; ?></span>

					    			</td>

					    			

					    			<!-- Subject -->

					    			<td style="text-transform: uppercase;">

					    				<strong><?php echo $c['subject']; ?></strong>

					    			</td>

					    			



					    			<!-- Name-->

					    			<td>

					    				<strong class='concern_name'><?php echo $c['name']; ?></strong> 

					    				(<a href="mailto:<?php echo $c['email']; ?>"><?php echo $c['email']; ?></a>)

					    			</td>

					    			<td><?php echo $c['contact']; ?></td>

					    			<!-- <td><?php echo $c['concern']; ?></td> -->

					    			<td><?php echo $c['date_submitted']; ?></td>

					    		</tr>



				    		<?php endforeach; ?>

				    		<!-- End For-Each -->



				    	</table>

				    	

				    	<button type="button" class="btn btn-warning" onclick="print();">Print</button>

				    	

				    </div>











					<!-- Concerns Modal -->

					<div class="modal fade" id="viewConcern" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

					  <div class="modal-dialog modal-lg" role="document">

					    <div class="modal-content">

					      <div class="modal-header">

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					        

					        <div class='clearfix'>

					        <div class="pull-right" style="margin-top: 11px;">

								<h6 class="modal-title stdom-red">Last Seen: </h6>

					        	<h6 class="modal-title stdom-red" id="concern_DateSubmitted"></h1>

					        	

					        </div>

					       	

					       	<!-- Modal Header Stuff -->

					        <div class="pull-left">



								<h1 class="modal-title stdom-red" id="concern_Sender"></h1>

					        	<h4 class="modal-title stdom-red" id="concern_Email"></h5>

					        	<h4 class="modal-title stdom-red" id="concern_ContactNum"></h4>

					        	<div class="form-group">

					        		<label class="stdom-red"><strong>Status: </strong></label>

					        		<select id="concernStatus" class="statusdropdown form-control">

					        			<option value="Unresolved">Unresolved</option>

					        			<option value="Completed">Completed</option>

					        			<option value="Pending">Pending</option>

					        		</select>

					        	</div>

					        	<div class="form-group">

						        	<i id="concern_status_loading" class="fa fa-spinner fa-spin fa-1x"></i>

									<div id="concern_status_notif" class="alert alert-success">

										 <strong>Success!</strong> Status Updated!

									</div>

					        	</div>



					        </div>

					        </div>

					      </div>

					      <!-- Modal Header End -->



							<!-- Modal Body -->

							<div class="modal-body">

					     	

					     	<input type="hidden" value="" id="concernID"/>

					     	<input type="hidden" value="" id="concernStatusLabel" name="concernStatusLabel"/>



					       	<h3 id="concern_Subject" style="font-weight: bold; text-transform: capitalize;"></h3>

					       	<h1 id="concern_Message"></h1>



					       		<!-- 	Your Reply 		-->

					       		<div id="replyForm">

					       			<label><h4>Reply:</h4></label>

					       			<textarea id="txtFieldReplyToConcern" class="form-control" rows="5"></textarea>

					       		</div>	

					       		<!-- 	Your Reply End  -->

					      



							</div>

							<!-- Modal Body End -->







					      <!-- Modal Footer Start -->

					      <div class="modal-footer">

					      	

							<div id="reply-test-div">



							</div>

					        <button id="btnReplyToConcern" type="button" class="btn btn-success">Send</button>

					      </div>

					      <!-- Modal Footer End -->

					    </div>

					  </div>

					</div>

					<!-- Concern Modal End -->





				    

				    <div role="tabpanel" class="tab-pane fade" id="newsletters">





						<div class="container">

							<div class="row">

								<div class="col-lg-6 col-lg-offset-3">

							    	<h3>Newsletter Email List</h3>

							    	<table class="table">

							    		<tr class="stdom-red-bg">

							    			<th>Name</th>

							    			<th>Email</th>

							    		</tr>

							    

							    	<?php foreach($newsletters as $n):?>



							    	<tr><td><?php echo $n['name']; ?></td>

							    	<td><?php echo $n['email']; ?></td></tr>



							    	<?php endforeach; ?>



									</table>

								</div>

							</div>

							<div class="row">

								<div class="col-lg-6 col-lg-offset-3">

									<input type="button" value="Download Mailing List" class="btn btn-info"/>

								</div>

							</div>

						</div>

				    </div>

















				    <div role="tabpanel" class="tab-pane fade-in " id="createadmin">





						<div class="container">

							<div class="row">

								<div class="col-lg-6 col-lg-offset-3">

							    	<h3 class="stdom-red">Create Administrator Account</h3>

							    	<form class="" name="createadmin_form" method="position">

							    		<div class="form-group">

							    			<label>Username:</label>

							    			<input type="text" class='form-control input-sm' name="new_admin_username" id="new_admin_username"/>

							    		</div>

							    		<div class="form-group">

							    			<label>Password:</label>

							    			<input type="password" class='form-control input-sm' name="new_admin_password" id="new_admin_password"/>

							    		</div>

							    		<div class="form-group">

							    			<label>Email:</label>

							    			<input type="email" class='form-control input-sm' name="new_admin_email" id="new_admin_email"/>

							    		</div>

							    		<div class="form-group">

							    			<label>Firstname:</label>

							    			<input type="text" class='form-control input-sm' name="new_admin_firstname" id="new_admin_firstname"/>

							    		</div>

							    		<div class="form-group">

							    			<label>Lastname:</label>

							    			<input type="text" class='form-control input-sm' name="new_admin_lastname" id="new_admin_lastname"/>

							    		</div>

							    		<div class="form-group pull-right">

							    			<i class="create-admin-loading fa fa-spinner fa-spin fa-1x"></i>

							    			<input type="submit" id="btnCreateAdminAccount" value="Create Account" class="btn btn-stdom"/>

							    		</div>

							    	</form>

								</div>

							</div>

							<div>

								<div class="col-lg-6 col-lg-offset-3">

									

								    

									



									<div id="create_admin_alert" class="alert alert-success">

										 <strong>Success!</strong> New Administrator Account Created.

									</div>

									

							    	<div id="createAdminNotif" class="form-group">

							    			

							    	</div>



								</div>

							</div>

						</div>

				    </div>















				    <!-- Survey Results Panel -->

					<div role="tabpanel" class="tab-pane fade-in active" id="survey_results">





						<div class="container">

							<div class="row">

								<div class="col-xs-12">

									<h1>Survey Results</h4>

									<button type="button" class="btn btn-warning" onclick="print();">Print</button>

								</div>

							</div>

						</div>



							<div class="container">

								<div class="row">

									<div class="col-xs-12">

										<!-- Google Chart Question # 1 -->

										<h2 class="" style="margin-bottom: 2%; margin-top: 2%;">1. How well do the professors teach at this school?</h4>

										<!-- Chart -->	

										<div  id="question_1_barchart"></div>

										<!-- Divider -->

										<hr class="style14" style="margin-bottom: 5%; margin-top: 5%;"/>

									</div>	

								</div>

							</div>





							





					<div class="container">

						<div class="row">

							<div class="col-xs-12">

							<!-- Google Chart Question # 2 -->

							<h2 class="" style="margin-bottom: 2%; margin-top: 2%;">2. How well-maintained are the facilities at this school?</h4>

							

							<!-- Chart -->

							<div id="question_2_barchart"></div>

							<!-- Divider -->

							<hr class="style14" style="margin-bottom: 5%; margin-top: 5%;"/>

							</div>

						</div>

					</div>













					<div class="container">

						<div class="row">

							<div class="col-xs-12">

							<!-- Google Chart Question # 3 -->

							<h2 class="" style="margin-bottom: 2%; margin-top: 2%;">3. How likely are you to recommend this school to others?</h4>

							

							<!-- Chart -->

							<div id="question_3_barchart"></div>

							<!-- Divider -->

							<hr class="style14" style="margin-bottom: 5%; margin-top: 5%;"/>

							</div>

						</div>

					</div>













					<div class="container">

						<div class="row">

							<div class="col-xs-12">

							<!-- Google Chart Question # 4 -->

							<h2 class="" style="margin-bottom: 2%; margin-top: 2%;">4. How satisfied are you with the policies that this school sets?</h4>

							

							<!-- Chart -->

							<div id="question_4_barchart"></div>

							<!-- Divider -->

							<hr class="style14" style="margin-bottom: 5%; margin-top: 5%;"/>

							</div>

						</div>

					</div>













					<div class="container">

						<div class="row">

							<div class="col-xs-12">

							<!-- Google Chart Question # 5 -->

							<h2 class="" style="margin-bottom: 2%; margin-top: 2%;">5.	How likely are you to continue attending this school next year?</h4>

							

							<!-- Chart -->

							<div id="question_5_barchart"></div>

							<!-- Divider -->

							<hr class="style14" style="margin-bottom: 5%; margin-top: 5%;"/>

							</div>

						</div>

					</div>















							<?php foreach($chart_results as $key => $value): ?>

							<input type="hidden" id="q1_<?php echo $key; ?>" value="<?php echo $value; ?>"/>

							<?php endforeach; ?>



							<?php foreach($chart_results_2 as $key => $value): ?>

							<input type="hidden" id="q2_<?php echo $key; ?>" value="<?php echo $value; ?>"/>

							<?php endforeach; ?>



							<?php foreach($chart_results_3 as $key => $value): ?>

							<input type="hidden" id="q3_<?php echo $key; ?>" value="<?php echo $value; ?>"/>

							<?php endforeach; ?>









							<?php foreach($chart_results_4 as $key => $value): ?>

							<input type="hidden" id="q4_<?php echo $key; ?>" value="<?php echo $value; ?>"/>

							<?php endforeach; ?>



							<?php foreach($chart_results_5 as $key => $value): ?>

							<input type="hidden" id="q5_<?php echo $key; ?>" value="<?php echo $value; ?>"/>

							<?php endforeach; ?>









					</div>







				  </div>



				</div>









				

			</div>

		</div>

	</div>