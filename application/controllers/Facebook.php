<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller {

	
	public function index()
	{
		$this->load->view('facebook/index');
	}
}
