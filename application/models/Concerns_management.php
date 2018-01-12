<?php

/*
	
	Name:			MODEL: Concerns Management.
	Description:	Handles everything customer concerns related
	Author:			jsf
	Date:			September 19, 2016

*/


class Concerns_management extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}


	public function get_concerns($concern_data)
	{	

		//	Get Concerns From /concerns form
		//Set Timezone
		date_default_timezone_set("Asia/Manila");

		/*
		echo "<pre>";
		print_r($concern_data);
		die();
		*/


		//	Details from Concern Form
		$data = array(
				'id'				=> $concern_data['id'],
				'subject'			=> $concern_data['concern_subject'],
				'name'				=> $concern_data["concern_name"],
				'email'			 	=> $concern_data["concern_email"],
				'contact_number' 	=> $concern_data["concern_contact"],
				'concern' 			=> $concern_data["concern_complaint"],
				'date_submitted' 	=> date("F d, Y -  h:i:sa")

			);

		//	Enter concern to database
		$this->db->insert('js_concerns', $data);

	}


}



?>