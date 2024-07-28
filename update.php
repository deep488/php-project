<?php
include'conn.php';
$id = $_GET['id'];
//echo $mssg;
$fetch="SELECT * FROM studentregist WHERE s_id='$id'";
$re=mysqli_query($db_handle,$fetch);
$total=mysqli_num_rows($re);
$row=mysqli_fetch_assoc($re);


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
			<h2> Student Update Page </h2>
			<form method="POST" action="">
				<div class="input-bx">
					<label class ="label">Student Name</label>
					<input type="text" value="<?php echo $row['student_name']; ?>" name="sname" id="sname" class="input-css" > 
					
				</div>
				<div class="input-bx">
					<label class ="label">Email:</label>
					<input type="text" value="<?php echo $row['email']; ?>" name="semail" class="input-css"  placeholder="Please Enter Email">
				</div>
				<div class="input-bx">
					<label class ="label">Date of Birth:</label>
					<input type="date" value="<?php echo $row['dob']; ?>" name="sdob" class="input-css" id="sdob" placeholder="Please Enter Birth date">
				</div>
				<div class="input-bx">
					<label class ="label">Mobile No.:</label>
					<input type="number" value="<?php echo $row['mobile_no']; ?>" name="sno" class="input-css" id="sno">
				</div>

				<div class="input-bx">
					<label class ="label">Gender:</label>
					<div class="rd-col">
					<input type="radio" name="sgender" id="sgender" value="male" 
					required <?php if($row['gender']=="male"){ echo "checked"; } ?> > Male</label>
					</div>

					<div class="rd-col">
					<input type="radio" name="sgender" id="sgender" value="female"
					required <?php if($row['gender']=="female"){ echo "checked"; } ?> >Female</label>
					</div>
				</div>

				<div class="input-bx">
					<label class ="label">Password:</label>
					<input type="password" value="<?php echo $row['password']; ?>" name="spass" id="password" class="input-css" placeholder="Please Enter Password">
				</div>

				<input type="submit" name="Update" value="Update">
				<a href="studentdetail.php">STUDENT DETAILS</a>
			</form>	
		</div>
	</section>
</body>
</html>

<?php
include 'conn.php';
if($_POST['Update'])
	{
				 $username=$_POST["sname"];
				 $email=$_POST["semail"];
				 $dob=$_POST["sdob"];
				 $mobile_no=$_POST["sno"];
				 $gender=$_POST["sgender"];
				 $password=$_POST["spass"];
				
				$upd="UPDATE studentregist SET student_name='$username',email='$email',dob='$dob', mobile_no='$mobile_no',gender='$gender',password ='$password' WHERE s_id='$id'";
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