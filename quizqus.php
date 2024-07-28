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
	$number=$_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = '$number'";

	// Get the question
	$result = mysqli_query($db_handle,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = '$number'";
	$choices = mysqli_query($db_handle,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($db_handle,$query));
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
			<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
			<br><br>	
				<p class="question"><?php echo $number; ?>. <?php echo $question['question_text']; ?> </p>
				<form method="POST" action="process.php">
					<ul class="choicess">
						
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" class="rdop" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['coptions']; ?></li>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" class="btn-next" name="submit" value="Next">


				</form>
				

			</div>

	</main>
</body>
</html>
<?php
// no prblm in this page
?>