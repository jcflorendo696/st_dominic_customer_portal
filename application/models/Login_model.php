<?php
/*
*	
*	Class Name: 		Login Model
*	Description:		Get usernames from database
*	Date:				September 4, 2016
*	Last Update:		September 4, 2016
*	Author:				jsf
*/
class Login_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }


        public function verify_login($username, $password){

	        //	Loop all the rows of the table. Returns OBJECT.
	        $query = $this->db->query("SELECT * FROM js_users");

	        //	Traverse through the array
	        foreach ($query->result() as $data) {


	        	//	If Account Existing
	        	if( $username == $data->username && $password == $data->password ){

	        		//	Store in Array then send to Controller
	        		$userdata = array(
	        				$data->id,
	        				$data->username,
	        				$data->password,
	        				$data->firstname,
	        				$data->lastname,
	        				$data->email
	        			);

	        		//	Set User Data Here
	        		$this->session->set_userdata($userdata);

	        		return TRUE;

	        	}

	        }
	    // verify_login() end.
        }

}

?>