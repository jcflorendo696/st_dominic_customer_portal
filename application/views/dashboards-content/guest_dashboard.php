<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>


	<div class="container-fluid stdom-dashboard">
		<div class='row'>
			<div class='col-xs-12'>


				<div>

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    
				    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-info" aria-hidden="true"></i> Account Profile</a></li>
				    
				    <li role="presentation" class="active"><a href="#livechatspace" aria-controls="chat" role="tab" data-toggle="tab"><i class="fa fa-weixin" aria-hidden="true"></i> Chat</a></li>
				    
				    <!--
				    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a></li>
				    -->
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">

				    <div role="tabpanel" class="tab-pane fade " id="profile">
				    	<h4 class='text-center'>Your Account Overview</h4>
						<div class='container'>
							<div class='row'>
								<div class='col-lg-6 col-lg-offset-3'>
						    		<table class='table table-striped table-hover table-responsive table-bordered'>
							    		<tr>
							    			<td><strong>Username:</strong></td>
							    			<td><?php echo $this->session->username; ?></td>
							    		</tr>
							    		<tr>
							    			<td><strong>Password:</strong></td>
							    			<td>********</td>
							    		</tr>
							    	</table>
							    	<table  class='table table-striped table-hover table-responsive table-bordered'>
							    		<tr>
							    			<td colspan="2" class='text-center stdom-red-bg'><strong>Personal Details</strong></td>
							    		</tr>
							    		<tr>
							    			<td><strong>Firstname:</strong></td>
							    			<td><?php echo $this->session->firstname; ?></td>
							    		</tr>
							    		<tr>
							    			<td><strong>Lastname:</strong></td>
							    			<td><?php echo $this->session->lastname; ?></td>
							    		</tr>
							    		<tr>
							    			<td><strong>Email:</strong></td>
							    			<td><a href="mailto:<?php echo $this->session->	email; ?>"><?php echo $this->session->email; ?></a></td>
							    		</tr>
							    		<tr>
							    			<td><strong>Position:</strong></td>
							    			<td><?php echo $this->session->position; ?></td>
							    		</tr>
							    		<tr>
							    			<td><strong>Account Type:</strong></td>
							    			<td><?php echo $this->session->account_type; ?></td>
							    		</tr>
							    	</table>
								</div>
							</div>
						</div>
				    </div>




				    <div role="tabpanel" class="tab-pane fade in active" id="livechatspace">
				    		

				    	<h1 class='text-center stdom-red'>Live Chat</h4>
				    		<h4 class="text-center">(This opens in a new window)</h4>
				    		<br/><br/>
				    	<a  href="http://jdcsworks.com/livechat" target="_blank">
				    	<p class="text-center"><button class="btn btn-live-chat">Start Live Chat</button></p>
				    	</a>
				    </div>	






				    

				  </div>

				</div>




				
			</div>
		</div>
	</div>