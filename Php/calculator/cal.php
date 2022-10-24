<?php
    $cal1= $_POST['n1'];
    $cal2= $_POST['n2'];

    $res= $_POST['cal'];

    if ($res == '+'){ 
        echo $cal1+$cal2;
    }
    else if ($res == '-'){
        echo $cal1-$cal2;
    }
    else if ($res == '*'){
        echo $cal1*$cal2;
    }
    else if ($res == '/'){
        echo $cal1/$cal2;
    }
    else{
        echo 'something went worng';
    }
?>