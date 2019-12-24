

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<p>Entrollment</p>
<?php
include_once 'includes/dbh.inc.php';
if(mysqli_connect_errno()){
  echo "Failed to connect to mySQL: ". mysqli_connect_errno();
}

$option = "SELECT * FROM entrollment;";
$result = mysqli_query($conn ,$option);

echo "<table>
<tr>
<th>Student ID</th>
<th>Section ID</th>
<th>Entroll Grade</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["student_ID"];
  $tempSID=$row["section_ID"];
  $tempEGrade=$row["entroll_grade"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempSID."</td>";
  echo "<td>" .$tempEGrade."</td>";
  echo "<td>
  <form action='includes/entrollment_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='section_ID' value='$tempSID'>
    <input type='hidden' name='entroll_grade' value='$tempEGrade'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='includes/entrollment_delete.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='hidden' name='section_ID' value='$tempSID'>
      <input type='submit' value='Delete'>
    </form>
  </td>";
  echo "</tr>";
}




 ?>
 <tr>
 <form action="includes/entrollment_add.php" method="POST">
   <tr>
   <td><input type="text" name="id" placeholder="Student ID"></td>
   <td><input type="text" name="sectionID" placeholder="Section ID"></td>
   <td><input type="text" name="entrollGrade" placeholder="Entroll Grade"></td>
   <td><button type="submit" name="submit">Add</button></td>
 </tr>
 </table>
 </form>
 <form action="includes/entrollment_search.php" method="POST">
   <label for="search">Search: </label>
   <input type="text" name="id" placeholder="Student ID">
   <button type="submit" name="submit">Search</button>
 </form>
 <button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

 <form action="index.php" method="POST">
   <button type="submit" name="submit">Home</button>
 </form>
</body>
</html>
