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
$term = $_POST['term'];
$room = $_POST['room'];
$start = $_POST['start'];
$end = $_POST['end'];
$cCode = $_POST['course'];
$lCode = $_POST['location'];
$iId = $_POST['instructor'];
   ?>
 <form action="section_update_sql.php" method="POST">
   <input type="text" name="id" value="<?=$id?>" readonly><br>
   <input type="text" name="term" value="<?=$term?>"><br>
   <input type="text" name="room" value="<?=$room?>"><br>
   <input type="time" name="start" value="<?=$start?>"><br>
   <input type="time" name="end" value="<?=$end?>"><br>
   <input type="text" name="course" value="<?=$cCode?>"><br>
   <input type="text" name="location" value="<?=$lCode?>"><br>
   <input type="text" name="instructor" value="<?=$iId?>"><br>
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
