<?php 


class Get_instance extends CI_Controller{
	public function index(){
	
			$this->load->library('email');
			$this->email->test();

	}
}


?>