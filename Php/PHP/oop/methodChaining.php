<?php 

class abc{

	public function first(){
		echo 'This is first function <br>';


		return $this;
	}
	public function second(){
		echo 'This is second function <br>';

		return $this;
	}
	public function third(){
		echo 'This is third function <br>';

		return $this;
	}
}

$obj = new abc();

$obj->first()->second()->third();

?>