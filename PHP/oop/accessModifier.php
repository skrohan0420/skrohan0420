<?php 

	// 				class Itseff |  Outside class | Derived Class
	
	// public 		:	True 			True 			True
	
	// Protected	:	True   			False 			True
	
	// Privet  		:	True 			False 			False



class base{

	public $name; 
	// private $name;
	// protected $name;


	public function __construct($n){
		$this->name = $n;
	}

	public function show(){
		echo 'Your Name : ' . $this->name . '<br>';
	}
}


class derived extends base{
	public function get(){
		echo 'Your Name : ' . $this->name . '<br>';
	}
}


$test = new base('Rohan');

// $test->name = "Ram";

$test->show();

?>