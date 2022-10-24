<?php

// class Session_Controller extends CI_Controller
// {
// 	public function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->database();
// 		$this->load->model('Hello_Model');
// 		$this->load->library('session');
// 	}

// 	public function login()
// 	{
// 		$this->load->view('login');
// 		if($this->input->post('submit'))
// 		{
// 			$_SESSION['email']=$this->input->post('myemail');
// 			$_SESSION['password']=$this->input->post('mypassword');

// 			redirect('Session_Controller/abc');

// 			if ($this->Hello_Model->logindone($email,$password)) {
// 				echo "Password match";
// 				redirect('Hello/displaydata');

// 			}
// 			else
// 			{
// 				echo "password not match";
// 			}
		
// 		}
// 	}
// 	public function abc()
// 	{
// 		echo $_SESSION['email'],$_SESSION['password'];
// 	}
// 	public function logout()
// 	{
// 		session_unset();
// 		redirect('Session_Controller/login');
// 	}
// }



class Session_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();// manual connection
		$this->load->model('Hello_Model');
		$this->load->library('session');
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

			$this->Hello_Model->saverecords($name,$email,$mobile,$address,$password);

			redirect('Session_Controller/login');
		}
	}
	public function login()
	{
		$this->load->view('login');
		if($this->input->post('submit'))
		{
			$_SESSION['email']=$this->input->post('myemail');
			$_SESSION['password']=md5($this->input->post('mypassword'));
			
			if ($this->Hello_Model->logindone($_SESSION['email'],$_SESSION['password']))
			{
				redirect('Session_Controller/displaydata');
			}
			else
			{
				echo "password not match";
			}
		}
	}
	public function displaydata()
	{
		$e=$_SESSION['email'];

		$result['data']=$this->Hello_Model->displayrecords($e);
		$this->load->view('display_records',$result);
	}
	public function updatedata()
	{
		$e=$_SESSION['email'];

		$result['data']=$this->Hello_Model->updatedata($e);
		$this->load->view('edit_update_records',$result);
		if($this->input->post('update'))
		{
			$name=$this->input->post('myname');
			$_SESSION['email']=$this->input->post('myemail');
			$mobile=$this->input->post('mymobile');
			$address=$this->input->post('myaddress');
			$this->Hello_Model->updaterecordsinform($name,$_SESSION['email'],$mobile,$address,$e);

			redirect('Session_Controller/displaydata');
		}
	}
	public function deletedata()
	{
		$e=$_SESSION['email'];
		$this->Hello_Model->deleterecords($e);
		
		redirect('Session_Controller/displaydata');
	}
	public function logout()
	{
		session_unset();
		redirect('Session_Controller/login');
	}

	public function changepassword()
	{
		// $userid=$this->input->get('uid');
		$e=$_SESSION['email'];
		$this->load->view('Change_Password');
		if($this->input->post('submit'))
		{
			$oldpass=md5($this->input->post('old'));
			$newpass=md5($this->input->post('new'));
			$conpass=md5($this->input->post('confirm'));
			if($oldpass!= $newpass)
			{
				if ($newpass==$conpass)
				{
					if ($this->Hello_Model->cpf($conpass,$e))
					{
						// echo "<script>alert('Successfully updated')</script>";
						redirect('Session_Controller/login');
					}
					else
					{
						echo "Incorrect Credentials";
					}
				}
				else
				{
					echo "Not Matched";
				}
			}
			else
			{
				echo "Already Used";
			}
		}
	}
}
?>