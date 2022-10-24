<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index(){



		// redirects user to the dashBoard if user is allready logged in

		if ($this->session->userdata('userdata')){
			return redirect('user/userdata');
		}else{
			$this->load->view('Sign-Up');
		}

		
	}


	public function logout(){
		$this->session->unset_userdata('userdata');
		return redirect('user');
	}





	public function userdata(){
		if ($this->session->userdata('userdata')){
			return	$this->load->view('User-Data');
		}else{
			return	$this->load->view('Sign-Up');
		}
	}











	public function signup(){
		$post = $this->input->post();

		unset($post['submit']);
		$this->load->model('usermodel');
		


		if ($this->usermodel->addData($post)) {
			$this->load->view('Login');
		}else{
			echo 'some bad happend';
		}
	}









	public function login(){
		$this->load->view('Login');
		$username = $this->input->post('Name');
		$password = $this->input->post('Password');
		$this->load->model('usermodel');

		if ($username != null && $password != null) {
			$user = $this->usermodel->login($username,$password);

			if($user->num_rows() > 0){
				$a = $user->result_array();
				$this->session->set_userdata('userdata',$a[0]);
				return redirect('user/userdata');




			}else{
				echo '<i>Wrong User Name Or Password <br> Try Again</i>';
			}
		}	
	}



}
