<?php 

trait test{
	public function sayHello(){
		echo 'Hello World!'.'<br>';
	}
	public function sayHi(){
		echo 'Hi World!'.'<br>';
	}
}
trait test2{
	public function sayBye(){
		echo 'Bye World!'.'<br>';
	}
}

class base{

	use test,test2;

}
class base2{

	use test,test2;

}

$test = new base();
$test->sayHello();
$test->sayHi();
$test->sayBye();


?>