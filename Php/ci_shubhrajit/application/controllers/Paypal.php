<?php
class Paypal extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('paypal_lib');
		$this->load->library('session');
	}
	function index()
	{
		$this->load->view('paypalindex');
		if($this->input->post('submit'))
		{
			$_SESSION['itemname']=$this->input->post('in');
			$_SESSION['q']=$this->input->post('quantity');
			$price=$this->input->post('price');
			$_SESSION['amount']=($_SESSION['q'])*$price;
			if($_SESSION['amount']>1)
			{
				redirect('Paypal/buy');
			}
		}
	}
	public function buy()
	{
		$this->paypal_lib->add_field('item_name',$_SESSION['itemname']);
		$this->paypal_lib->add_field('item_number',$_SESSION['q']);
		$this->paypal_lib->add_field('amount',$_SESSION['amount']);

		$this->paypal_lib->paypal_auto_form();
	}
}
?>