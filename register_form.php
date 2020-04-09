<?php
session_start();
if(isset($_POST['btn']))
{   
    $errors=array();
	$a=$_POST['name'];
	$_SESSION['name']=$a;
	$b=$_POST['email'];
	$c=$_POST['password'];
	$e=md5($c);
	$d=$_POST['phone'];
	if(empty($a)==true || empty($b)==true || empty($c)==true || empty($d)==true)
	{
		$errors[]= "Name, Email ,Password , Phone is required!";
	}
	else
	{
		if(filter_var($b,FILTER_VALIDATE_EMAIL)==false)
		{
			$errors[]="That is not valid email address";
		}
		if(ctype_alpha($a)==false)
		{
			$errors[]="Name must contain only letters";
		}
		if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$c))
		{
			$errors[]='Password must contain atleast 1 number and 1 letter or any from these characters!@#$%';
		}
		if(!preg_match('/^[0-9]{10}+$/', $d))
		{
			$errors[]='That is not valid Mobile Number';
		}
	}
	if(empty($errors)==true)
	{
		include('connects.php');
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registeration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 style="text-align:center;">Registeration Form</h2>
  <?php
  if(empty($errors)==false)
  {
	  echo '<ul style="color:red;">';
	  foreach($errors as $error)
	  {
		  echo '<li>',$error,'</li>';
	  }
	  echo '</ul>';
  }
  ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
	  <?php if(isset($_POST['name'])==true){echo 'value="',$_POST['name'] ,'"';}?>>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"
	  <?php if(isset($_POST['email'])==true){echo 'value="',$_POST['email'] ,'"';}?>>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"
	  <?php if(isset($_POST['password'])==true){echo 'value="',$_POST['password'] ,'"';}?>>
    </div>
	<div class="form-group">
      <label for="phone Number">Phone No.:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone"
	  <?php if(isset($_POST['phone'])==true){echo 'value="',$_POST['phone'] ,'"';}?>>
    </div>
    <button type="submit" class="btn btn-default" name="btn">Register</button>
  </form>
</div>

</body>
</html>
