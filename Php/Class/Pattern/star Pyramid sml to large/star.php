<?php
    
    $n = $_POST['n'];

      
   
   
    for($i=1; $i<=$n; $i++){   
        for($j=1; $j<=$i; $j++){   
        echo ' * ';   
        }  
    echo '<br>';   
    }  

    for($i=$n; $i>=1; $i--){   
        for($j=1; $j<=$i; $j++){  
        echo ' * ';   
    }   
    echo '<br>';   
    }      
   
?>