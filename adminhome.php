<?php
session_start();
//echo"WELCOME ".$_SESSION['$adminemail'];
?>
<?php
include'conn.php';
//$session_check=$_SESSION['$adminemail'];
//if ($session_check) 
//{
	
//}
//else
//{
//	header('location:adminlogin.php');
//}
?>

<!DOCTYPE html>
<html>
<head>
<style>

body{
	background-image: url("img/bookandmug.jpg");
	height: 90vh;
	background-size:cover;
	background-position:center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  height: 56px;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 13px 19px;
  text-decoration: none;
  font-size: 25px;
}

li a:hover {
  background-color: #111;
}

button {
	font-size: 18px;
	font-weight: 100px;
	margin-bottom: 3px;
	margin-right: 5px;
	color: black;
}

button:hover{
	background-color: grey;
}

</style>
</head>
<body>

<ul>
  <li><a href="adminqus.php">Add Questions</a></li>
  <li><a href="addcat.php">Add Category</a></li>
  <li><a href="showqus.php">Show Questions</a></li>
  <li><a href="studentdetail.php">Show Student Details</a></li>
  <li style="float:right"><button ><a href="adminlogout.php">logout</a></button></li>
</ul>

</body>
</html>
