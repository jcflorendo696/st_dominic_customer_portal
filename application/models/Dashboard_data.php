<?php


class Dashboard_data extends CI_Model
{


	public function __construct()
	{

		parent::__construct();

	}


	public function getStudents()
	{

		$query = $this->db->query("SELECT * FROM js_student_info");

		foreach ($query->result() as $data) {
			
			$student_details[] = array(
					"student_id" 	=> $data->student_id,
					"firstname" 	=> $data->firstname,
					"lastname" 		=> $data->lastname,
					"middlename" 	=> $data->middlename,
					"gender" 		=> $data->gender,
					"age" 			=> $data->age,
					"tel_no" 		=> $data->tel_no,
					"cp_no" 		=> $data->cp_no,
					"birthdate" 	=> $data->birthdate,
					"course" 		=> $data->course,
					"address" 		=> $data->address,
					"year" 			=> $data->yearlevel,
					"nationality" 	=> $data->nationality,
					"email"			=> $data->email,
					"major"			=> $data->major,
				);

		}

		return $student_details;

	}

	public function getConcerns()
	{
		$this->db->select("concern, contact_number, email, id, name, date_submitted, subject, status ", FALSE);
		//$this->db->where("DATE_FORMAT(date_submitted, '%r')");
		$query = $this->db->get('js_concerns');

		foreach ($query->result() as $data) {
			$concerns[] = array(
				"id"				=>	$data->id,
				"name"				=>	$data->name,
				"email"				=>	$data->email,
				"contact"			=>	$data->contact_number,
				"concern"			=>	$data->concern,
				"date_submitted"	=>	$data->date_submitted,
				"subject"			=>	$data->subject,
				"status"			=>	$data->status
				);
		}

		return $concerns;
	}

	public function getConcernsCount()
	{
		$countconcerns = $this->db->query("SELECT * FROM js_concerns");

		$count_concerns = array();
		//array_push($count_concerns, $countconcerns->num_rows());
		$count_concerns['count']	=	$countconcerns->num_rows();
		
		/*
		echo "<pre>";
		print_r($count_concerns);
		die();
		*/

		return $count_concerns;
	}

	public function searchStudents($searchkey)
	{
		// Place searchkeyword in SELECT. 
		$query = "";

	}



	public function getNewsletters()
	{

		$getnewsletters = $this->db->get('js_newsletter');

		foreach ($getnewsletters->result() as $val) 
		{

			$newsletters[] = array(
			"id" 	=> $val->id,
			"name" 	=> $val->name,
			"email" => $val->email
			);
		}

		return $newsletters;

	}

}

?>