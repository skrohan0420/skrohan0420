
<?php 

$str = "This 'quote' is <b>BOLD</b>";
$str2 = '<a href="https://www.youtube.com/">Youtube</a>';

echo $str .'<br>';
echo htmlentities($str);

echo '<br>';

echo $str2 .'<br>';
echo htmlspecialchars($str2);
echo '<br>';
echo htmlspecialchars($str , ENT_QUOTES);
echo '<br>';
echo htmlspecialchars($str , ENT_NOQUOTES);

?>