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
  <th>Location Code</th>
  <th>Location Name</th>
  <th>Country</th>
  </tr>";
$id = $_POST['id'];

$option = "SELECT * FROM location where location_code='$id';";
$result = mysqli_query($conn ,$option);

if(!mysqli_num_rows(!$result)){
  header("Location: informationNotFound.php");
  die();
}

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["location_code"];
  $tempName=$row["location_name"];
  $tempCountry=$row["location_country"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempName."</td>";
  echo "<td>" .$tempCountry."</td>";
  echo "<td>
  <form action='location_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='name' value='$tempName'>
    <input type='hidden' name='country' value='$tempCountry'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='location_delete.php' method='POST'>
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
