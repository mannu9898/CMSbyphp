<?php include "db.php"; ?>
<?php include "functions.php";	?>
<?php delete();	?>	
<?php include "includes/header.php"; ?>
	<div class="container">
	
		<div class="col-sm-6">
		
			<h1 class="text-center">DELETION TABLE</h1>
		
		<form action="login_delete.php" method="post">
			
				
				<div class="form-group">
				
					<select name="id" id="">
				
<?php
	
	showId();		
		
	
?>								
					</select>
				
				</div>
				
				<input class="btn btn-primary" type="submit" name="delete" value="Delete">
	 
			</form>
		
		</div>
		
<?php include "includes/footer.php"	?>

