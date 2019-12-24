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
  <th>Department Code</th>
  <th>Department Name</th>
  </tr>";
$id = $_POST['id'];

$option = "SELECT * FROM department where department_code='$id';";
$result = mysqli_query($conn ,$option);

if(!mysqli_num_rows(!$result)){
  header("Location: informationNotFound.php");
  die();
}

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["department_code"];
  $tempName=$row["department_name"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempName."</td>";
  echo "<td>
  <form action='department_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='name' value='$tempName'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='department_delete.php' method='POST'>
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
