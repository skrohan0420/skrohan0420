<?php 

trait hello{
	// public function sayHello(){
	// 	echo 'hello form trait'.'<br>';
	// }
	private function sayHello(){
		echo 'hello form trait'.'<br>';
	}
}
// trait hi{
// 	public function sayHello(){
// 		echo 'hi form trait'.'<br>';
// 	}
// }

class base{
	// use hello,hi{
	// 	hello::sayHello insteadof hi; 
	// 	hi::sayHello as newHello;
	// }
	use hello{
		// hello::sayHello as public;
		hello::sayHello as public newhello;
	}
}


$test = new base();
// $test->sayHello();
$test->newHello();

 ?>