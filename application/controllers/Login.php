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
    $result = $this->login_model->get_where();
    $this->data["result"] = $result;
    $this->load->library('form_validation');
                  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pb_user.email]');
     array( 'required'  =>  'The %s field is required.' ) 
                ); 
    
	$this-> form_validation -> set_rules ( 'password' ,  'password' ,  'trim|required|min_length[4]' , 

    if ($this->form_validation->run() == FALSE){
         $this->render('login/index');
     } else {
      $this->render('map/index');
      }
    }
}