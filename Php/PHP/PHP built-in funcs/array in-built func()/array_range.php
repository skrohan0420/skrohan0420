<?php 
$arr = range(0, 100,10);
$arr2 = range(0, 100);
$str = range('A','Z');
$str2 = range('Z','A');

foreach(range('a','z') as $char){
	echo $char ."<br>";
}

echo "<pre>";
print_r($arr);
print_r($arr2);
print_r($str);
print_r($str2);
echo "<pre>";


?>
