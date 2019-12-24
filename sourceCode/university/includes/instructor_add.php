<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pKeyCheck = "SELECT * FROM instructor WHERE instructor_ID='$id';";
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
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
//Add New Info In the Database
$instructor_add = "INSERT INTO instructor (instructor_ID, instructor_first_name, instructor_last_name, department_code) VALUES ('$id', '$first', '$last', '$departmentCode');";
mysqli_query($conn, $instructor_add);

header("Location: ../index.instructor.php?signup=success");
 ?>
