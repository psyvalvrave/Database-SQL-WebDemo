<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <p>Search Result:</p>
  <!--Extra Update Box-->
  <?php
  include_once 'dbh.inc.php';

  echo "<table>
  <tr>
  <th>Student ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Gender</th>
  </tr>";

$id = $_POST['id'];

$option = "SELECT * FROM students where student_ID='$id';";
$result = mysqli_query($conn ,$option);

if(!mysqli_num_rows(!$result)){
  header("Location: informationNotFound.php");
  die();
}

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["student_ID"];
  $tempFName=$row["student_first_name"];
  $tempLName=$row["student_last_name"];
  $tempGender=$row["student_gender"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempFName."</td>";
  echo "<td>" .$tempLName."</td>";
  echo "<td>" .$tempGender."</td>";
  echo "<td>
  <form action='students_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='fname' value='$tempFName'>
    <input type='hidden' name='lname' value='$tempLName'>
    <input type='hidden' name='gender' value='$tempGender'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='students_delete.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='submit' value='Delete'>
    </form>
  </td>";
  echo "</tr>";
}
   ?>
   <button onclick="goBack()">Back</button>

   <script>
   function goBack() {
     window.history.back();
   }
   </script>
</body>
</html>
