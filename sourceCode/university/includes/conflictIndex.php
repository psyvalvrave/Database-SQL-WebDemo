<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <!--Primary Key Handler Page-->
<p>Your ID/Code is in the detabase, please try to update. (Primary Key Issue)</p>
<button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

 <form action="../index.php" method="POST">
   <button type="submit" name="submit">Home</button>
 </form>
 <style>
	body {background-color: powderblue;}
 </style>
</body>
</html>
