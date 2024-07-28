<?php

include 'conn.php';
$id=$_GET['id'];
$query="DELETE FROM studentregist WHERE s_id='$id' ";
$data=mysqli_query($db_handle,$query);

if($data)
{
	echo"RECORD DELETED";
}
else
{
	echo"RECORD NOT DELETED";
}

?>