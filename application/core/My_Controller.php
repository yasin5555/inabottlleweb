<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

public $data = array();

 // on donne une valeur 'template/base/index' du parametre $template. Si on a pas définit une valeur, il va mettre celle ci par défaut
 public function render($view, $template = 'template/base/index')
 {
$this->data["view_content"] = $this->load->view($view,$this->data,TRUE);
$this->load->view($template, $this->data);
}

}