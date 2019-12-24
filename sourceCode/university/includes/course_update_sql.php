<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$credit = mysqli_real_escape_string($conn, $_POST['credit']);
$departmentCode = mysqli_real_escape_string($conn, $_POST['dcode']);
$fKeyCheck = "SELECT * FROM department WHERE department_code = '$departmentCode';";
$f_result = mysqli_query($conn ,$fKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($f_result)){
  header("Location: noMatchedInformation.php");
  die();
}
//Update with mysqli with mySQL
$course_update = "UPDATE course SET course_name='$name',course_credits='$credit', department_code='$departmentCode' WHERE course_code='$id';";
mysqli_query($conn,$course_update);

header("Location: ../index.course.php?update=success");
 ?>
