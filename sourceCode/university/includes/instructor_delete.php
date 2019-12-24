<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
//Delete with mysqli with mySQL
$instructor_delete = "DELETE FROM instructor WHERE instructor_ID='{$id}';";
mysqli_query($conn,$instructor_delete);
header("Location: ../index.instructor.php?delete=success");
 ?>
