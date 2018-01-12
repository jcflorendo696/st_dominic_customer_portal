<?php
defined('BASEPATH') OR exit('No direct script access allowed');



/**
*
*	This calls the Dashboard for users with accounts already. (Admin, Members.)
*
*/
class Nav extends CI_Controller {

	public function index()
	{
		$this->load->view('nav');
	}

	
}

