<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
//Delete with mysqli with mySQL
$location_delete = "DELETE FROM location WHERE location_code='{$id}';";
mysqli_query($conn,$location_delete);
header("Location: ../index.location.php?delete=success");
 ?>
