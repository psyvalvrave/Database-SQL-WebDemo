

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<p>Section</p>
<?php
include_once 'includes/dbh.inc.php';
if(mysqli_connect_errno()){
  echo "Failed to connect to mySQL: ". mysqli_connect_errno();
}

$option = "SELECT * FROM section;";
$result = mysqli_query($conn ,$option);

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
  <form action='includes/section_update.php' method='POST'>
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
    <form action='includes/section_delete.php' method='POST'>
      <input type='hidden' name='id' value='$tempID'>
      <input type='submit' value='Delete'>
    </form>
  </td>";
  echo "</tr>";
}




 ?>
 <tr>
 <form action="includes/section_add.php" method="POST">
   <tr>
   <td><input type="text" name="id" placeholder="Section ID"></td>
   <td><input type="text" name="term" placeholder="Section Term"></td>
   <td><input type="text" name="room" placeholder="Section Room"></td>
   <td><input type="time" name="start" placeholder="Start Time"></td>
   <td><input type="time" name="end" placeholder="End Time"></td>
   <td><input type="text" name="course" placeholder="Course Code"></td>
   <td><input type="text" name="location" placeholder="Location Code"></td>
   <td><input type="text" name="instructor" placeholder="Instructor Code"></td>
   <td><button type="submit" name="submit">Add</button></td>
 </tr>
 </table>
 </form>
 <form action="includes/section_search.php" method="POST">
   <label for="search">Search: </label>
   <input type="text" name="id" placeholder="Section ID">
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
