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
$name = $_POST['name'];
$credit = $_POST['credit'];
$dCode = $_POST['dcode'];
   ?>
 <form action="course_update_sql.php" method="POST">
   <input type="text" name="id" value="<?=$id?>" readonly><br>
   <input type="text" name="name" value="<?=$name?>"><br>
   <input type="text" name="credit" value="<?=$credit?>"><br>
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
