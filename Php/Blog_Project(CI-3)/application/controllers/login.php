<?php 

class Login extends MY_Controller{

	public function index(){



		// redirects user to the dashBoard if user is allready logged in
		if ($this->session->userdata('user_id')){
			return redirect('admin/dashboard');
		}




		$this->load->view('public/admin_login');
	}

	public function admin_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'username',
			'User Name',
			'required|alpha|max_length[20]|min_length[3]|trim'
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|max_length[20]|min_length[6]'
		);





		// if validation passes
		if ($this->form_validation->run()) {
			// validation success
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');

			$login_id = $this->loginmodel->login_valid($username,$password);

			if($login_id){
				// user info valid, login user

				// set session 
				$this->session->set_userdata('user_id',$login_id);

				// dont do this
				// $this->load->view('admin/dashboard');
				// insted do this
				return redirect('admin/dashboard');

			}else{
				// authentication failed


				// Notify Invalid Username/Password 
				$this->session->set_flashdata('login_faild','Invalid Username/Password');
				return redirect('login');

			}

		}else{
			// validation failed
			$this->load->view('public/admin_login');
			// echo validation_errors();
		}
	}







	public function logout(){
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}

 ?>