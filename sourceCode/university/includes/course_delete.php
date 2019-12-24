<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
//Delete with mysqli with mySQL
$course_delete = "DELETE FROM course WHERE course_code='{$id}';";
mysqli_query($conn,$course_delete);
header("Location: ../index.course.php?delete=success");
 ?>
