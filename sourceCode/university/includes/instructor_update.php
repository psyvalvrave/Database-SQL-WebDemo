<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <p>Update Information</p>
  <!--Extra Update Box-->
  <?php
$id = $_POST['id'];
$fName = $_POST['fname'];
$lName = $_POST['lname'];
$dCode = $_POST['dcode'];
   ?>
 <form action="instructor_update_sql.php" method="POST">
   <input type="text" name="id" value="<?=$id?>" readonly><br>
   <input type="text" name="fname" value="<?=$fName?>"><br>
   <input type="text" name="lname" value="<?=$lName?>"><br>
   <input type="text" name="dcode" value="<?=$dCode?>"><br>
   <button type="submit" name="submit">Update</button>
 </form>
 <style>
	body {background-color: powderblue;}
 </style>
  <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
