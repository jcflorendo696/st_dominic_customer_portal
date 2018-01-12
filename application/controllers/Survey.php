<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Survey extends CI_Controller
{
	public function index()
	{
		//$this->load->view('survey');

		
		$this->form_validation->set_rules('survey_q1','Question #1','required');
		$this->form_validation->set_rules('survey_q2','Question #2','required');
		$this->form_validation->set_rules('survey_q3','Question #3','required');
		$this->form_validation->set_rules('survey_q4','Question #4','required');
		$this->form_validation->set_rules('survey_q5','Question #5','required');
		

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger stdom-login-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>', '</div>');


		if( $this->form_validation->run() == FALSE )
		{
			$this->load->view('survey');
		}else{
			//Set Timezone for Insert. (By Default It Uses Server Time. This Changes it To Manila Time)
			date_default_timezone_set("Asia/Manila");

			//	Load Model for Survey interacting with Database > js_survey_results
			$this->load->model('survey_management');


			//	Load Survey View.
			$this->load->view('survey');
			
			//	Get Survey Form Answers and Store in an Array
			$survey_results = array(
					'question1'	=>	$this->input->post('survey_q1'),
					'question2'	=>	$this->input->post('survey_q2'),
					'question3'	=>	$this->input->post('survey_q3'),
					'question4'	=>	$this->input->post('survey_q4'),
					'question5'	=>	$this->input->post('survey_q5'),
					'date_submitted' 	=> date("F d, Y -  h:i:sa")
				);
			

			/*
			echo "<pre>";
			print_r($survey_results);
			*/

			//	Pass Survey Results Array To Model 
			$this->survey_management->insertSurveyResults($survey_results);

			//	Show Thank You Page
			redirect('thanks');




		}

	}


		public function survey_thanks()
		{
			$this->load->view('survey_thanks');
		}
}

?>