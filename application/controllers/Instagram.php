<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instagram extends CI_Controller {

	
	public function index()
	{
		$this->load->view('instagram/index');
	}
}
