<?php

$connection = mysqli_connect('localhost','root','','loginapp');

if(isset($_POST['submit']))  {

$username = $_POST['username'];
$password = $_POST['password'];






	
		if($connection){
			
		echo "WE are connected";

		}
		
		else{
			
			die("Connection Failed!");
		}


		
		
/*	$query = "SELECT username,password FROM users";
	$result = mysqli_query($connection,$query);
		
		
	while($row=mysqli_fetch_row($result))	
	{
		
		if($row['username']==$username && $row['password'] ==$password){
			
			echo "Congrats Matched";
			echo "USER-NAME  =  ".$username."<br>";
			echo "PASSWORD  =  ".$password."<br>";
			$count=1;
		}
		
		
	}
	
	

		if($count!=1)
		{
			echo "Didn't matched";
		}
		
		*/
		
}



?>
	