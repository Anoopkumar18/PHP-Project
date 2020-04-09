<?php
//session_start();
$servername="localhost";
	$username="root";
	$password="";
	$dbname="form";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		echo 'not connected';
	}
	else
	{
		//echo "connected";
	}
	$sql1="CREATE TABLE quiz(name VARCHAR(30))";
	if(mysqli_query($conn,$sql1))
	{
		//echo "Table quiz created successfully<br>";
	}
	if(isset($_SESSION['name'])){
		$j=$_SESSION['name'];
		$sql2="INSERT INTO quiz(name)VALUES('$j')";
	   if(mysqli_query($conn,$sql2))
	  {
		 //echo "inserted data successfully";
	  }
	  else
	 {
		echo "not inserted";
	 }
	}
	//header('Location:welcome.php');
?>
