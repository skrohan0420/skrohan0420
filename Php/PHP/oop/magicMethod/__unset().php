<?php 

class student{

	public $course = 'PHP';
	private $firstName;
	private $lastName;

	public function setName($fname,$lname){

		$this->firstName = $fname;
		$this->lastName = $lname;

	}

	public function __unset($prop){
		unset($this->$prop);
	}
}


$test = new student();
$test->setName('Sk','Rohan');


unset($test->course);
// unset($test->firstName);
unset($test->lastName);

echo '<pre>';
print_r($test);
echo '</pre>';



 ?>