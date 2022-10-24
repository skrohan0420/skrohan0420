<?php 

class Libcon extends CI_Controller{
	public function index(){
		$this->load->library(array('form_validation','email'));
		$this->form_validation;
		$this->email;
	}
}

 ?>