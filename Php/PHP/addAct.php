<?php

class Add{
	public $f1;
	public $f2;

	function __construct($a,$b){
		$this->f1=$a;
		$this->f2=$b;
	}
	function add(){
		$add=$this->f1 + $this->f2;
		echo "the sum of the given no is  " . $add;
	}
}
$ob = new Add($_POST['n1'],$_POST['n2']);
$ob->add();

?>