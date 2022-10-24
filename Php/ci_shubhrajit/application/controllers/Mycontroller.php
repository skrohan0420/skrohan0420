<?php
class Mycontroller extends CI_Controller {

	public function first()
	{
		$this->load->view('first');
		// $this->load->view('1stPageOfAsgnmt');
		// $this->load->model('Mymodel');
		// $this->load->model('Mymodel1');
		
		// $this->Mymodel->freefire();
		// $this->Mymodel1->pubg();
	}
	function second()
	{
		$this->load->view('second');
		// $this->load->view('2ndPageOfAsgnmt');
	}
	function third()
	{
		$this->load->view('third');
		// $this->load->view('3rdPageOfAsgnmt');
	}
	
}
