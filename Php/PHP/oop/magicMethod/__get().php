<?php 


class abc{
	// private $name = 'Rohan';
	private $data = ['name'=>'rohan','age'=>22,'address'=>'cgr'] ;



	public function __get($key){
		// echo 'Privet ("'.$prop.'") Or Non Existing Property';
		if (array_key_exists($key, $this->data)) {
			return $this->data[$key];
		}
		else {
			return 'this key(' .$key.') is not defind';
			
		}
	}
}

$ob = new abc();
// print_r($ob->data);
$ob->name;
// echo  $ob->age;

 ?>