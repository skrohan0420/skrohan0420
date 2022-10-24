<?php 



$tz = timezone_open("Asia/kolkata");
timezone_name_get($tz);


echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";
 ?>