<?php 
$b = 'orange';
$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4);


// extract(array,extract_rules,prefix)

// extract_rules - 1) EXTR_OVERWRITE, <-- deafult 
				// 2) EXTR_SKIP, 
				// 3) EXTR_PREFIX_SAME, 
				// 4) EXTR_PREFIX_ALL	


// extract($arr, EXTR_SKIP );
// extract($arr, EXTR_PREFIX_SAME, "test");
extract($arr, EXTR_PREFIX_ALL, "test");

echo "value of a : $a <br>";
echo "value of b : $test_b <br>";
echo "value of b : $b <br>";
echo "value of c : $c <br>";
echo "value of d : $d <br>";

 ?>