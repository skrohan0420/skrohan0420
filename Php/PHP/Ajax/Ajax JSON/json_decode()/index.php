<?php 

$json_str = 'my.json';

$json_data = file_get_contents($json_str);

$arr = json_decode($json_data,true);

echo '<table border="1" cellpadding="10px" width="100%">';


foreach($arr as list('userId'=>$uid, 'id'=>$id, 'title'=>$title, 'body'=>$body)){
	echo "<tr>
			<td>{$uid}</td>
			<td>{$id}</td>
			<td>{$title}</td>
			<td>{$body}</td>
		</tr>";
}


echo '</table>';

// echo '<pre>';
// print_r($arr);
// echo '</pre>';
?>