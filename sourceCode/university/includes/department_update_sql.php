<?php
include_once 'dbh.inc.php';
//Protected Your Database With String or Not Real Code
$id = mysqli_real_escape_string($conn, $_POST['id']);
$departmentName = mysqli_real_escape_string($conn, $_POST['name']);
//Update with mysqli with mySQL
$department_update = "UPDATE department SET department_name='$departmentName' WHERE department_code='$id';";
mysqli_query($conn,$department_update);

header("Location: ../index.department.php?update=success");
 ?>
