<?php 

// adds and subs can do both


$date =  date_create("2015-05-15");

date_modify($date,"30 days");
date_modify($date,"-30 days");



echo date_format($date, "d-m-Y");
?>