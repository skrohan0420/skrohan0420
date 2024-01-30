<?php 

class name{

	var $fname;
	var $lname;

	function showname(){

		echo 'my name is: '. $this -> fname . ' ' . $this -> lname;
		echo "<br>";
	}
}

$ob1 = new name();

$ob1 -> fname = 'sk';
$ob1 -> lname = 'rohan';
$ob1 -> showname();

$ob2 = new name();

$ob2 -> fname = 'md';
$ob2 -> lname = 'danish';
$ob2-> showname();

 ?>