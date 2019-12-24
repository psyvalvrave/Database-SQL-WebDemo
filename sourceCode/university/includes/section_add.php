<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pKeyCheck = "SELECT * FROM section WHERE section_ID='$id';";
$result = mysqli_query($conn ,$pKeyCheck);
//Primary Key Checked
if(mysqli_num_rows($result)){
  header("Location: conflictIndex.php");
  die();
}
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
//Add New Info In the Database
$section_add = "INSERT INTO section (section_ID, section_term, section_room, section_time_begin,section_time_end,course_code,location_code,instructor_ID) VALUES ('$id', '$term', '$room', '$start', '$end', '$courseCode', '$locationCode', '$instructorCode');";
mysqli_query($conn, $section_add);

header("Location: ../index.section.php?signup=success1");
 ?>
