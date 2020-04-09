<?php
session_start();
if(isset($_POST['btn']))
{   
    $errors=array();
	$a=$_POST['name'];
	$_SESSION['name']=$a;
	if(empty($a)==true)
	{
		$errors[]= "Name is required!";
	}
	else
	{
		if(ctype_alpha($a)==false)
		{
			$errors[]="Name must contain only letters";
		}
	}
	if(empty($errors)==true)
	{
		header('Location:q1.php');
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
    <button type="submit" class="btn btn-default" name="btn">Start Quiz</button>
  </form>
</div>

</body>
</html>
