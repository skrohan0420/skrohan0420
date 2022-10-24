<?php
class Signin extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('facebook');
		// display view
		$this->load->view('signin');
		// $this->load->session();
	}
	public function display()
	{
		$this->load->library('facebook');
		$data['user']=array();
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture');
			if (!isset($user['error']))
			{
				$data['user'] = $user;
			}
			// var_dump($user);
			echo $user['id']."<br>";
			echo $user['name']."<br>";
			echo $user['email']."<br>";
			?>
				<img src="<?php echo $user['picture']['data']['url']?>">
			<?php
		}
	}
}
?>