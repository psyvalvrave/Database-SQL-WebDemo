<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$fName = mysqli_real_escape_string($conn, $_POST['fname']);
$lName = mysqli_real_escape_string($conn, $_POST['lname']);
$departmentCode = mysqli_real_escape_string($conn, $_POST['dcode']);
$fKeyCheck = "SELECT * FROM department WHERE department_code = '$departmentCode';";
$f_result = mysqli_query($conn ,$fKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($f_result)){
  header("Location: noMatchedInformation.php");
  die();
}
//Update with mysqli with mySQL
$instructor_update = "UPDATE instructor SET instructor_first_name='$fName',instructor_last_name='$lName', department_code='$departmentCode' WHERE instructor_ID='$id';";
mysqli_query($conn,$instructor_update);

header("Location: ../index.instructor.php?update=success");
 ?>
