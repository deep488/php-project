<?php
session_start();
class users{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="quizdb";
	public $conn;
	public $data;
	public $cat;
	public $qus;
	
	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
			die ("database connection failed".$this->conn->connect_errno);
		}
	}
	
	
	public function cat_shows()
	{		
		$query=$this->conn->query("select * from category");
	   while($row=$query->fetch_array(MYSQLI_ASSOC))		
		{
			
			$this->cat[]=$row;
		}
		return $this->cat;
	
	}
	public function qus_show($qus)
	{
		//echo $qus;
		 $query=$this->conn->query("select * from qus where cat_id='$qus'");
	    while($row=$query->fetch_array(MYSQLI_ASSOC))		
		{			
			$this->qus[]=$row;
		}
		return $this->qus; 
	}
	public function answer($data)
	{
		 $ans=implode("",$data);
		 $right=0;
		 $wrong=0;
		 $no_answer=0;
		 $query=$this->conn->query("SELECT id,correct FROM qus WHERE cat_id='".$_SESSION['cat']."'");
	    while($qust=$query->fetch_array(MYSQLI_ASSOC))		
		{			
			if($qust['correct']==$_POST[$qust['id']])
			{
				 $right++;
			}
			elseif($_POST[$qust['id']]=="no_attempt")
			{
				 $no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;
		
	}
	
}


?>