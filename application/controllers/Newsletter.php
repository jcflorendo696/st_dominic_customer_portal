<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Newsletter extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{



		$this->form_validation->set_rules('newsletter_name','Name','required');
		$this->form_validation->set_rules('newsletter_email','Email','required');


		$this->form_validation->set_error_delimiters('<div class="alert alert-danger stdom-login-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>', '</div>');
	
		if( $this->form_validation->run() == FALSE )
		{
			//	If Error: return to form with errors
			$this->load->view('newsletter_page');
		}else{


			$this->load->model('newsletter_management');

			$newsletter_data = array(
					"name"	=> $this->input->post('newsletter_name'),
					"email" => $this->input->post('newsletter_email')
				);

			$this->newsletter_management->add_email($newsletter_data);

			//$this->load->view('newsletter_page');
			redirect('newsletter-success');

		}

	}


}

?>



