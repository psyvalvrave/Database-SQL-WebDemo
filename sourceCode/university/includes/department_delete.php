<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
//Delete with mysqli with mySQL
$department_delete = "DELETE FROM department WHERE department_code='{$id}';";
mysqli_query($conn,$department_delete);
header("Location: ../index.department.php?delete=success");
 ?>
