<?php 

class Hello{
	function fun(){
		echo "this is first function. ";
	}
	function __construct(){
		echo "this is a constructor method in php. ";
	}
	function fun2(){
		echo "this is my 2nd function. ";
	}
	function __destruct(){
		echo "this is a destructor method";
	}
}

$ob = new Hello();
$ob->fun();
$ob->fun2();
 ?>