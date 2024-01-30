<?php 


// 							date(format)
// 									|
// 		-------------------------------------------------------
// 		|					|					|			  |
// 	   hour			  	  minuts			 seconds	   meridian	
// 		|					|					|			  |	
// 	h(01-12)			  i(00-59)			  s(00-59)		a(am , pm)
// 	H(00-23)			 					  				A(AM , PM)
// 	g(1-12)				  									 
// 	G(1-23)				 									





echo "Hour : " . date("h") . "<br>";
echo "Hour : " . date("H") . "<br>";
echo "Hour : " . date("g") . "<br>";
echo "Hour : " . date("G") . "<br>";

echo "<br><br>";
echo "minuts : " . date("i") . "<br>";

echo "<br><br>";
echo "seconds : " . date("s") . "<br>";

echo "<br><br>";
echo "meridian : " . date("a") . "<br>";
echo "meridian : " . date("A") . "<br>";
echo "<br><br>";

echo "Server time is : " . date("h:i:sa e") . "<br>";
echo "<br><br>";

date_default_timezone_set("asia/kolkata"); //sets local time zone

echo " time is : " . date("d-m-y h:i:sa e") . "<br>";
echo "<br><br>";
echo " time zone : " . date("e") . "<br>";


?>
