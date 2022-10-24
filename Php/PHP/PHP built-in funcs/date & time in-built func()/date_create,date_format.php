<?php 

// date_create(time,timezone)



$date = date_create("2023-03-15 22:24:00", timezone_open("Asia/Kolkata"));


echo date_format($date, "l");
echo "<br>";
echo date_format($date, "d/m/Y h:i:s");

// echo "<pre>";
// print_r($date);
// echo "</pre>";
?>