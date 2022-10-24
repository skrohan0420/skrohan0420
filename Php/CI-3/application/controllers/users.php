<?php 


class Users extends CI_Controller{
	public function index(){
		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->getUsers();


		$this->load->helper('abc');
		test();


		$this->load->view('user_list',$data);

	}
}


?>