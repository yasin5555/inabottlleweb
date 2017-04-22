<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends My_Controller {

	public function index()
	{
		$this->render('map/index');
	}
}