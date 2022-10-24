<?php 

class base{


	protected static $name = 'Rohan';

	public function show(){

		echo static::$name;
		echo self::$name;

	}
}

class derived extends base{

	protected static $name = 'Sk';

}

$ob = new derived();
$ob->show();






 ?>