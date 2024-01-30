<?php 

class abc{

	private $conn;

	public function __construct(){
		// echo '__construct <br>';
		$this->conn = mysql_connect()
	}

	public function insert(){
		// echo 'Hello World <br>';
	}
	public function __destruct(){
		// echo '__destruct <br>';
		mysql_close($this->conn);
	}
}

$ob = new abc();

$ob->hello();
$ob->hello();
$ob->hello();
$ob->hello();
$ob->hello();


?>