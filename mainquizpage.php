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

$query="SELECT * FROM questions";
$total_ques=mysqli_num_rows(mysqli_query($db_handle,$query));

?>

<html>
	<head>
		<title> QUIZ WORLD </title>
	</head>
	<body align="center" style="background-color: turquoise">
		<header>
		<div class="container">
			<p><h1 style="color:purple;"> WELCOME TO  QUIZ  WORLD !!!</h1></p>
		</div>
	    </header>
					<p style="color:white"><strong>Topic:</strong>Polity</p>
					<p style="color:white"><strong>Number of Questions:</strong><?php echo $total_ques; ?></p>
					<p style="color:white"><strong>Total Marks:</strong><?php echo $total_ques*1; ?> marks</p>
					<p style="color:white"><strong>Type:</strong> Multiple Choice Questions</p>
					<p style="color:white"><strong>Estimated Time:</strong><?php echo $total_ques*1; ?> mins</p>
			<h2 style="color:royalblue">Please Start Your General Quiz </h2>
			<a href="quizqus.php?n=1" ><input type="submit" name="Start Quiz" value="Start Quiz" style="width: 300px; height: 50px;border:none;background:grey;font-weight: 600;padding-left: 10px;"></a><br><br>
			<a href="category.php" ><input type="submit" name="btcp" value="Back To Category Page" style="width: 300px; height: 50px;border:none;background:silver;font-weight: 600;padding-left: 10px;"></a>
	</body>
</html>