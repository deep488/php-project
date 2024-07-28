<?php
session_start();
echo"Hello!!!! ".$_SESSION['$useremail'];

?>
<?php
include'conn.php';
$session_check=$_SESSION['$useremail'];
if ($session_check) 
{
	
}
else
{
	header('location:studentlogin.php');
}

$c="SELECT * FROM category";
$csh=mysqli_query($db_handle,$c);
?>
<!DOCTYPE html>
<html>
<head>
	<title >CATEGORY</title>
</head>
<body align=center style="padding-top: 50px; background-color: coral">

	<h1 style="color:red ; padding-bottom: 10px;">WELCOME TO THE QUIZ WORLD!!</h1>
	<h2 style="color:brown;padding-bottom: 5px;">Test Yourself</h2>
	<h3 style="color: purple; padding-bottom: 30px;">Please Select Category of your choice!!</h3>
	<form method="POST" action="showoopqus.php">
	<select name="cat" id="cat">
		<?php while($r=mysqli_fetch_array($csh)) {?>
		<option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?></option>
	<?php } ?>
	</select><br><br>
    <a href="">
	<input type="submit" name="Submit" value="Submit" ></a>
	</form>
</body>
</html>