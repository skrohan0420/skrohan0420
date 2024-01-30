<?php 


class student{

	public $course = 'PHP';
	private $firstName;
	private $lastName;
	private $conn;


	public function setName($fname,$lname){

		$this->firstName = $fname;
		$this->lastName = $lname;

	}
	public function __construct(){

		$this->conn = mysql_connect();

	}
	public function __sleep(){

		return array('firstName','lastName');
		mysql_close($this->conn);

	}
	public function __wakeup(){

		$this->conn = mysql_connect();
		echo 'WakeUp Mate';

	}
}

$obj = new student();

$obj->setName('Sk','Rohan');

$srl = serialize($obj);
$usrl = unserialize($srl);

echo '<pre>';
print_r($usrl);
echo '</pre>';

?>


