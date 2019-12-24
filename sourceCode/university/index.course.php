

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<p>Course</p>
<?php
include_once 'includes/dbh.inc.php';
if(mysqli_connect_errno()){
  echo "Failed to connect to mySQL: ". mysqli_connect_errno();
}

$option = "SELECT * FROM course;";
$result = mysqli_query($conn ,$option);

echo "<table>
<tr>
<th>Course Code</th>
<th>Course Name</th>
<th>Course Credit</th>
<th>Department Code</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["course_code"];
  $tempName=$row["course_name"];
  $tempCredit=$row["course_credits"];
  $deparntmentCode=$row["department_code"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempName."</td>";
  echo "<td>" .$tempCredit."</td>";
  echo "<td>" .$deparntmentCode."</td>";
  echo "<td>
  <form action='includes/course_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='name' value='$tempName'>
    <input type='hidden' name='credit' value='$tempCredit'>
    <input type='hidden' name='dcode' value='$deparntmentCode'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='includes/course_delete.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='submit' value='Delete'>
    </form>
  </td>";
  echo "</tr>";
}




 ?>
 <tr>
 <form action="includes/course_add.php" method="POST">
   <tr>
   <td><input type="text" name="id" placeholder="Course Code"></td>
   <td><input type="text" name="name" placeholder="Course Name"></td>
   <td><input type="text" name="credit" placeholder="Course Credit"></td>
   <td><input type="text" name="code" placeholder="Department Code"></td>
   <td><button type="submit" name="submit">Add</button></td>
 </tr>
 </table>
 </form>

<form action="includes/course_search.php" method="POST">
  <label for="search">Search: </label>
  <input type="text" name="id" placeholder="Course Code">
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
