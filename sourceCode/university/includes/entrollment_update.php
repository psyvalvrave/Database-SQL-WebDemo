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
$sectionID = $_POST['section_ID'];
$entrollGrade = $_POST['entroll_grade'];
   ?>
 <form action="entrollment_update_sql.php" method="POST">
   <input type="text" name="id" value="<?=$id?>" readonly><br>
   <input type="text" name="section_ID" value="<?=$sectionID?>"><br>
   <input type="text" name="entroll_grade" value="<?=$entrollGrade?>"><br>
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
