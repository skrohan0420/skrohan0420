<?php 
// array_walk(array, function, parameter)
$a = array('A'=>1, 'B'=>2, 'C'=>3 ,'D'=>4);




array_walk($a, 'myFunc','is a Key Of');



function myFunc($key,$val,$param){

	echo "$key $param $val" .'<br>';

}

 ?>