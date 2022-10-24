<?php 

$n = $_POST['n'];

if (floor($n) == 0) {
	echo "It's a Zero";
}
if (floor($n) < 0) {
	echo "It's a Negetive Number";
}
if (floor($n) > 0) {
	echo "It's a Positive Number";
}

 ?>