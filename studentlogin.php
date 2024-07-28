<?php
session_start();
?>
<?php
include'conn.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST["semail"];
		if(empty($email))
		{
			$error_mess = "Please don't let the Email field empty";
		}
		elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error_mess2 = "Please enter valid Email Id";
		}
		else
		{
			echo"";
		}
		//echo"<br>$email";

		$password=$_POST["spass"];
		if(empty($password))
		{
			$error_pass = "Please don't let the Password field empty";
		}
		elseif (!preg_match("/[a-zA-Z0-9]{6}/", $password))
		{
			$error_pass2= "Please enter valid Password";
		}
		else
		{
			echo"";
		}

		$selsql="SELECT email,password FROM studentregist WHERE email='$email' AND password='$password'";
		$res=mysqli_query($db_handle,$selsql);
		$re=mysqli_num_rows($res);
		if($re==0)
		{
			$error_not_valid_user ="Username or Password is wrong";
		}
		else
		{
			$_SESSION['$useremail']=$email;
			header('location:category.php');
		}
	}
?>
<html>
<head>
	<title> STUDENT LOGIN </title>
	<link rel="stylesheet"  type="text/css" href="css/style.css">

</head>
	<body>
		<section class="reg">
			<div class="container">
				<h2> Student Login Page </h2>
				<form method="POST" action="">
				<div class="input-bx">
					<label for="" class="label">Email</label>
					<input type="text" class="input-css" name="semail" id="semail" placeholder="Please Enter Email">
					<div class ="error"><?php if(isset($error_mess)){ echo $error_mess; } ?></div>
					<div class ="error" ><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
				</div>
				<div class="input-bx">
					<label for="" class="label">Password</label>
					<input type="password" class ="input-css" name="spass" id="password" placeholder="   Please Enter Password">
					<div class ="error"><?php if(isset($error_pass)){ echo $error_pass; } ?></div>
					<div class ="error"><?php if(isset($error_pass2)){ echo $error_pass2; } ?></div>
				</div>
				<div class ="error"><?php if(isset($error_not_valid_user)){ echo $error_not_valid_user; } ?></div>
				<input type="submit" name="login" value="Login">
				<div class="signup">New User?  <a href="studentregist.php">Register Here</a></div>
				<div class="signup">First Page? <a href="firstpage.php">First Page</a></div>
				</form>
			</div>
		</section>
	</body>
</html>