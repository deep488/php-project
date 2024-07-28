<?php
include("oopconn.php");
$qus=new  users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
//$_SESSION['cat']=$cat;
//print_r($qus->qus);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="process.php">
	<?php
	$i=1;
	 foreach ($qus->qus as $qust) { ?>
			<br><br>	
				
			<thead>
			  <tr>
				<th><?php echo "$i";?>  <?php echo $qust['questions'];?> <br> </th>
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr>
				<td><input type="radio" value="0" name="<?php echo $qust['id']; ?>" ><?php echo $qust['ans1'];?> </td>
			  </tr>
			<?php }?>
			<?php if(isset($qust['ans2'])){?>
			  <tr>
				<td><input type="radio" value="1" name="<?php echo $qust['id']; ?>" ><?php echo $qust['ans2'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr>
				<td><input type="radio" value="2" name="<?php echo $qust['id']; ?>"><?php echo $qust['ans3'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  	<tr>
				<td><input type="radio" value="3" name="<?php echo $qust['id']; ?>" ><?php echo $qust['ans4'];?></td>
			  </tr>
			  <?php }?>
			<tr>
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" ></td>
			  </tr><br>
			</tbody>
			
		  </table>
		<?php $i++;}?>
	<input type="submit" value="submit Quiz">
</form>
	
</body>
</html>