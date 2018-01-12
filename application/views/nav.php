

	<!-- Navigation Bar -->
	<nav class="navbar  navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><img width='40' src="<?php echo base_url() . 'assets/img/logo.png'?>"/></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li ><a href="<?php echo site_url(''); ?>"><b>Home</b><span class="sr-only">(current)</span></a></li> 
	        <li><a href="<?php echo site_url('faq'); ?>"><b>FAQ</b></a></li>
	        <li><a href="<?php echo site_url('concerns'); ?>"><b>Submit Concerns</b></a></li>
	        <li><a href="<?php echo site_url('newsletter'); ?>"><b>Subscribe to Newsletter</b></a></li>
	        <li><a href="<?php echo site_url('survey'); ?>"><b>Take Our Survey!</b></a></li>

	        
	        <?php if(isset($this->session->username) == TRUE): ?>
	        <li><a href="<?php echo site_url('dashboard'); ?>"><b>Dashboard</b></a></li>
	        
	    	<?php endif; ?>
	      </ul>		

	      			<!-- 
	      				If User is "Logged Out", show the Login/Register buttons 
	      			-->
	      			<?php if(isset($this->session->username) == FALSE):?>
     				<form id="signin" class="navbar-form navbar-right" role="form" method='post' action="" style="margin-top: 13px !important;">
                        <a href="<?php echo base_url() . 'login'?>"><button type="button" class="btn btn-stdom" data-toggle="modal" data-target="">Sign In<i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
                        <div class="input-group">
                        	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#j_registration_form"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Account </button>
                        </div>
                   	</form>


                   	<!--
						If User is "Logged In", show "Logout Button"
                   	-->
               		<?php else: ?>

     				<form id="signin" class="navbar-form navbar-right" role="form" method='post' action="" style="margin-top: 13px !important;">

                        <a href="<?php echo base_url() . 'logout'?>"/><button type="button" class="btn btn-stdom">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
                   	</form>
                   	<h4 class='navbar-right' style='padding-top: 5px;'>Hello, <span class="stdom-red"><?php echo $this->session->username; ?>!</span></h6>
                   	<?php endif; ?>



	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>



	<!-- Registration Modal Popup -->
	<div class="modal fade" id="j_registration_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
	        <h3 class="modal-title stdom-red" id="myModalLabel">Register an Account</h3>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<div class="col-lg-12">
	        			<form name='regForm' method='post' action="">
	        				<div class="form-group">
	        					<label>Username</label>
	        					<input type="text" class="form-control input-sm" id="txtRegUsername" name="txtRegUsername" placeholder="" />
	        					<input type="hidden" class="" id="ynah_base_url" placeholder="" value="<?php echo base_url(); ?>"/>
	        				</div>
	        				<div class="form-group">
	        					<div><label>Password</label></div>
	        					<input type="password" class="form-control input-sm" id="txtRegPassword" name="txtRegPassword" placeholder="" style="width: 50%; display: inline;"/>
	        					<label><input type="checkbox" id="showPass"> Show</label>
	        				</div>
	        				<div class="form-group">
	        					<label>Email Address</label>
	        					<input type="text" class="form-control input-sm" id="txtRegEmail" name="txtRegEmail" placeholder="you@something.com" />
	        					
	        				</div>
	        				<div class="form-group" >
	        					<h3 class='stdom-red'>Personal Details</h3>
	        				</div>
	        				<div class="form-group">
	        					<label>First Name:</label>
	        					<input type="text" class="form-control input-sm" name="txtRegFirstname" id="txtRegFirstname" placeholder="" />
	        				</div>
	        				<div class="form-group">
	        					<label>Last Name:</label>
	        					<input type="text" class="form-control input-sm" name="txtRegLastname" id="txtRegLastname" placeholder="" />
	        				</div>
	        				<!-- Google ReCaptcha -->
	        				<div name="g-verify-create-account" id="g-verify-create-account" class="g-recaptcha" data-sitekey="6LecOSkTAAAAAMvWVbtgBn0ogU0nOmFZnZF2Xj_5"></div>
	        				<!-- End -->
	        				<div class="form-group registration-note">

								<div class="loader1">
									<i></i><i></i>
								</div>
	        					<p class="note_registration">Note:
	        					<br/>Please remember that your account is subject for approval.</p>
	        					

	        				</div>
	        			
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
	        <input type="submit" class="btn btn-stdom" id="btnSubmitRegForm" value="Submit Account Application"></input>
	        </form>	
	      </div>
	    </div>
	  </div>
	</div>

	