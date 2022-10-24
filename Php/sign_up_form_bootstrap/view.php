<?php
include 'conn.php';


$sql = "SELECT * FROM `user_data`";

$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      img{
        height: 100px;
        width: 100px;
      }
      table{
        font-size: 10px;
      }
      table a{
        font-size: 10px !important;
      }
    </style>
</head>
<body>



        <table class="table table-primary">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Password</th>
                <th scope="col">Dob</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">course</th>
                <th scope="col">status</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                    
                    if(mysqli_num_rows($res) > 0){
                  
                        while($row = mysqli_fetch_assoc($res)) {
                            echo "<tr>";
                            echo "<td>". $row["id"]. "</td>";
                            echo "<td>". $row["name"]. "</td>";
                            echo "<td>". $row["email"]. "</td>";
                            echo "<td>". $row["phone"]. "</td>";
                            echo "<td>". $row["password"]. "</td>";
                            echo "<td>". $row["dob"]. "</td>";
                            echo "<td>". $row["gender"]. "</td>";
                            echo "<td>". $row["address"]. "</td>";
                            echo "<td>". $row["course"]. "</td>";

                            if($row['status'] == 'N'){
                              echo "<td><a  class='stsBtn btn btn-success' data-id='{$row["id"]}'>Activate</a></td>";
                            }else if($row['status'] == 'Y'){
                              echo "<td><a  class='stsBtn btn btn-danger' data-id='{$row["id"]}'>Deactivate</a></td>";
                            }
                            
                            echo "<td><img src='" .$row['image']. "'</td>";
                            echo "<td>
                                    <a class='btn btn-info'  href='edit.php?id=".$row['id']."'>Edit</a>
                                    <a class='dltBtn btn btn-danger' data-eid='{$row["id"]}'>Delete</a>
                                  </td>";
                            echo "</tr>";
                          
                        }
                    }
                    ?>
            </tbody>
          </table>


        <script src="assets/jquery-3.6.0.min.js"></script>
                  
        <script>
          $(document).ready(function(){            

            // status update
            $(document).on('click', '.stsBtn', function(){

              var user_id = $(this).data('id')
              var ellem = $(this)
              // alert(user_id)

              $.ajax({
                url: "status.php",
                type: "POST",
                data : {user_id: user_id},
                success: function(data){
                  // alert(data);
                  if(data == 'Y'){
                    ellem.html('Deactivate').removeClass('btn-success').addClass('btn-danger')
                  }else if(data == 'N'){
                    ellem.html('Activate').removeClass('btn-danger').addClass('btn-success')
                  }else{
                    alert('Can not Update');
                  }
                }
              })
            })




            // delete
            $(document).on('click','.dltBtn',function(){
              var ellement = $(this)
              var user_eid = $(this).data('eid')
              if(confirm('Are you sure you want to delete?')){
                
                // console.log(user_eid)
                $.ajax({
                  url : 'delete.php',
                  type : 'POST',
                  data : {eid : user_eid},
                  success : function(data){
                    if (data == 1){
                      $(ellement).closest("tr").fadeOut()
                    }else{
                      alert('Data Not Deleted...')
                    }
                  }
                })
              }

            })

          });
        </script>


</body>
</html>