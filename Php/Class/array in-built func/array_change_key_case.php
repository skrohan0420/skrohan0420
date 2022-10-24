<?php 

$a = array('a'=>1,'b'=>2,'c'=>3,'d'=>4);
$b = array('A'=>1,'B'=>2,'C'=>3,'D'=>4);



print_r(array_change_key_case($a,CASE_UPPER));
echo '<br>';
print_r(array_change_key_case($b,CASE_LOWER));

 ?>