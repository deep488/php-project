<?php
include'conn.php';
session_start(); 

$session_check=$_SESSION['$useremail'];
	if ($session_check) 
	{
		
	}
	else
	{
		header('location:studentlogin.php');
	}

	//Set Question Number
	$cc = $_POST['cat'];

	//Query for the Question
	$query = "SELECT * FROM qus WHERE cat_id='$cc'";

	// Get the question no
	$query2 = "SELECT id FROM qus WHERE cat_id='$cc'";

	// Get the question
	$result = mysqli_query($db_handle,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	//$query = "SELECT * FROM po_options WHERE question_number = '$number'";
	//$choices = mysqli_query($db_handle,$query);
	// Get Total questions
	//$query = "SELECT * FROM polity";
	//$total_questions = mysqli_num_rows(mysqli_query($db_handle,$query));
?>

<html>
<head>

	<title>Questions</title>
	<link rel="stylesheet"  type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h3>PHP Quizer</h3>
		
	</header>

	<main>
			<div class="qpage">
			<div class="current"> </div>
			<br><br>	
				<p class="question"> <?php echo $question['questions']; ?> </p>
				<form method="POST" action="geoprocess.php">
					<ul class="choicess">
						
						<li><input type="radio" class="rdop" name="choice" value="<?php echo $question['ans1']; ?>"><?php echo $question['ans1'];?></</li>
						<li><input type="radio" class="rdop" name="choice" value="<?php echo $question['ans2']; ?>"><?php echo $question['ans2'];?></</li>
						<li><input type="radio" class="rdop" name="choice" value="<?php echo $question['ans3']; ?>"><?php echo $question['ans3'];?></</li>
						<li><input type="radio" class="rdop" name="choice" value="<?php echo $question['ans4']; ?>"><?php echo $question['ans4'];?></</li>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $cc; ?>">
					<input type="hidden" name="number" value="<?php echo $no; ?>">
					<input type="submit" class="btn-next" name="submit" value="Next">


				</form>
				

			</div>

	</main>
</body>
</html>
