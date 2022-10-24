<?php 


// require 'classes/first.php';
// require 'classes/second.php';
	
function __autoload($class){
	require 'classes/'. $class . '.php';
}

$ob = new first();
$ob1 = new second();

 ?>