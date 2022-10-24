<?php 

interface parent1{
	function sum($a,$b);
}


interface parent2{
	function sub($a,$b);
}


class childClass implements parent1, parent2{

	public function sum($a,$b){
		echo $a + $b;
	}
	public function sub($a,$b){
		echo $a - $b;
	}
}


$ob = new childClass();

$ob->sub(10,40);
$ob->sum(10,40);

?>