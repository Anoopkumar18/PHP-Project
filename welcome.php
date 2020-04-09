<html>
<head>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['name'])){
	echo "Welcome, "." ". $_SESSION['name'];
} 
?>
<body>
</html>