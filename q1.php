<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['new_delhi'];
	if($a=="delhi"){
		header('Location:q2.php');
	}else{
		echo '<script>alert("You Lost!")</script>';
		//header('Location:q1.php');
	}
}
?>

<html>
<head>
</head>
<body>
<h2>1.What is the capital of india?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="delhi" name="new_delhi" value="delhi">
  <label for="delhi">New Delhi</label><br>
  <input type="radio" id="mumbai" name="new_delhi" value="mumbai">
  <label for="mumbai">Mumbai</label><br>
  <input type="radio" id="chd" name="new_delhi" value="chandigarh">
  <label for="chd">Chandigarh</label><br>
  <input type="radio" id="kolkata" name="new_delhi" value="kolkata">
  <label for="kolkata">Kolkata</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>