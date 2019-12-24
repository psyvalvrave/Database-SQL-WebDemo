<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pKeyCheck = "SELECT * FROM location WHERE location_code = '$id';";
$result = mysqli_query($conn ,$pKeyCheck);
//Primary Key Checked
if(mysqli_num_rows($result)){
  header("Location: conflictIndex.php");
  die();
}
$locationName = mysqli_real_escape_string($conn, $_POST['name']);
$locationCountry = mysqli_real_escape_string($conn, $_POST['country']);
//Add New Info In the Database
$location_add = "INSERT INTO location(location_code, location_name, location_country) VALUES ('$id', '$locationName', '$locationCountry');";
mysqli_query($conn, $location_add);
header("Location: ../index.location.php?signup=success");
 ?>
