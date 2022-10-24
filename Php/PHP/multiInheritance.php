<?php 

class Single{
	function fun(){
		echo "this is my parent. ";
	}
}
	class B extends Single{
		function fun2(){
			echo "this is child class. ";
		}
	}
	class C extends B{
		function fun3(){
			echo "this is anathor child of class B. ";
		}
	} 

$ob = new C();
$ob->fun();
$ob->fun2();
 ?>