<?php 

// List of Get Funcs


// get_class()
// get_parent_class()
// get_class_methods(class_name)
// get_class_vars(class_name)
// get_object_vars(object)
// get_called_class()
// get_declared_classes()
// get_declared_interfaces()
// get_declared_traits()
// class_alias()


class base{
	function nameChild(){
		echo 'class name : ' . get_class($this) . '<br>';
	}
	function __construct(){
		echo '<pre>';
		print_r(get_class_methods($this));
		echo '</pre>';
	}
	private function myFunc1(){}
}

class child extends base{
	function nameParent(){
		echo 'Parent class name : ' . get_parent_class($this) . '<br>';
	}
}
$obj=new base();
$obj2=new child();
$classMethod = get_class_methods('base');






echo '<pre>';

$obj->nameChild();
echo 'class name : ' . get_class($obj) . '<br>';




$obj2->nameParent();
echo 'Parent class name : ' . get_parent_class('child') . '<br>';




print_r($classMethod);
foreach ($classMethod as $method) {
	echo $method . '<br>';
}

echo '</pre>';








class myClass{
	public $var;
	public $var1 = 'hello';
	public $var2 = 100;
	private $var3 = 'private';

	function __construct(){
		$this->var = 'newVal';
		echo '<pre>';
		print_r(get_class_vars(__class__));
		print_r(get_class_vars(get_class($this)));
		print_r(get_object_vars($this));
		echo '</pre>';
	}
}
$ob = new myClass();

$classVars = get_class_vars(get_class($ob));
$objVars = get_object_vars($ob);
echo '<pre>';
print_r($classVars);
print_r($objVars);
echo '</pre>';



trait myTrait{

}
trait myTrait2{

}

interface test{

}


class abc{
	use myTrait;
	static public function test(){
		var_dump(get_called_class());
	}
}
class xyz extends abc{

}

abc::test();
xyz::test();

echo '<pre>';
print_r(get_declared_classes());
print_r(get_declared_interfaces());
print_r(get_declared_traits());
echo '</pre>';


class baseClass{
	public $varss;
}

class_alias('baseClass','bc');

$object = new baseClass();
$object2 = new bc();

$object2->varss = 'hello';
echo $object2->varss;
?>