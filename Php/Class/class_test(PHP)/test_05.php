<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$o  = $_POST['opo'];
    switch ($o) {
        case "+":
           echo 'Addisson Result'. $n1 + $n2;
            break;
        case "-":
           echo 'Substraction Result '. $n1 - $n2;
            break;
        case "*":
            echo 'multiplication Result '.$n1 * $n2;
            break;
        case "/":
            echo 'divide '. $n1 / $n2;
    }


?>