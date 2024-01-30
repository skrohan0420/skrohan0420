<?php 

// date_diff(date1 , date2, absolute)
// returns an objects with defrence beetwin two dates 


$d1 = date_create("2013-03-15");
$d2 = date_create("2013-12-12");


$diff = date_diff($d1,$d2);

echo "<pre>";
print_r($diff);
echo $diff->days;
echo "<br>";
echo $diff->format("%R%a"); // show diffrence
echo "</pre>";


 ?>