<?php
session_start();
?>
<?php
include'conn.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST["aemail"];
		if(empty($email))
		{
			$error_mess="Please don't let the Admin's Email field empty";
		}
		elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error_mess2="Please enter valid Admin Email Id";
		}
		else
		{
			echo"";
		}

		$password=$_POST["apass"];
		if(empty($password))
		{
			$error_mess3="Please don't let the Password field empty";
		}
		elseif (!preg_match("/[a-zA-Z0-9]{8}/", $password))
		{
			$error_mess4="Please enter valid Password";
		}
		else
		{
			echo"";
		}

		$selsql="SELECT adminemail,password FROM adminlogin WHERE adminemail='$email' AND password='$password'";
		$res=mysqli_query($db_handle,$selsql);
		$re=mysqli_num_rows($res);
		if($re==0)
		{
			$error_not_valid_user ="AdminEmail or Password is wrong";
		}
		else
		{
			$_SESSION['$adminemail']=$email;
			header('location:adminhome.php');
		}
	}
?>
<html>
<head>
	<title> ADMIN LOGIN </title>
	<link rel="stylesheet"  type="text/css" href="css/style.css">
</head>
	<body>
	<section class="reg">
			<div class="container">
	<h2> Admin Login Page </h2><br>

			<form method="POST" action="">

			<div class="input-bx">
				<label class="label" for="aemail">AdminEmail:</label>
				<input class="input-css" type="text" name="aemail" id="aemail" placeholder="Please Enter Admin's Email">
				<div class ="error"><?php if(isset($error_mess)){ echo $error_mess; } ?></div>
				<div class ="error" ><?php if(isset($error_mess2)){ echo $error_mess2; } ?></div>
			 	</div>
			 	<div class="input-bx">
				<label for="" class="label">Password:</label>
				<input class="input-css" type="password" name="apass" id="password" placeholder="Please Enter Admin's Password">
				<div class ="error"><?php if(isset($error_mess3)){ echo $error_mess3; } ?></div>
				<div class ="error"><?php if(isset($error_mess4)){ echo $error_mess4; } ?></div>
			</div>
				<input type="submit" name="login" value="Admin Login">
			</form>	
			<a href='firstpage.php'><input type="submit" name="first" value="First Page" style="width: 300px; height: 40px;border:none;background:brown;font-weight: 600;padding: 10px;margin-top: 10px; color: white;"></a>
		</div>
	</section>
	</body>
</html>