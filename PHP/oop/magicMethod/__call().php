<?php 


class student{


	private $firstname;
	private $lastname;

	private function setName($fname,$lname){

		$this->firstname = $fname;
		$this->lastname = $lname;
	}
	public function __call($method,$args){
		// echo 'private Method : '. $method .' or Non Existing  ';
		// print_r($args);

		if (method_exists($this, $method)) {
			call_user_func_array([$this, $method], $args);
		}
		else{
			echo 'Method : '.$method.' Does not exist';
		}
	}
}

$ob = new student();

$ob->setName('Sk','Rohan');
// $ob->personal();
echo "<pre>";

print_r($ob);

echo "</pre>";

 ?>