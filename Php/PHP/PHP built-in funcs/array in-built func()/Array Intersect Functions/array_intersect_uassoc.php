<?php 

$arr1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$arr2 = array("a"=>"red","f"=>"green","d"=>"purple");


function compare($a,$b){
	if ($a === $b) {
		return 0;
	}

	return ($a>$b)? 1 : -1;
}

	// custom Func

$newArr = array_intersect_uassoc($arr1, $arr2, "compare");


echo '<pre>';
print_r($newArr);
echo '</pre>';


 ?>