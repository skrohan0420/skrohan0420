<?php 


class calc{


	public $a,$b;

	public function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}


	// public function sum(){
	// 	echo $this->a + $this->b;
	// }


	public function __invoke(){

		echo $this->a + $this->b;

	}

}

$ob = new calc(592,233);

$ob();
// $ob->sum();
?>
