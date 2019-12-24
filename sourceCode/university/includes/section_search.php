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
  <th>Section ID</th>
  <th>Section Term</th>
  <th>Section Room</th>
  <th>Start Time</th>
  <th>End Time</th>
  <th>Course Code</th>
  <th>Location Code</th>
  <th>Instructor ID</th>
  </tr>";
$id = $_POST['id'];

$option = "SELECT * FROM section where section_ID='$id';";
$result = mysqli_query($conn ,$option);

if(!mysqli_num_rows(!$result)){
  header("Location: informationNotFound.php");
  die();
}

while($row = mysqli_fetch_assoc($result)){
  $tempID=$row["section_ID"];
  $tempTerm=$row["section_term"];
  $tempRoom=$row["section_room"];
  $tempStart=$row["section_time_begin"];
  $tempEnd=$row["section_time_end"];
  $tempCourse=$row["course_code"];
  $tempLocation=$row["location_code"];
  $tempInstructor=$row["instructor_ID"];
  echo "<tr>";
  echo "<td>" .$tempID."</td>";
  echo "<td>" .$tempTerm."</td>";
  echo "<td>" .$tempRoom."</td>";
  echo "<td>" .$tempStart."</td>";
  echo "<td>" .$tempEnd."</td>";
  echo "<td>" .$tempCourse."</td>";
  echo "<td>" .$tempLocation."</td>";
  echo "<td>" .$tempInstructor."</td>";
  echo "<td>
  <form action='section_update.php' method='POST'>
    <input type='hidden' name='id' value='$tempID'>
    <input type='hidden' name='term' value='$tempTerm'>
    <input type='hidden' name='room' value='$tempRoom'>
    <input type='hidden' name='start' value='$tempStart'>
    <input type='hidden' name='end' value='$tempEnd'>
    <input type='hidden' name='course' value='$tempCourse'>
    <input type='hidden' name='location' value='$tempLocation'>
    <input type='hidden' name='instructor' value='$tempInstructor'>
    <input type='submit' value='Update'>
  </form></td>";
  echo
  "<td>
    <form action='section_delete.php' method='POST'>
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
