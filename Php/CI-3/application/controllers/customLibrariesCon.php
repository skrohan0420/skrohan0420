<?php 


class CustomLibrariesCon extends CI_Controller{

	public function index(){
		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->getUsers();

		$this->load->library('test');
		$this->test->abc();

		$this->load->view('user_list',$data);

	}

}


?>