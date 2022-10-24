<?php
  function armstrong_number($num) {
      $sl = strlen($num);
      $sum = 0;
      $num = (string)$num;
        for ($i = 0; $i < $sl; $i++) {
          $sum = $sum + pow((string)$num{$i},$sl);
        }
        if ((string)$sum == (string)$num) {
          return "True";
      }
      else {
          return "False";
      }
  }
  echo  armstrong_number(153) . '<br>';
  echo  armstrong_number(21) . '<br>';
  echo  armstrong_number(4587) . '<br>';
?>