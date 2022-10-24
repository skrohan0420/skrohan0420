<?php  
require 'products.php';
require 'testing.php';

function wow(){

	echo 'wow form index file';
	echo '<br>';

}


use pro\v1\command as cmd;

$obj = new cmd\product();

$obj1 = new pro\v1\command\product();
// $obj1 = new pro\product();
// wow();
// pro\wow();
// test\wow();

?>