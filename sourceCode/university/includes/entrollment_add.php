<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$fKeyCheck = "SELECT * FROM students WHERE student_ID='$id';";
$result = mysqli_query($conn ,$fKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($result)){
  header("Location: noMatchedInformation.php");
  die();
}
$sectionId = mysqli_real_escape_string($conn, $_POST['sectionID']);
$entrollGrade = mysqli_real_escape_string($conn, $_POST['entrollGrade']);
//Add New Info In the Database
$entrollment_add = "INSERT INTO entrollment(student_ID, section_ID, entroll_grade) VALUES ('$id', '$sectionId', '$entrollGrade');";
mysqli_query($conn, $entrollment_add);
header("Location: ../index.entrollment.php?signup=success");
 ?>
