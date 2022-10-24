<?php 


class Blog extends CI_Controller{
	public function index(){
		$this->load->model('auth','authentication');
		$data = $this->authentication->getData();

		print_r($data);


		$this->load->view('blog_index');
	}

	public function add(){
		echo "add function of Blog Controller";
	}
}


 ?>