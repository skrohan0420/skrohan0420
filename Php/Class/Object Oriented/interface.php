<?php 

interface A{
	function fun();
}

interface B{
	function fun2();
}

class C implements A,B{
	function fun(){
		echo 'This is my 1st child. ';
	}
	function fun2(){
		echo 'This is my 2nd child. ';
	}
}

$ob = new C();
$ob->fun();
$ob->fun2();
 ?>