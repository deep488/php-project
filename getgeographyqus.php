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
	<?php
	//Set Question Number
	$cc= $_POST['cat'];

	//Query for the Question
	$query="SELECT * FROM qus WHERE cat_id='$cc'";

	// Get the question
	$result = mysqli_query($db_handle,$query);


	$q="SELECT ans1,ans2,ans3,ans4 FROM qus WHERE cat_id='$cc'";

	// Get the question
	$res = mysqli_query($db_handle,$q);
	//$question = mysqli_fetch_assoc($result); 

	//Get Choices
	//$query = "SELECT * FROM ge_options WHERE question_number = '$number'";
	//$choices = mysqli_query($db_handle,$query);
	// Get Total questions
	//$query = "SELECT * FROM geography";
	//$total_questions = mysqli_num_rows(mysqli_query($db_handle,$query));

	while($row=mysqli_fetch_array($result)){
?>

			
			<div class="current"><?php echo $row['questions'] ?> </div>
			
<?php
 
}
 ?>
 				<?php
 				while($r=mysqli_fetch_array($res)){
				?>
			<div class="current"><input type="radio" name="ch" value="<?php ?>"><?php echo $r['ans1'] ?> </div>

				<?php
				}
 				?>
			
			<?php
 				while($r=mysqli_fetch_array($res)){
				?>
			<div class="current"><input type="radio" name="ch" value="<?php ?>"><?php echo $r['ans2'] ?> </div>

				<?php
				}
 				?>
				</form>
			

	</main>
</body>
</html>
