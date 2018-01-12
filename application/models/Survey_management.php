<?php



class Survey_management extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}


	public function insertSurveyResults($results)
	{


		//	Insert Survey Results from passed array to Database > js_survey_results
		$this->db->insert('js_survey_results',$results);

		

	}


	public function getSurveyResults()
	{

		$this->db->select('id, question1, question2, question3, question4, question5, date_submitted');

		$query	=	$this->db->get('js_survey_results');

		foreach ($query->result() as $data) {

			$results[] = array(

				'id'			=>	$data->id,
				'question1'		=>	$data->question1,
				'question2'		=>	$data->question2,
				'question3'		=>	$data->question3,
				'question4'		=>	$data->question4,
				'question5'		=>	$data->question5,
				'date_submitted'=>	$data->date_submitted
				);

		}//	End For Each


		return $results;



	}

	public function countResults()
	{

		//	Declare all the grades
		$q1_grade = array(
				'Extremely Well',
				'Very Well',
				'Somewhat Well',
				'Not So Well',
				'Poor'
			);

		
		foreach ($q1_grade as $j) {
			
			//	Make Several Queries with changing WHERE clause from $q1_grade array
			$survey_results = $this->db->query("SELECT id, question1 FROM js_survey_results WHERE question1 =  '" . $j . "' "); 
			
			//	Count the number of each grade result (Poor, Very Well, etc) and store in an indexed array
			$q1_votes[]	=	$survey_results->num_rows();
		}

		//	Return array to calling function
		return $q1_votes;


	}


	public function countResults2()
	{

		//	Declare all the grades

		$q2_grade = array(
				'Extremely Well-Maintained',
				'Very Well-Maintained',
				'Somewhat Well-Maintained', 
				'Not So Well-Maintained',
				'Not Maintained');

		
		
		foreach ($q2_grade as $j) {
			
			//	Make Several Queries with changing WHERE clause from $q1_grade array
			$survey_results = $this->db->query("SELECT id, question2 FROM js_survey_results WHERE question2 =  '" . $j . "' "); 
			
			//	Count the number of each grade result (Poor, Very Well, etc) and store in an indexed array
			$q2_votes[]	=	$survey_results->num_rows();
		}

		//	Return array to calling function
		return $q2_votes;


	}


	public function countResults3()
	{

		//	Declare all the grades

		$q3_grade = array(
				'Extremely Likely',
				'Very Likely',
				'Somewhat Likely', 
				'Not So Likely',
				'Not At All ');

		
		
		foreach ($q3_grade as $j) {
			
			//	Make Several Queries with changing WHERE clause from $q1_grade array
			$survey_results = $this->db->query("SELECT id, question3 FROM js_survey_results WHERE question3 =  '" . $j . "' "); 
			
			//	Count the number of each grade result (Poor, Very Well, etc) and store in an indexed array
			$q3_votes[]	=	$survey_results->num_rows();
		}

		//	Return array to calling function
		return $q3_votes;


	}

	public function countResults4()
	{

		//	Declare all the grades

		$q4_grade = array(
				'Extremely Satisfied',
				'Very Satisfied',
				'Somewhat Satisfied', 
				'Not Satisfied');

		
		
		foreach ($q4_grade as $j) {
			
			//	Make Several Queries with changing WHERE clause from $q1_grade array
			$survey_results = $this->db->query("SELECT id, question4 FROM js_survey_results WHERE question4 =  '" . $j . "' "); 
			
			//	Count the number of each grade result (Poor, Very Well, etc) and store in an indexed array
			$q4_votes[]	=	$survey_results->num_rows();
		}

		//	Return array to calling function
		return $q4_votes;


	}


	public function countResults5()
	{

		//	Declare all the grades

		$q5_grade = array(
				'Extremely Likely',
				'Very Likely',
				'Somewhat Likely', 
				'Not Applicable');

		
		
		foreach ($q5_grade as $j) {
			
			//	Make Several Queries with changing WHERE clause from $q1_grade array
			$survey_results = $this->db->query("SELECT id, question5 FROM js_survey_results WHERE question5 =  '" . $j . "' "); 
			
			//	Count the number of each grade result (Poor, Very Well, etc) and store in an indexed array
			$q5_votes[]	=	$survey_results->num_rows();
		}

		//	Return array to calling function
		return $q5_votes;


	}



}




?>