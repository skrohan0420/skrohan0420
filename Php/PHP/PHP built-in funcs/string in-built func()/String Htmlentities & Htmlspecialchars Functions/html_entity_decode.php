
<?php 

$str = "This 'quote' is <b>BOLD</b>";
$str2 = '<a href="https://www.youtube.com/">Youtube</a>';

$newstr = htmlentities($str);
echo '<br>';
echo $newstr;
echo '<br>';
echo html_entity_decode($newstr);
echo '<br>';


?>