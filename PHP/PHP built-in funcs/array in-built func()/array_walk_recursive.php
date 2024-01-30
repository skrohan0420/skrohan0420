<?php 
// array_walk_recursive(array, function, parameter)
$a1 = array("1"=> "apple","2"=>"banana");

$a = array($a1,'A'=>1, 'B'=>2, 'C'=>3 ,'D'=>4);




array_walk_recursive($a, 'myFunc','is a Key Of');



function myFunc($val,$key,$param){

	echo "$key $param $val" .'<br>';

}



 ?>