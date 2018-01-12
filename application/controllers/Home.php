<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/* 
	*	St. Dominic - Home
	*/

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
		/* First Landing Page That Will Show */
		//$this->load->view('homepage');

		//	Search
		$this->form_validation->set_rules('txtSearchString','search string','required');




		$this->form_validation->set_error_delimiters('<div class="alert alert-danger stdom-login-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>', '</div>');
		


		if( $this->form_validation->run() == FALSE )
		{
			//	If Error: return to form with errors
			$this->load->view('homepage');
		}else{

			$this->load->model("search_concerns");


			//	Array containing the string
			$search['mystring'] = $this->input->post('txtSearchString');
				


			
			//	Send string to model para i search.
			//	This will return array of results if merong nag match.
			//	see ../model/Search_concerns.php
			$search['results'] = $this->search_concerns->search_results($search);

			//	Load view with the search results
			$this->load->view('concern_search', $search);
			
		}
	} 












	public function logout(){

		$this->load->model('account_management');
		$this->account_management->logout_account();
		
	}

	public function dashboard_not_allowed()
	{	
		$this->load->view('dashboard_not_allowed');

	}

	public function newsletter_success()
	{
		$this->load->view('newsletter_success');
	}

	public function registration_success()
	{
		$this->load->view('registration_success');
	}






	public function loginpage()
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




	public function create_account()
	{	
		$this->load->model('account_management');
		//echo "<pre>";
		//print_r($_POST);


		//Some Next Level Shit Right Here by Bryan G.
		$createuser = $this->account_management->create_account($_POST);

		redirect('success');

	}



	public function search_concerns($string)
	{
		//	Transfer Search String to Page



		//	Show Concerns Search Page 
		$this->load->view('concern_search');

	}

	
}
