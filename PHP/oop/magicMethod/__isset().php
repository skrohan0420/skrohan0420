<?php 


class student{

	public $address;
	private $firstname;
	private $lastname;

	private $details = ['name'=>'Not Set','age'=>'00'];

	public function setName($fname,$lname){
		$this->firstname = $fname;
		$this->lastname = $lname;
	}

	public function __isset($name){
		return	isset($this->details[$name]);

	}
}

$ob = new student();

// $ob->age = 22;
// $ob->setName();
echo isset($ob->age);
// echo empty($ob->age);
 

 ?>