<?php

 $conn = mysqli_connect("localhost","root","","testing") or die("Connection failed");

 if(isset($_POST['r1']) && isset($_POST['r2'])){
    $min = $_POST['r1'];
    $max = $_POST['r2'];

    $sql = "SELECT * FROM students WHERE age BETWEEN {$min} AND {$max}";
 }else{
    $min = '';
    $max = '';
    $sql = "SELECT * FROM students ORDER BY id asc";
 }

$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
$output = '';

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
                  <td align='center'>{$row["id"]}</td>
                  <td>{$row["student_name"]}</td>
                  <td align='center'>{$row["age"]}</td>
                  <td>{$row["city"]}</td>
                </tr>";
  }

  echo $output;
}else{
  echo "<tr>
          <td align='center' colspan='4'><h1 style='color:red;'>No Record Found</h1></td>
        </tr>"; 
  exit;
    
}

?>
