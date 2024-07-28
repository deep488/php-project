<?php 
include'oopconn.php'; 
$ans=new users;
$answer=$ans->answer($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>

  <h2>Your Quiz results</h2>
  <table>
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>