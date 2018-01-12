<?php


function stdom_login()
{


		//	Load Account Manager Model
		$this->load->model('account_management');
		$this->load->model('dashboard_data');


		$this->form_validation->set_error_delimiters('<div class="alert alert-danger stdom-login-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>', '</div>');

		//	Validations
		$this->form_validation->set_rules('txtUsername','Username','required');
		$this->form_validation->set_rules('txtPassword','Password','required');
		



		//	Check if Username/Password Exists
		if( $this->form_validation->run() === FALSE)
		{	
			$this->load->view('login_page');
		}else
		{

			//	1st param: fieldid
			//	2nd param: XSS Filter
			
			$username = $this->input->post('txtUsername', TRUE);
			$password = $this->input->post('txtPassword', TRUE);
			//$response  = $this->input->post('g-recaptcha-response');

			// Google reCAPTCHA
			//$secret = "6LecOSkTAAAAAPYmgG8HcrCFAog-UFE-AM90jrFk";
			//$remoteip	=	$_SERVER['SERVER_ADDR'];

			//$json_gverify	=	file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

			//$gverify = json_decode($json_gverify);

			
			


			$checkaccount = $this->account_management->login_account($username, $password);

			if( $checkaccount == TRUE ){

				redirect('dashboard');

			}else{

			//	Stop Submitting the form

			//	Prepare data
			$data = array(
					"login_status" => "Yikes! Error logging in!"
				);


			//	View same form with data added
			$this->load->view('login_page', $data);
				
			}


			

		}
}


?>