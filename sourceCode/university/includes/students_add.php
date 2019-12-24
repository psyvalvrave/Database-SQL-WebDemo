<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pKeyCheck = "SELECT * FROM students WHERE student_ID='$id';";
$result = mysqli_query($conn ,$pKeyCheck);
//Primary Key Checked
if(mysqli_num_rows($result)){
  header("Location: conflictIndex.php");
  die();
}
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
//Add New Info In the Database
$student_add = "INSERT INTO students (student_ID, student_first_name, student_last_name, student_gender) VALUES ('$id', '$first', '$last', '$gender');";
mysqli_query($conn, $student_add);

header("Location: ../index.students.php?signup=success");
 ?>
