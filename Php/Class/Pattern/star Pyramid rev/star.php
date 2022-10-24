<?php
    
    $n = $_POST['n'];

      
   
    for ($i = 0; $i < $n; $i++){     
        
        for($j = $n-$i; $j >= 1; $j--){       
            
            echo '* ';
        } 
        echo "<br>";
    }

  
    
   
?>