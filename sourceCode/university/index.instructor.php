

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<p>Instructor</p>
<?php
include_once 'includes/dbh.inc.php';
if(mysqli_connect_errno()){
  echo "Failed to connect to mySQL: ". mysqli_connect_errno();
}

$option = "SELECT * FROM instructor;";
$result = mysqli_query($conn ,$option);

echo "<table>
<tr>
<th>Instructor ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Department Code</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["instructor_ID"];
  $tempFName=$row["instructor_first_name"];
  $tempLName=$row["instructor_last_name"];
  $deparntmentCode=$row["department_code"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempFName."</td>";
  echo "<td>" .$tempLName."</td>";
  echo "<td>" .$deparntmentCode."</td>";
  echo "<td>
  <form action='includes/instructor_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='fname' value='$tempFName'>
    <input type='hidden' name='lname' value='$tempLName'>
    <input type='hidden' name='dcode' value='$deparntmentCode'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='includes/instructor_delete.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='submit' value='Delete'>
    </form>
  </td>";
  echo "</tr>";
}




 ?>
 <tr>
 <form action="includes/instructor_add.php" method="POST">
   <tr>
   <td><input type="text" name="id" placeholder="Instructor ID"></td>
   <td><input type="text" name="first" placeholder="Firstname"></td>
   <td><input type="text" name="last" placeholder="Lastname"></td>
   <td><input type="text" name="code" placeholder="Department Code"></td>
   <td><button type="submit" name="submit">Add</button></td>
 </tr>
 </table>
 </form>
 <form action="includes/instructor_search.php" method="POST">
   <label for="search">Search: </label>
   <input type="text" name="id" placeholder="Instructor ID">
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
