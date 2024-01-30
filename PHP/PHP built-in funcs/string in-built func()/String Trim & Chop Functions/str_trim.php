<?php
// string					Required. Specifies the string to check
// charlist					Optional. Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
// 							"\0" - NULL
// 							"\t" - tab
// 							"\n" - new line
// 							"\x0B" - vertical tab
// 							"\r" - carriage return
// 							" " - ordinary white space


$str = "Yahoo Baba";
$str2 = " Yahoo Baba ";


echo  trim($str ,'a');
echo "<br>";
echo  trim($str ,'Y');
echo "<br>";
echo  trim($str ,'ba');
echo  trim($str2)

?>