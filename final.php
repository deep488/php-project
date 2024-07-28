<?php
include'conn.php';
$query="SELECT * FROM questions";
$count=mysqli_num_rows(mysqli_query($db_handle,$query));
session_start();
$session_check=$_SESSION['$useremail'];
$sc=$_SESSION['score']++;
if ($session_check) 
{
	
}
else
{
	header('location:studentlogin.php');
}


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
	<div class="middle">
	<h3 style="color:#333;"> Your Result </h3>
	<h2 style="color:green;font-size:24px;font-weight:400;"> Congratulation You Have Completed Your Test </h2>
	<h1 style="margin-top:20px;">Your Score Is <?php echo $sc; ?> Out Of <?php echo $count*1; ?> </h1>
	<h1 style="margin-top:20px;">Your Percentage Is <?php echo ($sc*100)/$count; ?> </h1>
	<?php
	if(($sc*100)/$count >30)
	{
		echo"<br>You Have Succesfully Passed your Quiz";
	}
	?>
	<?php unset($_SESSION['score']); ?>
<br><br>
	<a href="logout.php">
	<input type="submit" name="logout" value="Logout" style="background-color:blue;color: white; height: 50px;width:100px; margin-top:30px; font-size: 18px;cursor: pointer;"></a><br><br>
	<a href="category.php"><input type="submit" name="btcp" value="Back To Category Page" style="width: 300px; height: 50px;border:none;background:grey;font-weight: 600;padding-left: 10px;"></a>


	</div>

</body>
</html>