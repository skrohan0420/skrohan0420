<?php
    $primes = array();

    for ($i = 2; $i<100; $i++){
        $not_prime = true; 
            for ($j = 2; $j<=($i/2); $j++){
                if ($i%$j==0) {
                    $not_prime = false;
                    break;
                }
            }
        if($not_prime){
            array_push($primes, $i);
        }
    }
    print_r($primes)."<br>";
?>