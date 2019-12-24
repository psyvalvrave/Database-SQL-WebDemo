<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
//Update with mysqli with mySQL
$student_update = "UPDATE students SET student_first_name='$first',student_last_name='$last', student_gender='$gender' WHERE student_ID='$id';";
mysqli_query($conn,$student_update);

header("Location: ../index.students.php?update=success");
 ?>
