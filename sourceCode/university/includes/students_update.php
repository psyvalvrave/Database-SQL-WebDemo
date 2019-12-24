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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];

   ?>
 <form action="students_update_sql.php" method="POST">
   <input type="text" name="id" value="<?=$id?>" readonly><br>
   <input type="text" name="first" value="<?=$fname?>"><br>
   <input type="text" name="last" value="<?=$lname?>"><br>
   <input type="text" name="gender" value="<?=$gender?>"><br>
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
