<?php
class AsgnController extends CI_Controller {

	public function first()
	{
		
		$this->load->view('1stPageOfAsgnmt');
		
	}
	function second()
	{
		$this->load->view('2ndPageOfAsgnmt');
	}
	function third()
	{
		$this->load->view('3rdPageOfAsgnmt');
	}
	
}
