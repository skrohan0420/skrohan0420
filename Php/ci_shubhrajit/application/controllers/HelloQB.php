<?php

class HelloQB extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hello_ModelQB');
	}










	public function savedata()
	{
		$this->load->view('RegistrationQB');
		if($this->input->post('submit'))
		{
			$name=$this->input->post('myname');
			$email=$this->input->post('myemail');
			$mobile=$this->input->post('mymobile');
			$address=$this->input->post('myaddress');
			$password=md5($this->input->post('mypassword'));
			$gender=$this->input->post('gender');
			$language=implode(",", $this->input->post('language'));

			$filename=$_FILES['myimage']['name'];
			$tempname=$_FILES['myimage']['tmp_name'];
			$image="upload_image/".$filename;
			move_uploaded_file($tempname, $image);

			$data=array(
				'name'=>$name,
				'email'=>$email,
				'mobile'=>$mobile,
				'address'=>$address,
				'password'=>$password,
				'gender'=>$gender,
				'language'=>$language,
				'folder'=>$image
			);
			$result=$this->Hello_ModelQB->saverecords($data);
			if ($result==true) 
			{
				redirect('HelloQB/dispdata');
			}
			else
			{
				echo "not inserted";
			}
		}
	}







	public function dispdata()
	{
		$result['data']=$this->Hello_ModelQB->displayrecords();
		if($result)
		{
			$this->load->view('display_recordsqb',$result);
		}
		else
		{
			echo "Failed to display";
		}	
	}










	public function deletedata()
	{
		$userid=$this->input->get('id');
		if($this->Hello_ModelQB->deleterecords($userid))
		{
			redirect('HelloQB/dispdata');
		}
		else
		{
			echo "Not deleted";
		}	
	}







	public function updatedata()
	{
		$userid=$this->input->get('updateid');
		$result['data']=$this->Hello_ModelQB->displayrecordsById($userid);
		if($result)
		{
			$this->load->view('Edit_Records_QB',$result);
		}
		if($this->input->post('update'))
		{
			$name=$this->input->post('myname');
			$email=$this->input->post('myemail');
			$mobile=$this->input->post('mymobile');
			$address=$this->input->post('myaddress');
			$gender=$this->input->post('gender');
			$language=implode(",", $this->input->post('language'));

			$filename=$_FILES['myimage']['name'];
			$tempname=$_FILES['myimage']['tmp_name'];
			$image="upload_image/".$filename;
			move_uploaded_file($tempname, $image);

			$data=array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'address'=>$address,'gender'=>$gender,'language'=>$language,'folder'=>$image);

			$result=$this->Hello_ModelQB->updaterecords($data,$userid);
			if ($result==true) 
			{
				redirect('HelloQB/dispdata');
			}
			else
			{
				echo "Not Updated";
			}
		}
	}







	public function login()
	{
		$this->load->view('loginQB');
		if($this->input->post('submit'))
		{
			$email=$this->input->post('myemail');
			$password=md5($this->input->post('mypassword'));

			$result=$this->Hello_ModelQB->loginvalid($email,$password);
			if($result==true)
			{
				redirect('HelloQB/dispdata');
			}
			else
			{
				echo "Password not matched";
			}
		}
	}




	public function session_login(){

		$this->load->view('session_login_view');
		if($this->input->post('submit')){

			$_SESSION['email']=$this->input->post('myemail');
			$_SESSION['password']=md5($this->input->post('mypassword'));
			$this->load->model('session_model');
			$res = $this->session_model->logindone($_SESSION['email'],$_SESSION['password']);


			// return $res;
			print_r($res);
			$this->load->view('session_show_data_view',$res);
		}else{
			echo 'nan';
		}


	}



}
?>