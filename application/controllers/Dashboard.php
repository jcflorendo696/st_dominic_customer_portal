<?php
defined('BASEPATH') OR exit('No direct script access allowed');



/**
*
*	This calls the Dashboard for users with accounts already. (Admin, Members.)
*
*/
class Dashboard extends CI_Controller {

	public $accounttype = "";

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		

		$this->session->username;

		
		if( $this->session->username == FALSE){
			$this->load->view('dashboard_not_allowed');
		}else{








			//	Load Models Needed
			$this->load->model('account_management');
			$this->load->model('dashboard_data');
			$this->load->model('survey_management');

			//	Load data needed to be shown in View Dashboard
			$data['surveyresults']	=	$this->survey_management->getSurveyResults();
			$data['concerns']  		= 	$this->dashboard_data->getConcerns();
			$data['approvals'] 		= 	$this->account_management->account_for_approval();
			$data['testing'] = array(
				1,3,4,5
				);
			$data['student_details'] = $this->dashboard_data->getStudents();
			//$data['paginationlinks'] = $paginationlinks;
			$data['newsletters']	 = $this->dashboard_data->getNewsletters();
			$data['count']	=	$this->dashboard_data->getConcernsCount();


			//	Populate Survey Charts
			$data['chart_results'] = $this->survey_management->countResults();
			$data['chart_results_2'] = $this->survey_management->countResults2();
			$data['chart_results_3'] = $this->survey_management->countResults3();
			$data['chart_results_4'] = $this->survey_management->countResults4();
			$data['chart_results_5'] = $this->survey_management->countResults5();



			//	Show view with the data included
			$this->load->view('dashboard', $data);













		}
		
	}


	/*
	*	AJAX - Change Account Type
	*/
	public function update_account_details()
	{
		$accounttype = $_POST['accountType'];

		//	Load Updating of Account Type Model
		$this->load->model("account_management");

		//	Send new account type to Model
		$test = $this->account_management->update_account_type($accounttype);

		/*	For Testing
		echo "<pre>";
		$response = "Hello World" . "<br/>" .  $test;
		*/

		//echo $response;


	}



	public function reply_to_concern()
	{

		$reply = $_REQUEST['reply'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];

		$response = "Success! Reply Sent!";

		echo $response;

		$this->load->library('email');

		$this->email->from('sjdvelasquez@sdca.edu.ph', 'St. Dominic Customer Service Platform');
		$this->email->to($email);
		//$this->email->cc('');			//this is for CC
		//$this->email->bcc('them@their-example.com');				//this is for BCC

		$this->email->subject('Concern:' . $subject . ' - St. Dominic Customer Support');
		$this->email->message($reply);

		$this->email->send();

	}



	public function create_administrator()
	{	

		//	Get Details from AJAX: custom.js
		$admin_details = array(
			'username'	=>	$_REQUEST["username"],
			'password'	=>	$_REQUEST["password"],
			'firstname'	=>	$_REQUEST['firstname'],
			'lastname'	=>	$_REQUEST["lastname"],
			'email' 		=>	$_REQUEST["email"],
			'account_type'	=>	'Administrator'
			);


		//$response = "Hello Admin Added!";

		//	Check if username field has value
		if( $admin_details['username'] == "")
		{
			
			$error = "Please fill up all required fields";
			return $error;

		}else
		{
			//	Enter details to database - js_users table
			$this->db->insert('js_users',$admin_details);	
		}

		

		/*	For Testing
		echo "<pre>";
		print_r($admin_details);
		echo $response;
		*/
	}

	public function update_concern_status()
	{	
		$id 	 = $_REQUEST['id'];
		$subject = $_REQUEST['subj'];		
		$status = $_REQUEST['status'];

		$data = array(
				'status'	=>	$status,
			);

		//	WHERE id = $id
		$this->db->where('id', $id);

		$this->db->update('js_concerns', $data);


	}




	
}

