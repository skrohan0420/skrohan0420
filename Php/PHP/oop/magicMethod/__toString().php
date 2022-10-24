<?php 


class abc{

	public function __toString(){
		return "can't print Object As a String of Class : ".get_class($this);
	}


}

$test = new abc();

echo $test;


 ?>