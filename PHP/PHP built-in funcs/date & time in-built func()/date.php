<?php 


// 							date(format)
// 									|
// 		-------------------------------------------------------
// 		|					|					|			  |
// 	   Day			  	  Month				   Year		   	 Week	
// 		|					|					|			  |	
// 	d(01-31)			  F(january)		  Y(2022)		 D(Mon)
// 	j(1-31)				  m(01)				  y(22)			 l(Monday)
// 	S(st,nd,re or th)	  M(jan)							 N(1) -- starts form moday
// 						  n(1)								 w(1) -- starts form sunday







echo "Today is : " . date("d")."<br>";
echo "Today is : " . date("j")."<br>";
echo "Today is : " . date("jS")."<br>";
echo "<br><br>";
echo "Month is : " . date("F")."<br>";
echo "Month is : " . date("m")."<br>";
echo "Month is : " . date("M")."<br>";
echo "Month is : " . date("n")."<br>";
echo "<br><br>";
echo "Year is : " . date("Y")."<br>";
echo "Year is : " . date("y")."<br>";
echo "<br><br>";
echo "Week day is : " . date("D")."<br>";
echo "Week day is : " . date("l")."<br>";
echo "Week day is : " . date("N")."<br>";
echo "Week day is : " . date("w")."<br>";
echo "<br><br>";
echo "full date : " . date("d/m/Y") . "<br>";
echo "full date : " . date("d-m-Y") . "<br>";
echo "full date : " . date("y-m-d") . "<br>";
echo "full date : " . date("jS-F-Y") . "<br>";
echo "<br><br>";
echo "<br><br>";
echo "day of Year : " . date("z") . "<br>";
echo "week of Year : " . date("W") . "<br>";
echo "Total days in current Month : " . date("W") . "<br>";
echo "<br><br>";
echo "<br><br>";
echo "LeapYear  : " . date("L") . "<br>"; //returns bool value




?>
