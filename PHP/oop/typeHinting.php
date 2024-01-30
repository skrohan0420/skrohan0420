<?php 


// function fruits(array $names){
// 	foreach ($names as $name) {
// 		echo $name . '<br>';
// 	}
// }

// $test = ['Apple','Mango','Banana'];

// fruits($test);







// class hello{
// 	public function sayHello(){
// 		echo 'Hello Everyone';
// 	}
// }
// class bye{
// 	public function sayBye(){
// 		echo 'Bye Everyone';
// 	}
// }

// function wow(hello $c){
// 	$c->sayHello();
// }

// $test = new hello();

// wow($test);



class school{
	public function getNames(student $names){

		echo '<ul>';
		foreach ($names->names() as $name) {
			echo '<li>'. $name . '</li>';
		}
		echo '</ul>';
		
	}
}
class student{
	public function names(){
		return ['Ram','Krishna','Gopal'];
	}
}
class library{

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);
?>