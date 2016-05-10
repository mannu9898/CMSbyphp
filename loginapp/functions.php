<?php include "db.php";

$query = "SELECT * FROM users";
	
	$result = mysqli_query($connection,$query);
	
	If(!$result){
		
		die('Query failed' .mysqli_error());
		
	}
	
	
function create(){
	global $connection;
	if(isset($_POST['register']))	{
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	$username = mysqli_real_escape_string($connection ,$username);
	$password = mysqli_real_escape_string($connection, $username);	
	
	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	if($connection){
		echo "We are connected";
		}
	else 
		die("Database Connection Failed");
	
	
	
	$query = "INSERT INTO users(username,password) ";
	$query .="VALUES('$username','$password')";
	
	$result = mysqli_query($connection,$query);
	
	If(!$result){
		
		die('Query failed' .mysqli_error());
		
	}
	else 
		echo "<br>DATA CREATED";
	
}
}
	
function read(){
	
	
	global $connection;
	$query = "SELECT * FROM users";
	
	$result = mysqli_query($connection,$query);
	
	If(!$result){
		
		die('Query failed' .mysqli_error());
		
	}
}
	
	
	
	
function update(){
	
		
if(isset($_POST['register']))	{
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	
	
	$query  = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .="password = '$password' ";
	$query .="WHERE id = $id ";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		
		die('query failed !');
	}
	else 
		echo "Record Updated";

	}			
}


function delete(){
	
		if(isset($_POST['delete']))	{
	global $connection;
	$id = $_POST['id'];
	
	
	$query  = "DELETE FROM users ";
	$query .="WHERE id = $id ";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		
		die('query failed !');
	}	
	
	else echo "Record Deleted";

	}				
}


function showId(){
	
	global $connection,$result;
	while($row = mysqli_fetch_assoc($result))	{
		$id = $row['id'];	
		echo "<option value='$id'>$id</option>";
	}
}

	
?>