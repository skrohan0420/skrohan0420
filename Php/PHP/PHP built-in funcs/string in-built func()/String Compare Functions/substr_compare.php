<?php 
// s1 - s2
// 
// 0 -> Equal
// - -> s1 is less than s2
// + -> s1 is greater than s2

// true for case sensitive 
// flase(deafult) for not case sensitive


echo substr_compare("hello world!","world!", 6);
echo "<br>";
echo substr_compare("hello world!","World!", 6);
echo "<br>";
echo substr_compare("hello world!","world!", 0, 3);
echo "<br>";
echo substr_compare("hello world!","world!", 6, 3);
echo "<br>";
echo substr_compare("hello world!","world!", -2, 2);
echo "<br>";
echo substr_compare("hello world!","d!", -2, 2);
echo "<br>";
echo substr_compare("hello world!","d!", -2, 2, true);






 ?>