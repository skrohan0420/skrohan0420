<?php 

$str = 'I love "PHP"';


echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";
 ?>