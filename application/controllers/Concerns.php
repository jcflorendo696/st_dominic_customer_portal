<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Concerns extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		

		$this->form_validation->set_rules('concern_Name','Name','required');
		$this->form_validation->set_rules('concern_Email','Email','required');
		$this->form_validation->set_rules('concern_Contact','Contact Number','required');
		$this->form_validation->set_rules('concern_Complaint','Message','required');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger stdom-login-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>', '</div>');
	
		if( $this->form_validation->run() == FALSE )
		{
			//	If Error: return to form with errors
			$this->load->view('file_concern');
		}else{
			//	If ok, proceed to thank you form.
			$this->load->model("concerns_management");


			$concern_data = array(
					'concern_subject'	=>	$this->input->post('concern_Subject'),
					'concern_name' => $this->input->post('concern_Name'),
					'concern_email' => $this->input->post('concern_Email'),
					'concern_contact' => $this->input->post('concern_Contact'),
					'concern_complaint' => $this->input->post('concern_Complaint')
				);



			$this->concerns_management->get_concerns($concern_data);

			redirect('thankyou');

			//$this->load->view('thankyou', $concern_data);
		}

	}

}


?>