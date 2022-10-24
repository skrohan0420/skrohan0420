<?php 


class student{

	private static function hello($name){
		echo 'Hello '.$name;
	}

	public static function __callStatic($method, $args){
		// echo 'private Method : '. $method;

		if (method_exists(__class__ , $method)){
			call_user_func_array([__class__ , $method],$args);
		}
		else{
			echo 'Method : ' .$method.' Does Not Exist';		
		}
	}
}
student::hello('Rohan');

?>