<?php 
// s1 - s2
// 
// 0 -> Equal
// - -> s1 is less than s2
// + -> s1 is greater than s2



echo similar_text("hello world!","Hello yahoobaba");
echo "<br>";
echo similar_text("hello world!","hello world!");
echo "<br>";
echo similar_text("hello world!","Hello yahoobaba", $per);
echo "<br>";
echo "percentage : $per";





 ?>