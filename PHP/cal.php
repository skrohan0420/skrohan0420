<?php 



class calc{

	public $n1;
	public $n2;

	function __construct($na1=0,$na2=0){
		$this->n1=$na1;
		$this->n2=$na2;
	} 

	function add(){

		return $a + $b;

	}
	function sub(){

		return $this->n1 - $this->n2;

	}
	function mul(){

		return $this->n1 * $this->n2;

	}
	function div(){

		return $this->n1 / $this->n2;

	}

}



$calc = new calc(10,10);



echo $calc->mul();


 ?>




