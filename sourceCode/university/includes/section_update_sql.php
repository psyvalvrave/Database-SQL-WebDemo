<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
//Foreign Key Checked #1
$courseCode = mysqli_real_escape_string($conn, $_POST['course']);
$fcKeyCheck = "SELECT * FROM course WHERE course_code = '$courseCode';";
$fc_result = mysqli_query($conn ,$fcKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($fc_result)){
  header("Location: noMatchedInformation.php");
  die();
}
//Foreign Key Checked #2
$locationCode = mysqli_real_escape_string($conn, $_POST['location']);
$flKeyCheck = "SELECT * FROM location WHERE location_code = '$locationCode';";
$fl_result = mysqli_query($conn ,$flKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($fl_result)){
  header("Location: noMatchedInformation.php");
  die();
}
//Foreign Key Checked #3
$instructorCode = mysqli_real_escape_string($conn, $_POST['instructor']);
$fiKeyCheck = "SELECT * FROM instructor WHERE instructor_ID = '$instructorCode';";
$fi_result = mysqli_query($conn ,$fiKeyCheck);
//Primary Key Checked
if(!mysqli_num_rows($fi_result)){
  header("Location: noMatchedInformation.php");
  die();
}

$term = mysqli_real_escape_string($conn, $_POST['term']);
$room = mysqli_real_escape_string($conn, $_POST['room']);
$start = $_POST['start'];
$end = $_POST['end'];
//Update with mysqli with mySQL
$section_update = "UPDATE section SET section_term='$term',section_room='$room', section_time_begin='$start', section_time_end='$end', course_code='$courseCode', location_code='$locationCode', instructor_ID='$instructorCode' WHERE section_ID='$id';";
mysqli_query($conn,$section_update);

header("Location: ../index.section.php?update=success");
 ?>
