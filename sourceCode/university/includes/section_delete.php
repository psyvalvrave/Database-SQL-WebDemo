<?php
include_once 'dbh.inc.php';

$id = $_POST['id'];
//Delete with mysqli with mySQL
$section_delete = "DELETE FROM section WHERE section_ID='{$id}';";
mysqli_query($conn,$section_delete);
header("Location: ../index.section.php?delete=success");
 ?>
