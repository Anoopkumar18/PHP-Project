<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['twenty_four'];
	if($a=="twenty_four"){
		header('Location:q4.php');
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
<h2>3.How many spokes are present in the wheel on indian flag?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="four" name="twenty_four" value="twenty_four">
  <label for="four">Twenty Four</label><br>
  
  <input type="radio" id="five" name="twenty_four" value="twenty_five">
  <label for="five">Twenty Five</label><br>
  
  <input type="radio" id="seven" name="twenty_four" value="twenty_seven">
  <label for="seven">Twenty Seven</label><br>
  
  <input type="radio" id="two" name="twenty_four" value="twenty_two">
  <label for="two">Twenty Two</label><br>
  
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>