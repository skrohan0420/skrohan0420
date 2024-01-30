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
class deraived2 extends base{

	public $name = 'Child Class';

	public function calc($a, $b){
		return $a * $b;
	}

}

$ob = array(1); 

$ob[0] = new deraived();
$ob[1] = new deraived2();
	
for($i=0;$i<2;$i++){  
	echo $ob[$i]->calc(20,10) . '<br >';  
} 


 ?>