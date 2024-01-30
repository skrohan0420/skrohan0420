<?php
	function trinary_Test($n){
		$r = $n > 30 ? "greater than 30": ($n > 20 ? "greater than 20": ($n > 10 ? "greater than 10": "smaller than 10")); 
			echo $n." : ".$r."<br>";
	}
	trinary_Test(32);
	trinary_Test(21);
	trinary_Test(12);
	trinary_Test(4);
?>