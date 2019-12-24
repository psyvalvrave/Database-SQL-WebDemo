<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <!--A Basic Selected Option to Direct to Different Database-->
  <p>Simple Database Demo</p>
  <form action="#" method="post">
  <select name="db">
    <option value="index.php" selected>Select The Database...</option>
    <option value="index.students.php">Students</option>
    <option value="index.entrollment.php">Entrollment</option>
    <option value="index.location.php">Location</option>
    <option value="index.department.php">Department</option>
    <option value="index.instructor.php">Instructor</option>
    <option value="index.course.php">Course</option>
    <option value="index.section.php">Section</option>
      </select>
    <input type = "submit" name = submit value = "Go"/>
  </form>
  <?php
  $selected_val = (isset($_POST['db'])?$_POST['db']:null);  // Storing Selected Value In Variable
  header("Location:".$selected_val);  // Direct To Selected Option
  ?>
