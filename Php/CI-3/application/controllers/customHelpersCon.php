<?php 


class CustomHelperCon extends CI_Controller{

	public function index(){

		$this->load->helper('abc');
		$data = test();
		$this->load->vew('user_list',$data)
	}

}


?>