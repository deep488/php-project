<?php
session_start();
echo"WELCOME ".$_SESSION['$adminemail'];
?>
<?php
include'conn.php';
$session_check=$_SESSION['$adminemail'];
if ($session_check) 
{
	
}
else
{
	header('location:adminlogin.php');
}
?>

<?php
include'conn.php';
if(isset($_POST['submit']))
	{
		//$question_number=$_POST['qusno'];
		$question_text=$_POST['qus'];
		$choice_1=$_POST['choice1'];
		$choice_2=$_POST['choice2'];
		$choice_3=$_POST['choice3'];
		$choice_4=$_POST['choice4'];
		$correct_option=$_POST['correctoption'];
		$category_number=$_POST['cat'];
		$valid=true;


		if(empty($question_text))
		{
			$error_mess1="Question is Compulsory";
			
		}

		if(empty($correct_option))
		{
			$error_mess2="Compulsory";
			
		}

		if($question_text !="" && $correct_option !="")
		{


		$inssql="INSERT INTO qus(questions,ans1,ans2,ans3,ans4,correct,cat_id)VALUES('$question_text',
		'$choice_1','$choice_2','$choice_3','$choice_4','$correct_option','$category_number')";
		$res=mysqli_query($db_handle,$inssql);


			$message="Your question is added successfully";
		}

	}



			$selsql="SELECT * FROM qus";
			$questions=mysqli_query($db_handle,$selsql);
			$total=mysqli_num_rows($questions);
			$next=$total+1;

?>

<html>
	<head>
		<title> ADMIN PAGE </title>
		<link rel="stylesheet"  type="text/css" href="css/style.css">
	</head>
	<body>
		<div>
			<h1 style="color:purple;"> Now you can make questions !!!</h1>
			<div class="container">

				<?php
					if(isset($message))
					{
						echo$message;
					}
				?>

			<form method="POST" action="adminqus.php">
				<div class="outbx">
				<div class="input-bx">
					<label> QUESTION NUMBER: </label>
					<input type="number" name="qusno" value="<?php  echo $next; ?>" >
				
				</div class="input-bx">

				<div class="input-bx">
					<label>ADD QUESTIONS:</label>
					<input type="text" name="qus">
					<div class ="error"><?php if(isset($error_mess1)){ echo $error_mess1; } ?></div>
				</div>


				<div class="input-bx">
					<label>CHOICE NUMBER 1: </label>
					<input type="text" name="choice1">
				</div>

				<div class="input-bx">
					<label>CHOICE NUMBER 2: </label>
					<input type="text" name="choice2">
				</div>

				<div class="input-bx">
					<label>CHOICE NUMBER 3:</label>
					<input type="text" name="choice3">
				</div>

				<div class="input-bx">
					<label>CHOICE NUMBER 4:</label>
					<input type="text" name="choice4">
				</div>

				<div class="input-bx">
					<label>CORRECT OPTION NUMBER :</label>
					<input type="number" name="correctoption">
					<div class ="error"><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
				</div>

				<div class="input-bx">
					<label>CATEGORY NUMBER :</label>
					<input type="number" name="cat">
					<div class ="error"><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
				</div>
				</div>
				<input type="submit" name="submit" value="submit">
				<div><a href="adminhome.php"> Back To Home</a></div>
			</form>
		</div>
		</div>
	</body>
</html>