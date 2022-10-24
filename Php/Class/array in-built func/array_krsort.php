<?php 
$a = array('c'=>3,'a'=>1,'d'=>4,'b'=>2);
krsort($a);
    
    print_r($a);
    echo '<br>';
    foreach ($a as $b => $c) {
        echo $c;
    }

?>