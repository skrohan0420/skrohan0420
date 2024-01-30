<?php 

class person{

	public $name, $age;

	function __construct($name = "No Name",$age = 0){
		$this->name = $name;
		$this->age = $age;
	} 

	function show(){
		echo $this->name . " - " . $this->age . '<br>';
	}
}

$p = new person();
$p1 = new person('Rohan',22);
$p2 = new person('adi',20);
$p3 = new person('salim',25);

$p->show();
$p1->show();
$p2->show();
$p3->show();

 ?>