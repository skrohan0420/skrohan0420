<?php 


abstract class calcParent{
	abstract protected function add($a,$b);
	abstract protected function sub($a,$b);
	abstract protected function mul($a,$b);
	abstract protected function div($a,$b);


}

class calcChild extends calcParent{

	

	public function add($a,$b){
		return $a + $b;
	}
	public function sub($a,$b){
		return $a - $b;
	}
	public function mul($a,$b){
		return $a * $b;
	}
	public function div($a,$b){
		return $a / $b;
	}

}

$ob = new calcChild();

echo $ob->add(20,10).'<br>';
echo $ob->sub(20,10).'<br>';
echo $ob->mul(20,10).'<br>';
echo $ob->div(20,10);



 ?>