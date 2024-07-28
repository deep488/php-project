<?php 
include 'conn.php'; 
?>
<?php 
session_start(); 

	$session_check=$_SESSION['$useremail'];
	if ($session_check) 
	{
		
	}
	else
	{
		header('location:studentlogin.php');
	}
 
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

 	if($_POST){
		//We need total question in process file 
	 	$query = "SELECT * FROM polity";
		$total_questions = mysqli_num_rows(mysqli_query($db_handle,$query));
		
		//We need to capture the question number from where form was submitted
	 	$number = $_POST['number'];
		
		//Here we are storing the selected option by user
	 	$selected_choice = $_POST['choice'];
		
		//What will be the next question number
	 	$next = $number+1;
		
		//Determine the correct choice for current question
	 	$query = "SELECT * FROM po_options WHERE question_number = $number AND is_correct = 1";
	 	 $result = mysqli_query($db_handle,$query);
	 	 $row = mysqli_fetch_assoc($result);

	 	 $correct_choice = $row['id'];
	
		//Increase the score if selected cohice is correct
 	 if($selected_choice == $correct_choice){
 	 	$_SESSION['score']++;
 	 	
	 	} 	
		//Redirect to next question or final score page. 
 	 if($number == $total_questions)
 	 {
 	 	header('location:final3.php');
 	 }
 	 else
 	 {
 	 	header('location:getpolityqus.php?n='.$next);
 	 }

 }



?>