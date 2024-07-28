<?php
include'conn.php';
$id = $_GET['id'];
$fetch="SELECT * FROM qus WHERE id='$id'";
$re=mysqli_query($db_handle,$fetch);
$total=mysqli_num_rows($re);
$row=mysqli_fetch_assoc($re);


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

			<form method="POST" action="">
				<div class="outbx">
				<div class="input-bx">
					<label> QUESTION NUMBER: </label>
					<input type="number" name="qusno" value="<?php  echo $row['id']; ?>" >
				
				</div class="input-bx">

				<div class="input-bx">
					<label>ADD QUESTIONS:</label>
					<input type="text" name="qus" value="<?php echo $row['questions']; ?>">
					<div class ="error"><?php if(isset($error_mess1)){ echo $error_mess1; } ?></div>
				</div>


				<div class="input-bx">
					<label>CHOICE NUMBER 1: </label>
					<input type="text" name="choice1" value="<?php echo $row['ans1']; ?>">
				</div>

				<div class="input-bx">
					<label>CHOICE NUMBER 2: </label>
					<input type="text" name="choice2" value="<?php echo $row['ans2']; ?>">
				</div>

				<div class="input-bx">
					<label>CHOICE NUMBER 3:</label>
					<input type="text" name="choice3" value="<?php echo $row['ans3']; ?>">
				</div>

				<div class="input-bx">
					<label>CHOICE NUMBER 4:</label>
					<input type="text" name="choice4" value="<?php echo $row['ans4']; ?>">
				</div>

				<div class="input-bx">
					<label>CORRECT OPTION NUMBER :</label>
					<input type="number" name="correctoption" value="<?php echo $row['correct']; ?>">
					<div class ="error"><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
				</div>

				<div class="input-bx">
					<label>CATEGORY NUMBER :</label>
					<input type="number" name="cat" value="<?php echo $row['cat_id']; ?>">
					<div class ="error"><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
				</div>
				</div>
				<input type="submit" name="Update" value="Update">
				<div><a href="showqus.php"> Show Questions</a></div>
			</form>
		</div>
		</div>
	</body>
</html>

<?php
include 'conn.php';
if($_POST['Update'])
	{
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

				
		  $upd="UPDATE qus SET questions='$question_text',ans1='$choice_1',ans2='$choice_2',ans3='$choice_3',ans4='$choice_4',correct='$correct_option',cat_id='$category_number' WHERE id='$id'";
				$re=mysqli_query($db_handle,$upd);
				
				if($re)
				{
					echo"RECORD UPDATED";
				}
				else
				{
					echo"RECORD NOT UPDATED";
				}
		}
	}
?>