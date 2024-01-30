<?php 

class student{

	private $name = 'jhon';
	public function show(){
		echo $this->name;
	}

	public function __get($prop){
		echo ' private proprerty : '.$prop.' OR non existing<br>';
	}
	public function __set($prop,$val){
		// echo ' private proprerty : '.$prop.' OR non existing<br>';

		if (property_exists($this, $prop)) {
			$this->$prop = $val;
		}
		else{
			echo 'Prop does not exist : ' . $prop;
		}
	}
}

$ob = new student();

$ob->name = 'Rohan';
$ob->show();



 ?>