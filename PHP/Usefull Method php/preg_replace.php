<?php
$text = 'Hello World!';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;

	echo '<br>';

$str = 'Hello World!';
$pattern = '/Hello/i';
echo preg_replace($pattern, 'Hey', $str);
?>