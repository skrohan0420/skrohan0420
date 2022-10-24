<?php 


class calculation{
	
	public $a, $b, $c;

	function sum(){
		$this->c = $this->a + $this->b;
		return $this->c;
	}

	function sub(){
		$this->c = $this->a - $this->b;
		return $this->c;
	}
}


$ob = new calculation();
$ob->a = 20;
$ob->b = 10;

$ob2 = new calculation();
$ob2->a = 25;
$ob2->b = 10;




echo $ob->sum() . "\n";
echo $ob->sub() . "\n";
echo $ob2->sum() . "\n";
echo $ob2->sub();

 ?>