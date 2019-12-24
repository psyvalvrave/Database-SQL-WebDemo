<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$locationName = mysqli_real_escape_string($conn, $_POST['name']);
$locationCountry = mysqli_real_escape_string($conn, $_POST['country']);
//Update with mysqli with mySQL
$location_update = "UPDATE location SET location_name='$locationName',location_country='$locationCountry' WHERE location_code='$id';";
mysqli_query($conn,$location_update);

header("Location: ../index.location.php?update=success");
 ?>
