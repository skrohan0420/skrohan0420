<?php 

$olddate = mktime(0,0,0,03,15,2015);

$date = getdate($olddate);




echo"<pre>";

echo $date['month']. " - " .$date['year'];

echo "<br>";
echo "<br>";

print_r(getdate());
print_r(getdate($olddate));
echo"</pre>";


 ?>