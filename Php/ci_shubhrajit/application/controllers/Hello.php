<?php
class Hello extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();// manual connection
		$this->load->model('Hello_Model');
	}
	public function savedata()
	{
		$this->load->view('registration');
		if($this->input->post('submit'))
		{
			$name=$this->input->post('myname');
			$email=$this->input->post('myemail');
			$mobile=$this->input->post('mymobile');
			$password=md5($this->input->post('mypassword'));
			$address=$this->input->post('myaddress');

			// echo $name,$email,$mobile;

			$this->Hello_Model->saverecords($name,$email,$mobile,$address,$password);
			// echo "Insert data Successfully";
			redirect('Hello/login');
		}
	}
	public function login()
	{
		$this->load->view('login');
		if($this->input->post('submit'))
		{
			$email=$this->input->post('myemail');
			$password=md5($this->input->post('mypassword'));
			if ($this->Hello_Model->logindone($email,$password)) {
				// echo "Password match";
				redirect('Hello/displaydata');
			}
			else
			{
				echo "password not match";
			}
		}
	}
	public function displaydata()
	{
		$result['data']=$this->Hello_Model->displayrecords();
		$this->load->view('display_records',$result);
	}
	public function deletedata()
	{
		$userid=$this->input->get('id');
		$this->Hello_Model->deleterecords($userid);
		redirect('Hello/displaydata');
	}
	public function updatedata()
	{
		$userid=$this->input->get('updateid');
		$result['data']=$this->Hello_Model->updatedata($userid);
		$this->load->view('edit_update_records',$result);
		if($this->input->post('update'))
		{
			$name=$this->input->post('myname');
			$email=$this->input->post('myemail');
			$mobile=$this->input->post('mymobile');
			$password=md5($this->input->post('mypassword'));
			$address=$this->input->post('myaddress');
			$this->Hello_Model->updaterecordsinform($name,$email,$mobile,$address,$userid);

			redirect('Hello/displaydata');
		}
	}
	
}
?>
