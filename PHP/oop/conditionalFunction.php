<?php 


// Conditional Funcs

// class_exists(class_name)
// 
// interface_exists(interface_name)
// 
// method_exists(object, method_name)
// 
// trait_exist(trait_name)
// 
// property_exists(class, property)
// 
// is_a(object, class_name)
// 
// is_subclass_of(object, class_name)







interface myInterface{}

trait myTrait{
	public function myMethod(){}
}

class myClass{
	public $test;

	public function myMethod(){}

}
class child extends myClass{}



if (class_exists('myClass')) {
	echo 'class_exists<br>';

	$obj = new myClass();	
}
else{
	echo 'class_Does_Not_exists<br>';	
}




if (interface_exists('myInterface')) {
	echo 'Interface_exists<br>';

	class a implements myInterface{}
}
else{
	echo 'Interface_Does_Not_exists<br>';	
}




$obj2 = new myClass();
if (method_exists($obj2,'myMethod')) {
	echo 'Method_exists<br>';
}
else{
	echo 'Method_Does_Not_exists<br>';	
}




if (trait_exists('myTrait')) {
	echo 'Trait_exists<br>';
	class myClass2{
		use myTrait;
	}
}
else{
	echo 'Trait_Does_Not_exists<br>';	
}





if (property_exists('myClass','test')) {
	echo 'Property_exists<br>';	
}
else{
	echo 'Property_Does_Not_exists<br>';	
}







$obj3 = new myClass();
if (is_a($obj3, 'myClass')) {
	echo 'Object_exists<br>';	
}
else{
	echo 'Object_Does_Not_exists<br>';	
}




$obj4 = new child();
if (is_subclass_of($obj4, 'myClass')) {
	echo 'Subclass_exists<br>';	
}
else{
	echo 'Subclass_Does_Not_exists<br>';	
}



?>