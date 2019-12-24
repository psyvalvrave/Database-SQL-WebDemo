<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pKeyCheck = "SELECT * FROM department WHERE department_code = '$id';";
$result = mysqli_query($conn ,$pKeyCheck);
//Primary Key Checked
if(mysqli_num_rows($result)){
  header("Location: conflictIndex.php");
  die();
}
$departmentName = mysqli_real_escape_string($conn, $_POST['name']);
//Add New Info In the Database
$department_add = "INSERT INTO department(department_code, department_name) VALUES ('$id', '$departmentName');";
mysqli_query($conn, $department_add);
header("Location: ../index.department.php?signup=success");
 ?>
