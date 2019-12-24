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
  <th>Course Code</th>
  <th>Course Name</th>
  <th>Course Credit</th>
  <th>Department Code</th>
  </tr>";
$id = $_POST['id'];


$option = "SELECT * FROM course where course_code='$id';";
$result = mysqli_query($conn ,$option);

if(!mysqli_num_rows(!$result)){
  header("Location: informationNotFound.php");
  die();
}

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
  <form action='course_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='name' value='$tempName'>
    <input type='hidden' name='credit' value='$tempCredit'>
    <input type='hidden' name='dcode' value='$deparntmentCode'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='course_delete.php' method='POST'>
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
