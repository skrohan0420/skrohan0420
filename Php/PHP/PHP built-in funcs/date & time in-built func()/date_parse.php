<?php 

echo "<pre>";
print_r(date_parse("2015-03-15 12:30:25.5"));


$date = date_parse("2015-03-15 12:30:25.5");

echo $date["day"];

echo "</pre>";

 ?>