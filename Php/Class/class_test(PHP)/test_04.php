<?php

$units = $_POST['units'];


function calculate_bill($units) {
    $first = 3.50;
    $second = 4.00;
    $third = 5.20;
    $fourth = 6.50;

    if($units <= 50) {
        $bill = $units * $first;
    }
    else if($units > 50 && $units <= 100) {
        $x = 50 * $first;
        $y = $units - 50;
        $bill = $x + ($y * $second);
    }
    else if($units > 100 && $units <= 200) {
        $x = (50 * 3.5) + (100 * $second);
        $y = $units - 150;
        $bill = $x + ($y * $third);
    }
    else {
        $x = (50 * 3.5) + (100 * $second) + (100 * $third);
        $y = $units - 250;
        $bill = $x + ($y * $fourth);
    }



    return number_format($bill,'2');
}



echo 'Total amount of ' . $units . ' - ' . calculate_bill($units);
?>