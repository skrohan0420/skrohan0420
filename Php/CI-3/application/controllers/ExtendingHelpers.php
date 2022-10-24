<?php 


class ExtendingHelpers extends CI_Controller{
	public function index(){
		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->getUsers();


		$this->load->helper('array');
		// test();

		$arr = ['abc'=>'ABC','xyz'=>'XYZ'];

		echo element('abc',$arr,'not found');


		// $this->load->view('user_list',$data);

	}
}


?>