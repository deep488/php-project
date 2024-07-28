<?php

class users{

	public $cat;
	public $qus;


		private $connection;
		public function db_con()
	{
		$this->connection=mysqli_connect("localhost","root","","quizdb");
		if(mysqli_connect_error())
		{
			echo"not connected";
		}
		else
		{
			echo" connected";
		}
	}


		public function qus_show($qus)
			{
				//echo $qus;
				$query="SELECT * FROM qus WHERE cat_id='$qus'";
				while ($row=$query->mysqli_fetch_array(MYSQLI_ASSOC)) {
					$this->qus[]=$row;
				}
				return $this->qus;
			}
	
}

?>

<?php

$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
print_r($qus->qus);
?>