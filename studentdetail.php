<?php
include'conn.php';

$fetch="SELECT * FROM studentregist";
$re=mysqli_query($db_handle,$fetch);
$total=mysqli_num_rows($re);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
	<table border="1" width="80%" align=center style="margin-top: 80px;">
		<tr>
			<th width="5%">Id</th>
			<th width="20%">Student Name</th>
			<th width="20%">Email</th>
			<th width="15%">D.O.B</th>
			<th width="15%">Mobile No</th>
			<th width="10%">Gender</th>
		</tr>

		<?php
		while($row=mysqli_fetch_array($re))
		{
			echo"<tr>
			<td>".$row['s_id']."</td>
			<td>".$row['student_name']."</td>
			<td>".$row['email']."</td>
			<td>".$row['dob']."</td>
			<td>".$row['mobile_no']."</td>
			<td>".$row['gender']."</td>
			<td><a href='update.php?id=$row[s_id]'><input type='submit' value='Update'></a>
			<a href='delete.php?id=$row[s_id]'><input type='submit' value='Delete'></a></td>
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