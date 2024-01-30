<?php 

$a = array('orange','banana','apple','grapes');

next($a);
next($a);


echo '<pre>';
// returns pointer to index 0
print_r(reset($a));
// print_r(current($a));
echo '</pre>';

 ?>