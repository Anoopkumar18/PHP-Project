<?php
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
		echo "connected";
	}
	$sql1="CREATE TABLE register(name VARCHAR(30), email VARCHAR(30) NOT NULL,
	password VARCHAR(50),phone VARCHAR(30) NOT NULL)";
	if(mysqli_query($conn,$sql1))
	{
		echo "Table register created successfully<br>";
	}
	$j=$_POST['name'];
	$k=$_POST['email'];
	$l=$_POST['password'];
	$m=$_POST['phone'];
	$o=md5($l);
	$sql2="INSERT INTO register(name,email,password,phone)VALUES('$j','$k','$o','$m')";
	if(mysqli_query($conn,$sql2))
	{
		echo "inserted data successfully";
	}
	else
	{
		echo "not inserted";
	}
	header('Location:welcome.php');
?>
