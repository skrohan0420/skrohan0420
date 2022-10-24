<?php
   trait ADD{
      public function add($var1,$var2){
         return $var1+$var2;
      }
   }
   class cal{
      use ADD;
      public function calculate($var1,$var2){
         echo "Ressult of addition = ".$this->add($var1,$var2);
      }
   }
   $o = new cal();
   $o -> calculate(5,11);
?>