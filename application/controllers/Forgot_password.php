<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		

		$this->form_validation->set_rules('forgottenEmail','Email','required');


		$this->form_validation->set_error_delimiters('<div class="alert alert-danger stdom-login-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>', '</div>');
	
		if( $this->form_validation->run() == FALSE )
		{
			//	If Error: return to form with errors
			$this->load->view('forgot_password');
		}else{
			//	If ok, proceed to thank you form.
			$this->load->model("account_management");


			$forgottenaccount = array(
					'concern_email' => $this->input->post('forgottenEmail'),
				);

			$this->account_management->forgot_password($forgottenaccount);


			redirect('thankyou');

		}

	}

}


?>