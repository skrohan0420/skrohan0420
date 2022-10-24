<?php
class MultiLog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('MultiLogModel');
		$this->load->library('session');
	}
	public function savedata()
	{
		$this->load->view('MultiRegistration');
		if($this->input->post('submit'))
		{
			$name=$this->input->post('myname');
			$email=$this->input->post('myemail');
			$password=md5($this->input->post('mypassword'));
			$type=$this->input->post('user');

			$data= array('name'=>$name,'email'=>$email,'password'=>$password,'utype'=>$type);
			$result=$this->MultiLogModel->saverecords($data);
			if ($result==true) 
			{
				redirect('MultiLog/login');
			}
			else
			{
				echo "not inserted";
			}
		}
	}
	public function login()
	{
		$this->load->view('MultiLogin');
		if($this->input->post('submit'))
		{
			$_SESSION['email']=$this->input->post('myemail');
			$_SESSION['password']=md5($this->input->post('mypassword'));

			$result=$this->MultiLogModel->loginvalid($_SESSION['email'],$_SESSION['password']);
			if($result==true)
			{
				redirect('MultiLog/display');
			}
			else
			{
				echo "Password not matched";
			}
		}
	}
	public function display()
	{
		$e=$_SESSION['email'];

		$result['data']=$this->MultiLogModel->displayrecords($e);
	}
}
?>