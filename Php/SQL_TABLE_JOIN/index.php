<?php
$conn = mysqli_connect("localhost","root","","test");
if($conn){
    // echo 'database Connected <br>';
}else{
    echo 'database Connection Error';
}

// $sql = "SELECT * FROM `user_table`";
$sql = "SELECT `cart.product-id`, `product.name`
        FROM `cart`
        INNER JOIN `product` ON `cart.product-id` = `product.product-id`";

echo $sql;
exit;

$q = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($q);


$json = json_encode($result);

echo '<pre>';
print_r($json);
echo '</pre>';



?>