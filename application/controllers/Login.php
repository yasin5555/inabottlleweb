<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 public function __construct() {
    parent:: __construct();
    // model communique auto avec controller
    //charge helper form pour tous
    $this->load->helper('form');
     $this->load->model('login_model');
 }
	public function index(){
    $this->load->library('form_validation');
                  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pb_user.email]');
               
	$this-> form_validation -> set_rules ( 'password' ,  'password' ,  'trim|required|min_length[4]' ,  
     array( 'required'  =>  'The %s field is required.' ) 
     );
    if ($this->form_validation->run() == FALSE){
         $this->load->view('login/index');
     } else {
      $this->load->view('map/index');
      }
    }
}