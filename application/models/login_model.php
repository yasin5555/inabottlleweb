<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
private $table = "pb_user";

	public function __construct(){
    parent::__construct();
    $this->load->database();
	}

public function get_where($where=array()){
    $this->db->where('delete',0);
    // va chercher dans db table
    $result = $this->db->get_where($this->table,$where);
    return $result;
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
public function delete($id){
$data = array(
    'delete' => 1
);
    $this->db->where('id', $id);
    $this->db->update($this->table,$data);
}
}