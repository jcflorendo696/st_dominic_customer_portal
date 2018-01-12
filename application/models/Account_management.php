<?php

/*
	
	Name:			MODEL: Account Management.
	Description:	Handles Login, Logout, Forgot Password, Create Account, Account Approval, Update Account Type
	Author:			jsf
	Date:			September 19, 2016

*/


class Account_management extends CI_Model
{


    public function __construct()
    {
            parent::__construct();
    }


	public function login_account($username, $password)
	{
		$member_details = array();
		
		$query = $this->db->query("SELECT * FROM js_users");

		foreach ($query->result() as $data) {
			
			if( $username == $data->username && $password == $data->password ){

				$member_details = array(
						"id" 		=> $data->id,
						"username" 	=> $data->username,
						"password" 	=> $data->password,
						"firstname" => $data->firstname,
						"lastname" 		=> $data->lastname,
						"email" 		=> $data->email,
						"position" 		=> $data->position,
						"account_type"	=> $data->account_type
					);

				$this->session->set_userdata($member_details);

				return TRUE;
			}// end if
		}//	end for loop
		
	}

	public function logout_account()
	{
		session_destroy();
		$_SESSION = array();
		$this->load->view('logout_page');
	}

	public function forgot_password($userEmail)
	{
		
	}

	public function account_for_approval()
	{
		$for_approval_accnt = $this->db->query("SELECT * FROM js_account_approval");

		foreach ($for_approval_accnt->result() as $for_approval) {
			$for_approval_accnts[] = array(
					"id" 			=> $for_approval->id,
					"username" 		=> $for_approval->username,
					"password" 		=> $for_approval->password,
					"firstname" 	=> $for_approval->firstname,
					"lastname" 		=> $for_approval->lastname,
					"email" 		=> $for_approval->email					
				);
		}


		return $for_approval_accnts;


	}


	public function create_account($userdetails)
	{
		
		$newuser = array(
				'username' 	=>	$userdetails['txtRegUsername'],
				'password' 	=>	$userdetails['txtRegPassword'],
				'email' 	=>	$userdetails['txtRegEmail'],
				'firstname' =>	$userdetails['txtRegFirstname'],
				'lastname' 	=>	$userdetails['txtRegLastname'],
				'account_type' 	=>	'Guest'
			);

		$this->db->insert('js_users', $newuser);
		
	}





	public function update_account_type($new_account_type)
	{	
		$data = array(
				'account_type' =>	$new_account_type,
			);

		$where	=	"username = 'ynah_v'";

		$update_accounttype = $this->db->update_string('js_users', $data, $where);

		$this->db->query($update_accounttype);

		return $update_accounttype;


	}


	public function create_admin()
	{

		
		
	}





}


?>