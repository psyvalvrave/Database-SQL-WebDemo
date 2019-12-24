

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<p>Department</p>
<?php
include_once 'includes/dbh.inc.php';
if(mysqli_connect_errno()){
  echo "Failed to connect to mySQL: ". mysqli_connect_errno();
}

$option = "SELECT * FROM department;";
$result = mysqli_query($conn ,$option);

echo "<table>
<tr>
<th>Department Code</th>
<th>Department Name</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["department_code"];
  $tempName=$row["department_name"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempName."</td>";
  echo "<td>
  <form action='includes/department_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='name' value='$tempName'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='includes/department_delete.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='submit' value='Delete'>
    </form>
  </td>";
  echo "</tr>";
}



 ?>
 <tr>
 <form action="includes/department_add.php" method="POST">
   <tr>
   <td><input type="text" name="id" placeholder="Department Code"></td>
   <td><input type="text" name="name" placeholder="Department Name"></td>
   <td><button type="submit" name="submit">Add</button></td>
 </tr>
 </table>
 </form>
 <form action="includes/department_search.php" method="POST">
   <label for="search">Search: </label>
   <input type="text" name="id" placeholder="Department Code">
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
