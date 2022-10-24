<?php 

trait A{
	function fun(){
		echo "this is my 1st function. ";
	}
}	
trait B{
	function fun2(){
		echo "this is my 2nd function. ";
	}
}
class C {
	use A,B;

}

$ob = new C();
$ob->fun();
$ob->fun2();

?>