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
$locationName = $_POST['name'];
$locationCountry = $_POST['country'];
   ?>
 <form action="location_update_sql.php" method="POST">
   <input type="text" name="id" value="<?=$id?>" readonly><br>
   <input type="text" name="name" value="<?=$locationName?>"><br>
   <input type="text" name="country" value="<?=$locationCountry?>"><br>
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
