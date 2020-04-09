<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['five'];
	if($a=="five"){
		header('Location:q3.php');
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
<h2>2.How many sides does pentagon have?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="four" name="five" value="four">
  <label for="four">Four</label><br>
  <input type="radio" id="five" name="five" value="five">
  <label for="five">Five</label><br>
  <input type="radio" id="seven" name="five" value="seven">
  <label for="seven">Seven</label><br>
  <input type="radio" id="two" name="five" value="two">
  <label for="two">Two</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>