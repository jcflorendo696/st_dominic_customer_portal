<?php


class Search_concerns extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}


	public function search_results($string)
	{

		$mystring = $string['mystring'];

		$query = $this->db->query("SELECT * FROM js_concerns WHERE subject LIKE '%" . $mystring .  "%' ");

		foreach ($query->result() as $data) {

			$results[] = array(
					'c_name' 		=> $data->name,
					'c_subject'		=> $data->subject,
					'c_email'		=> $data->email,
					'c_concern'		=> $data->concern,
					'c_datesubmitted' => $data->date_submitted,
					'c_status'		=>	$data->status
				);

		}


		return $results;

	}


}


?>