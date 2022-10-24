<?php 

include 'database.php';

$obj = new Database();


// INSERT
// 
// $obj->insert('students',['student_name'=>'kumar sanu','age'=>'30','city'=>'Dhilli']);
// 
// echo "INSERT Result is : ";
// echo '<pre>';
// print_r($obj->getResult());
// echo '</pre>';





// UPDATE
// 
// $obj->update('students',['student_name'=>'hanuman','age'=>'120','city'=>'hmmman'],'id="8"');
// $obj->update('students',['student_name'=>'boka'],'city="chandigarh"');
// 
// echo "UPDATE Result is : ";
// echo '<pre>';
// print_r($obj->getResult());
// echo '</pre>';






// DELETE
// 
// $obj->delete('students','age = "26"');
// 
// echo "DELETE Result is : ";
// echo '<pre>';
// print_r($obj->getResult());
// echo '</pre>';






// SELECT
// 
// $obj->sql('SELECT * FROM students WHERE age = "22"');
// $colName = "students.id,students_name,students.age,citytb.cname";
// $join = "citytb ON students.city = citytb.cid";
// $limit = 3;
// $obj->select('students','*',null,null,null,2);
// $obj->select('students','*',null,null,null,null);
// $obj->select('students','*',null,'city="kolkata"',null,null);
// $obj->select('students','id,student_name',null,null,'student_name',4);
//

// echo "SELECT Result is : ";
// echo '<pre>';
// print_r($obj->getResult());
// echo '</pre>';
  



// PAGINATION
// 
// $obj->pagination('students',null,null,2);





?>