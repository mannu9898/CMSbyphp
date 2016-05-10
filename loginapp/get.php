<?php
if(isset($_GET['submit'])){
$id=$_GET['id'];
echo $id;
}

$name = "Aisehi";
$value = rand(20,100);
$exp = time() + (60*60*24*365);


$cook =	setcookie($name,$value,$exp);


session_start();
$_SESSION['greeting']="hey this is under session";
echo $_SESSION['greeting'];


?>

<html>
	
	<head>
		<title>What's New </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	</head>
	
	<div class="container">
		<div class=col-sm-10>
			<form action ="get.php" method ="GET">
				<input type ="text" name ="id" placeholder="Enter the value">
				<input type = "submit" name = "submit" class="form-control">
				
		</div>
	</div>
	
<?php

if(isset($cook)){
	echo $name;
}

?>	
	
</html>