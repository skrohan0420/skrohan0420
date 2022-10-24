<?php 


class student{

	public $course = 'PHP';
	private $firstName;
	private $lastName;

	public function setName($fname,$lname){

		$this->firstName = $fname;
		$this->lastName = $lname;

	}
	public function __sleep(){

		return array('firstName','lastName');

	}
	
}

$obj = new student();

$obj->setName('Sk','Rohan');

$srl = serialize($obj);

echo '<pre>';
echo $srl;
echo '</pre>';

?>