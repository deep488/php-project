<?php
include 'conn.php';
if(isset($_POST['submit']))
	{
				 $username=$_POST["sname"];
				 $email=$_POST["semail"];
				 $dob=$_POST["sdob"];
				 $mobile_no=$_POST["sno"];
				 $gender=$_POST["sgender"];
				 $password=$_POST["spass"];
				 $valid=true;

				 if(empty($username))
				{
					$error_mess1="Name is Compulsory";
					
				}


					elseif(!preg_match("/[a-zA-Z]/",$username))
				{
					$error_mess5= "Invalid name";
					$valid=false;
				}
			
				else
				{
					echo"Registered ";
				}

				if(empty($email))
				{
					$error_mess2="Email is compulsory";
				}

				elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
				{
					$error_mess6="Invalid email";
					$valid=false;
				}
				else
				{
					//echo"student email field is filled ";
				}

				if(empty($dob))
				{
					$error_mess9="DOB is compulsory";
					
				}

				if(empty($mobile_no))
				{
					$error_mess3="Mobile no. compulsory";
				}

				elseif(!preg_match("/[0-9]{10}/",$mobile_no))
				{
					$error_mess7="Invalid no";
					$valid = false;
				}

				else
				{
					echo" ";
				}

				if(empty($gender))
				{
					$error_mess10="Selecting Gender is compulsory";
					
				}

				if(empty($password))
				{
					$error_mess4="Password compulsory";
				}

				elseif(!preg_match("/[a-z0-9]{5}/", $password))
				{
					$error_mess8="Invalid password";
					$valid=false;
				}

				else
				{
					echo" ";
				}



		if($username !="" && (preg_match("/[a-zA-Z]/",$username)) && $email !="" && (filter_var($email,FILTER_VALIDATE_EMAIL)) && $dob !="" && $mobile_no !="" && (preg_match("/[0-9]{10}/",$mobile_no)) && 
			$gender !="" && $password !="" && (preg_match("/[a-z0-9]{5}/", $password)))
		{
     		$inssql="INSERT INTO studentregist (student_name,email,dob,mobile_no,gender,password) VALUES('$username','$email','$dob','$mobile_no','$gender','$password')";

				$res=mysqli_query($db_handle,$inssql);
		
					if($res)
							{
								echo"Values are Inserted";
								
							}
						else
							{
								echo"Values are not Inserted";
							}
							
		}
				
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> STUDENT REGISTRATION </title>
	<link rel="stylesheet"  type="text/css" href="css/style.css">
</head>
<body >
	<section class="reg">
		<div class="container">
			<h2> Student Registration Page </h2>
			<form method="POST" action="studentregist.php">
				<div class="input-bx">
					<label class ="label">Student Name</label>
					<input type="text" name="sname" id="sname" class="input-css" placeholder="  Please Enter Name"> 
					<div class ="error"><?php if(isset($error_mess1)){ echo $error_mess1; } ?></div>
					<div class ="error"><?php if(isset($error_mess5)){ echo $error_mess5; } ?></div>
				</div>
				<div class="input-bx">
					<label class ="label">Email:</label>
					<input type="text" name="semail" class="input-css" id="semail" placeholder="Please Enter Email">
					<div class ="error"><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
					<div class ="error"><?php if(isset($error_mess6)){ echo $error_mess6; } ?></div>
				</div>
				<div class="input-bx">
					<label class ="label">Date of Birth:</label>
					<input type="date" name="sdob" class="input-css" id="sdob" placeholder="Please Enter Birth date">
					<div class ="error"><?php if(isset($error_mess9)){ echo $error_mess9; } ?></div>
				</div>
				<div class="input-bx">
					<label class ="label">Mobile No.:</label>
					<input type="number" name="sno" class="input-css" id="sno" placeholder="  Please Enter Mobile No.">
					<div class ="error"><?php if(isset($error_mess3)){ echo $error_mess3; } ?></div>
					<div class ="error"><?php if(isset($error_mess7)){ echo $error_mess7; } ?></div>
				</div>

				<div class="input-bx">
					<label class ="label">Gender:</label>
					<div class="rd-col">
					<input type="radio" name="sgender" id="sgender" value="male" checked>Male</label>
					</div>

					<div class="rd-col">
					<input type="radio" name="sgender" id="sgender" value="female">Female</label>
					</div>
				</div>

				<div class ="error"><?php if(isset($error_mess10)){ echo $error_mess10; } ?></div>

				<div class="input-bx">
					<label class ="label">Password:</label>
					<input type="password" name="spass" id="password" class="input-css" placeholder="Please Enter Password">
					<div class ="error"><?php if(isset($error_mess4)){ echo $error_mess4; } ?></div>
					<div class ="error"><?php if(isset($error_mess8)){ echo $error_mess8; } ?></div>
				</div>

				<input type="submit" name="submit" value="submit">
				<div class="signup">Already Registered? <a href="studentlogin.php">Login Page</a></div>
				

			</form>	
		</div>
	</section>
</body>
</html>

