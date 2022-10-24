<?php 


class ExtendingLibraries extends CI_Controller{
	public function index(){
	
			$this->load->library('email');
			$this->email->test();

	}
}


?>