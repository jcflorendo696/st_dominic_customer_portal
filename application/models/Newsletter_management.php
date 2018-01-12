<?php



class Newsletter_management extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}


	public function add_email($newsletter_data)
	{	

		$data = array(
			"name"	=> $newsletter_data['name'],
			"email"	=> $newsletter_data['email']
			);


		$this->db->insert('js_newsletter', $data);

	}


}



?>