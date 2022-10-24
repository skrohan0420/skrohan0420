
<?php 

$str = "This 'quote' is <b>BOLD</b>";
$str2 = '<a href="https://www.youtube.com/">Youtube</a>';

$newstr2 = htmlspecialchars($str2);

echo '<br>';
echo $newstr2;
echo '<br>';
echo htmlspecialchars_decode($newstr2);

?>