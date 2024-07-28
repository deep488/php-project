<?php
include'conn.php';
$view="SELECT * FROM qus";
$rn=mysqli_query($db_handle,$view);
?>
<html>
<body>
<table border="1" width="80%" align=center >
	<tr>
		<th>Qus no.</th>
		<th>Questions</th>
		<th>Option 1</th>
		<th>Option 2</th>
		<th>Option 3</th>
		<th>Option 4</th>
		<th>Correct Option</th>
		<th>Category Id</th>
	</tr>
	<?php
	while($r=mysqli_fetch_array($rn))
	{
		echo"
			<tr>
				<td>".$r['id']."</td>
				<td>".$r['questions']."</td>
				<td>".$r['ans1']."</td>
				<td>".$r['ans2']."</td>
				<td>".$r['ans3']."</td>
				<td>".$r['ans4']."</td>
				<td>".$r['correct']."</td>
				<td>".$r['cat_id']."</td>
				<td><a href='updatequs.php?id=$r[id]'><input type='submit' value='Update'></a>
				<td><a href='deletequs.php?id=$r[id]'><input type='submit' value='Delete'></a>
			</tr>
		";
	}
	?>
	<tr>
		
	</tr>
</table>
</body>
</html>
