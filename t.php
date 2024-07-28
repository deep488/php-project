<?php
include'conn.php';
session_start();
$session_check=$_SESSION['$useremail'];
$ssss=$_GET['n'];

?>
<html>
	<head>
		<link rel="stylesheet"  type="text/css" href="css/style.css">
		<style>
			body{
				position: relative;
			}
			.middle{
				position:absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				text-align: center;
			}
		</style>
	</head>
    
<body>

<form method="POST" action="">
Email:  <input type="text" name="em" id="em" value="<?php echo "$session_check"?>"><br><br>
Marks:  <input type="text" name="mrk" id="mrk" value="<?php echo $ssss ?>"><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>


	<a href="logout.php">
	<input type="submit" name="logout" value="Logout" style="background-color:blue;color: white; height: 50px;width:100px; margin-top:30px; font-size: 18px;cursor: pointer;"></a>
	
	</div>

</body>
</html>