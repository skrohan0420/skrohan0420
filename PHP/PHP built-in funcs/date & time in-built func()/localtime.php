<?php 
$olddate = mktime(0,0,0,03,15,2015);




echo"<pre>";

print_r(localtime());
echo "<br>";
print_r(localtime(time(), true));
echo "<br>";
print_r(localtime($olddate, true));

echo"</pre>";


 ?>