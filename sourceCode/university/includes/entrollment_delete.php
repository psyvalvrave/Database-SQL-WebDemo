<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
$SID = $_POST['section_ID'];
//Delete with mysqli with mySQL
$entrollment_delete = "DELETE FROM entrollment WHERE student_ID='{$id}' AND section_ID = '{$SID}';";
mysqli_query($conn,$entrollment_delete);
header("Location: ../index.entrollment.php?delete=success");
 ?>
