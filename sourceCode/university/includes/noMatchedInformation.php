<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <!--Foreigner Key Handler Page-->
<p>Your ID/code isn't in the detabase, please use existed ID/code or Create New ID/code first. (Foreigner Key Issue)</p>
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
