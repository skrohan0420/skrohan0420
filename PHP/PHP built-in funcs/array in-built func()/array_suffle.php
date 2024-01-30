<?php

// The shuffle() function randomizes the order of the elements in the array.

// This function assigns new keys for the elements in the array. Existing keys will be removed (See Example below).


$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);


echo '<pre>';
print_r($my_array);
echo '</pre>';

?>