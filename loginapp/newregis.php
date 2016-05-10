<?php include "functions.php";  ?>
<?php create();	?>
<?php include "includes/header.php"	?>


	
	<div class="container">
	
		<div class="col-sm-10">
		   <h1 class ="text-center">Create</h1>
			
			<form action="newregis.php" method="post">
			
				<div class="form-group">
				<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				
				
				<div class="form-group">
				<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				
				<input class="btn btn-primary" type="submit" name="register" value="Register">
	 
			</form>
		</div>
		
<?php include "includes/footer.php"	?>
