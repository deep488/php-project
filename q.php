<?php
include 'conn.php';
$cc= $_POST['cat'];
$query="SELECT * FROM qus WHERE cat_id='$cc'";
$runq=mysqli_query($db_handle,$query);
//$question = mysqli_fetch_assoc($runq); 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
	<?php
	while($r=mysqli_fetch_assoc($runq))
	{ 
		echo 
		"
		<tr>
		<td>".$r['questions']."</td>
		</tr> 
		";

	?>

	</table>

	<table>
	<li><input type="radio" class="rdop" name="choice" value="<?php echo $r['ans1']; ?>"><?php echo $r['ans1'];?></li>
	<li><input type="radio" class="rdop" name="choice" value="<?php echo $r['ans2']; ?>"><?php echo $r['ans2'];?></li>
	<li><input type="radio" class="rdop" name="choice" value="<?php echo $r['ans3']; ?>"><?php echo $r['ans3'];?></li>
	<li><input type="radio" class="rdop" name="choice" value="<?php echo $r['ans4']; ?>"><?php echo $r['ans4'];?></li>
	</table>
	<?php

		}

	?>
		
	
</body>
</html>
