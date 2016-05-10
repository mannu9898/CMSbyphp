<?php include "functions.php";	?>
<?php read(); ?>	
<?php include "includes/header.php" ?>
<div class="container">
	
	   <h1 class="text-center">Read</h1>
			<div class="col-sm-10">
		
		<?php
			while($row = mysqli_fetch_assoc($result))  {
		?>
				<pre> 
		
				<?php
					print_r($row);
				}	
				?>
				</pre>
		
			</div>
		
<?php include "includes/footer.php"	?>

