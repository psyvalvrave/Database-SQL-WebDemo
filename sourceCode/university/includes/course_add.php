<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pKeyCheck = "SELECT * FROM course WHERE course_code='$id';";
$result = mysqli_query($conn ,$pKeyCheck);
//Primary Key Checked
if(mysqli_num_rows($result)){
  header("Location: conflictIndex.php");
  die();
}
//Foreign Key Checked
$departmentCode = mysqli_real_escape_string($conn, $_POST['code']);
$fKeyCheck = "SELECT * FROM department WHERE department_code = '$departmentCode';";
$f_result = mysqli_query($conn ,$fKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($f_result)){
  header("Location: noMatchedInformation.php");
  die();
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$credit = mysqli_real_escape_string($conn, $_POST['credit']);
//Add New Info In the Database
$course_add = "INSERT INTO course (course_code, course_name, course_credits, department_code) VALUES ('$id', '$name', '$credit', '$departmentCode');";
mysqli_query($conn, $course_add);

header("Location: ../index.course.php?signup=success");
 ?>
