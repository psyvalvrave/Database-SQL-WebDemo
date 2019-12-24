<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
//Delete with mysqli with mySQL
$student_delete = "DELETE FROM students WHERE student_ID='{$id}';";
mysqli_query($conn,$student_delete);
header("Location: ../index.students.php?delete=success");
 ?>
