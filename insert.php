<?php
include'conn.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["sname"];
	$email=$_POST["semail"];
	$dob=$_POST["sdob"];
	$mob=$_POST["sno"];
	$gender=$_POST["sgender"];
	$password=$_POST["spass"];



$inssql="INSERT INTO studentregist (student_name,email,dob,mobile_no,gender,password) VALUES('$name','$email','$dob','$mob','$gender','$password')";
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

?>