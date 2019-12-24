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
  <th>Section ID</th>
  <th>Entroll Grade</th>
  </tr>";

  $id = $_POST['id'];

  $option = "SELECT * FROM entrollment WHERE student_ID='$id';";
  $result = mysqli_query($conn ,$option);

  if(!mysqli_num_rows(!$result)){
  header("Location: informationNotFound.php");
  die();
}

  while($row = mysqli_fetch_assoc($result)){
    $tempID=$row["student_ID"];
    $tempSID=$row["section_ID"];
    $tempEGrade=$row["entroll_grade"];
    echo "<tr>";
    echo "<td>" .$tempID."</td>";
    echo "<td>" .$tempSID."</td>";
    echo "<td>" .$tempEGrade."</td>";
    echo "<td>
    <form action='entrollment_update.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='hidden' name='section_ID' value='$tempSID'>
      <input type='hidden' name='entroll_grade' value='$tempEGrade'>
      <input type='submit' value='Update'>
    </form></td>";
    echo
    "<td>
      <form action='entrollment_delete.php' method='POST'>
        <input type='hidden' name='id' value='$tempID'>
        <input type='hidden' name='section_ID' value='$tempSID'>
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
