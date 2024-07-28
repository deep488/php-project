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
		$question_number=$_POST['qusno'];
		$question_text=$_POST['qus'];
		$correct_option=$_POST['correctoption'];
		$valid=true;


		if(empty($question_text))
		{
			$error_mess1="Question is Compulsory";
			
		}

		if(empty($correct_option))
		{
			$error_mess2="Compulsory";
			
		}

		$choice=array();
		$choice[1]=$_POST['choice1'];
		$choice[2]=$_POST['choice2'];
		$choice[3]=$_POST['choice3'];
		$choice[4]=$_POST['choice4'];

		if($question_text !="" && $correct_option !="")
		{


		$inssql="INSERT INTO geography(question_number,question_text)VALUES('$question_number','$question_text')";
		$res=mysqli_query($db_handle,$inssql);


		//validation in 1st query

		//no prblm on this page

		if($res)
		{
			foreach($choice as $option => $value)
			{
				if($value!="")
				{
					if($correct_option==$option)
					{
						$is_correct=1;
					}
					else
					{
						$is_correct=0;
					}


		// validation in 2nd query

		$insrtsql="INSERT INTO ge_options(question_number,is_correct,goption)VALUES('$question_number','$is_correct','$value')";	
		$result=mysqli_query($db_handle,$insrtsql);

		//validate options

						if($result)
							{
								continue;
							}		
								else
							{
								echo"2nd query of your choice is not executed";
							}
								

				}
		
			}

			$message="Your question is added successfully";
		}

	}

	}

			$selsql="SELECT * FROM geography";
			$questions=mysqli_query($db_handle,$selsql);
			$total=mysqli_num_rows($questions);
			$next=$total+1;

?>

<html>
	<head>
		<title> Make Geography Questions </title>
		<link rel="stylesheet"  type="text/css" href="css/style.css">
	</head>
	<body>
		<div>
			<h1 style="color:purple;"> Now you can make geography questions !!!</h1>
			<div class="container">

				<?php
					if(isset($message))
					{
						echo$message;
					}
				?>

			<form method="POST" action="geoadminpage.php">
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
				</div>
				<input type="submit" name="submit" value="submit">
				<div><a href="studentdetail.php"> Student Details</a></div>
				<div><a href="admindetail.php"> Admin Details</a></div>
				<a href="admincategory.php" class="start">Back To Category Page</a> <br>
				<a href="adminlogout.php">LogOut</a>
			</form>
		</div>
		</div>
	</body>
</html>