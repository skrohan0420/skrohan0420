<?php
require(APPPATH.'/libraries/REST_Controller.php');
class HelloRest extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();// manual connection
		$this->load->model('Hello_ModelRest');
	}
	public function savedata_post()
	{
		$name=$this->post('name');
		$email=$this->post('email');
		$mobile=$this->post('mobile');
		$address=$this->post('address');
		$password=md5($this->post('password'));

		$data= array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'address'=>$address,'password'=>$password);
		$result=$this->Hello_ModelRest->saverecords($data);
		if($result==false)
		{
			$this->response(array('status'=>400,'message'=>'failed'));
		}
		else
		{
			$this->response(array('status'=>200,'message'=>'success'));
		}
	}
	public function dispdata_get()
	{
		$result=$this->Hello_ModelRest->displaydata();
		if($result)
		{
			$this->response(array('status'=>200,'message'=> $result));
		}
		else
		{
			$this->response(array('status'=>400,'message'=>'failed'));
		}
	}
	public function updatedata_put()
	{
		$name=$this->put('name');
		$email=$this->put('email');
		$mobile=$this->put('mobile');
		$address=$this->put('address');
		$password=md5($this->put('password'));

		$userid=$this->put('user_id');

		$data= array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'address'=>$address,'password'=>$password);
		$result=$this->Hello_ModelRest->updaterecords($data,$userid);
		if($result==false)
		{
			$this->response(array('status'=>400,'message'=>'failed to update'));
		}
		else
		{
			$this->response(array('status'=>200,'message'=>'Update Successfull'));
		}
	}
	public function deletedata_delete()
	{
		$userid=$this->delete('user_id');
		if($this->Hello_ModelRest->deleterecords($userid))
		{
			$this->response(array('status'=>200,'message'=> 'Successfull'));
		}
		else
		{
			$this->response(array('status'=>400,'message'=>'Failed'));
		}
	}
}
?>