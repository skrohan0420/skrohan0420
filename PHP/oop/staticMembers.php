<?php 

class base{

	public static $name = 'Rohan';

	public static function show(){
		echo self::$name;
	}


	// public function __construct($n){
	// 	self::$name = $n;
	// }

}

class derived extends base{
	
	public static function show(){
		echo parent::$name;
	}

}



// $ob = new base('Sk Rohan');
$ob = new derived();
$ob->show();


// echo base::$name;

// base::show();


 ?>