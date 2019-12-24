<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$sectionID = mysqli_real_escape_string($conn, $_POST['section_ID']);
$entrollGrade = mysqli_real_escape_string($conn, $_POST['entroll_grade']);
//Update with mysqli with mySQL
$entrollment_update = "UPDATE entrollment SET section_ID='$sectionID',entroll_grade='$entrollGrade' WHERE student_ID='$id';";
mysqli_query($conn,$entrollment_update);

header("Location: ../index.entrollment.php?update=success");
 ?>
