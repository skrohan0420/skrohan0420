<?php 
$arr1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$arr2 = array("a"=>"red","f"=>"green","d"=>"purple");

function compare($a,$b){

	if ($a === $b) {
		return 0;
	}
	return ($a > $b)? 1 : -1;

}
	

$newArr = array_udiff_assoc($arr1, $arr2, "compare");


echo '<pre>';
print_r($newArr);
echo '</pre>';

 ?>
