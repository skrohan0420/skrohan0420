<?php 

class Rect{
	public $f1;
	public $f2;

	function __construct($a,$b){
		$this->f1=$a;
		$this->f2=$b;
	}
	function add(){
		$add=$this->f1 * $this->f2;
		echo "areia of rect is  " . $add;
	}
}
$ob = new Rect($_POST['h'],$_POST['w']);
$ob->add();



 ?>