<?php
include'conn.php';

$fetch="SELECT * FROM adminlogin";
$re=mysqli_query($db_handle,$fetch);
$total=mysqli_num_rows($re);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
</head>
<body>
	<table border="1" width="80%" align=center style="margin-top: 80px;">
		<tr>
			<th width="10%">Admin Email</th>
			<th width="50%">Admin Email</th>
			<th width="40%">Password</th>
		</tr>

		<?php
		while($row=mysqli_fetch_array($re))
		{
			echo"<tr>
			<td>".$row['a_id']."</td>
			<td>".$row['adminemail']."</td>
			<td>".$row['password']."</td>
			<td><a href='adminupdate.php?id=$row[a_id]'><input type='submit' value='Update'></a>
			</tr>
			";
		}

		?>
	</table>
	<a href="admincategory.php"><input type="submit" name="Category" value="Category" style="width:300px; height: 50px;border:none;background: brown;font-weight: 600;padding-left: 10px; padding-left: 20px; margin-top: 60px; margin-left: 500px;"></a><br><br>
	<a href="adminlogout.php">
	<input type="submit" name="logout" value="Logout" style="background-color:blue;color: white; height: 50px;width:100px; margin-top:30px; font-size: 18px;cursor: pointer; margin-left: 600px;"></a>
</body>
</html>