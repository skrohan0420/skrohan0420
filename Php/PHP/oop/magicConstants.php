<?php 

// Magic Constants
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
//
// __CLASS__
// __METHOD__
// __NAMESPACE__
// __TRAIT__

namespace myNamesSpace;

trait myTrait{
	public function  getTrait(){
		return 'Trait Name : ' . __TRAIT__. '<br>';
	}
}


echo 'Line No : ' . __LINE__ . '<br>';
echo 'Absolute Path : ' . __FILE__ . '<br>';
echo 'Relative Path : ' . __DIR__ . '<br>';
function func(){
	echo 'Function Name : ' . __FUNCTION__ . '<br>';
}
func();



class myClass{
	public function getClass(){
	return 'Function Name : ' . __CLASS__ . '<br>';
	}
	public function getMethod(){
	return 'Method Name : ' . __METHOD__ . '<br>';
	}
	public function getNamesSpace(){
	return 'Namespace Name : ' . __NAMESPACE__ . '<br>';
	}

	use myTrait;
}
$obj = new myClass();
echo $obj->getClass();
echo $obj->getMethod();
echo $obj->getNamesSpace();
echo $obj->getTrait();


?>