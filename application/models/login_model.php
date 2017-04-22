<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
private $table = "inabottel";

	public function __construct(){
    parent::__construct();
    $this->load->database();
	}

public function create($email,$password){
    $data = array(
        'email' => $email,
        'password' => $password
);
$this->db->insert($this->table, $data);
}
public function update($email,$password,$id){
    $data = array(
        'email' => $email,
        'password' => $password

    );

    $this->db->where('id', $id);
    $this->db->update($this->table,$data);
}

}