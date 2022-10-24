<?php
class MailController extends CI_Controller
{
	public function index()
	{
		$this->load->view('MailForm');
	}
	public function sent()
	{
		$config=array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,//secure port number:465 & default:587
				'smtp_user' => 'gourabbatabyal8981@gmail.com',
				'smtp_pass' => 'Tpi@12345',
				'charset' => 'iso-8859-1',
				'mailtype' => 'html',
				'wordwrap' => TRUE
		);
		$to=$this->input->post('myemail');
		$sub=$this->input->post('mysubject');
		$body=$this->input->post('mybody');

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$this->email->from("shubhrajitroy1@gmail.com",'');
		$this->email->to($to);
		$this->email->subject($sub);
		$this->email->message($body);

		if($this->email->send())
		{
			echo "Mail Sent!!!";
		}
		else{
			echo "Mail Not Sent!!!";
		}
	}
}
?>