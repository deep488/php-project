<?php
include'conn.php';
$id = $_GET['id'];
$fetch="SELECT * FROM adminlogin WHERE a_id='$id'";
$re=mysqli_query($db_handle,$fetch);
$total=mysqli_num_rows($re);
$row=mysqli_fetch_assoc($re);


?>
<!DOCTYPE html>
<html>
<head>
	<title> Update </title>
	<link rel="stylesheet"  type="text/css" href="css/style.css">
</head>
<body >
	<section class="reg">
		<div class="container">
			<h2> Admin Update Page </h2>
			<form method="POST" action="">
				
				<div class="input-bx">
					<label class ="label">Email:</label>
					<input type="text" value="<?php echo $row['adminemail']; ?>" name="aemail" class="input-css"  placeholder="Please Enter Email">
				</div>

				<div class="input-bx">
					<label class ="label">Password:</label>
					<input type="password" value="<?php echo $row['password']; ?>" name="apass" id="password" class="input-css" placeholder="Please Enter Password">
				</div>

				<input type="submit" name="update" value="Update">
				<a href="admindetail.php">ADMIN DETAILS</a>
			</form>	
		</div>
	</section>
</body>
</html>

<?php
include 'conn.php';
if($_POST['update'])
	{
				 $email=$_POST["aemail"];
				 $password=$_POST["apass"];
				
				$upd="UPDATE adminlogin SET adminemail='$email',password ='$password' WHERE a_id='$id'";
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
?>