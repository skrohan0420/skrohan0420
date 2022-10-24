<?php 


class base{

	public $name = 'Parent Class';

	public function calc($a, $b){
		return $a + $b;
	}

}

class deraived extends base{

	public $name = 'Child Class';

	public function calc($a, $b){
		return $a - $b;
	}

}

$test1 = new base();
$test2 = new deraived();

echo $test1->calc(10,20) . '<br>';
echo $test2->calc(20,10);



 ?>