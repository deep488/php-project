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
		$add_category=$_POST['addcategory'];
		$valid=true;


		if(empty($add_category))
		{
			$error_mess1="Category is Compulsory";
			
		}

		if($add_category !="")
		{


		$inssql="INSERT INTO category(cat_name)VALUES('$add_category')";
		$res=mysqli_query($db_handle,$inssql);


			$message="Your category is added successfully";
		}

	}

			$selsql="SELECT * FROM category";
			$questions=mysqli_query($db_handle,$selsql);
			$total=mysqli_num_rows($questions);
			$next=$total+1;

?>
<html>
	<head>
		<title> ADMIN PAGE FOR CATEGORY</title>
		<link rel="stylesheet"  type="text/css" href="css/style.css">
	</head>
	<body>
		<div>
			<h1 style="color:purple;"> Now you can add categories !!!</h1>
			<div class="container">


			<form method="POST" action="addcat.php">
				<div class="outbx">
				<div class="input-bx">
				<label> Category No: </label>
				<input type="number" name="catno" value="<?php  echo $next; ?>" >
				
				</div class="input-bx">

				<div class="input-bx">
					<label>ADD CATEGORYS:</label>
					<input type="text" name="addcategory">
					<div class ="error"><?php if(isset($error_mess1)){ echo $error_mess1; } ?></div>
				</div>
				</div>
				<input type="submit" name="submit" value="submit">
				<div><a href="adminqus.php"> Add Questions</a></div>
			</form>
		</div>
		</div>
	</body>
</html>
