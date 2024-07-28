<?php
$db_server_name="localhost";
$db_username="root";
$db_password="";
$db_name="quizdb";

$db_handle=mysqli_connect($db_server_name,$db_username,$db_password,$db_name);

if($db_handle)
{
	echo"";
}
else
{
	echo"Your Database is not connected";
}

?>