<?php 

class Single{
	function fun(){
		echo "this is parent. ";
	}
}
	class B extends Single{
		function fun2(){
			echo "this is child class ";
		}
	}

$ob = new B();
$ob->fun();
$ob->fun2();
 ?>