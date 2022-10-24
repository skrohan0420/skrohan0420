<?php 


// mktime(hour,minute,second,month,day,year)


echo "time & date : " . date("d-m-y h:i:sa")."<br><br>";

// returns day of a old date


echo date("l", mktime(0,0,0,10,15,2005));
echo "<br><br>";
echo date("d-m-y", mktime(0,0,0,10,15,2005));
?>