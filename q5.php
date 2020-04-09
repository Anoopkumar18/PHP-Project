<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['twenty_six'];
	if($a=="twenty_six"){
		include('connect.php');
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
<h2>5.How many alphabets are there in english language?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="four" name="twenty_six" value="twenty_four">
  <label for="four">Twenty Four</label><br>
  
  <input type="radio" id="five" name="twenty_six" value="twenty_five">
  <label for="five">Twenty Five</label><br>
  
  <input type="radio" id="six" name="twenty_six" value="twenty_six">
  <label for="six">Twenty Six</label><br>
  
  <input type="radio" id="two" name="twenty_six" value="twenty_two">
  <label for="two">Twenty Two</label><br>
  
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>