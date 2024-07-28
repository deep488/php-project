<?php
session_start();
echo"WELCOME ".$_SESSION['$useremail'];
?>
<?php
include'conn.php';
$session_check=$_SESSION['$useremail'];
if ($session_check) 
{
	
}
else
{
	header('location:studentlogin.php');
}

$query="SELECT * FROM polity";
$total_ques=mysqli_num_rows(mysqli_query($db_handle,$query));
?>

<html>
	<head>
		<title> QUIZ WORLD </title>
	</head>
	<body align="center" style="background-color: orchid">

		<header>
		<div class="container">
			<p><h1 style="color:navy;"> WELCOME TO  QUIZ  WORLD !!!</h1></p>
		</div>
	    </header>
			<p style="color:green"><strong>Topic:</strong>Polity</p>
					<p style="color:darkgreen"><strong>Number of Questions:</strong><?php echo $total_ques; ?> </p>
					<p style="color:darkgreen"><strong>Total Marks:</strong> <?php echo $total_ques*1; ?> marks</p>
					<p style="color: darkgreen"><strong>Type:</strong> Multiple Choice Questions</p>
					<p style="color: darkgreen"><strong>Estimated Time:</strong> <?php echo $total_ques*1; ?> mins</p>
			<h2 style="color:red">Please start your polity quiz </h2>

			<a href="getpolityqus.php?n=1" ><input type="submit" name="Start Quiz" value="Start Quiz" style="width: 300px; height: 50px;border:none;background:deeppink;font-weight: 600;padding-left: 10px;"></a><br><br>
			<a href="category.php" class="start"><input type="submit" name="btcp" value="Back To Category Page" style="width: 300px; height: 50px;border:none;background:darkviolet;font-weight: 600;padding-left: 10px;"></a>
	</body>
</html>