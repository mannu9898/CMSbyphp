<html>
	<head>
		<title> Maths Functions </title>
	</head>
	
	<body>
		<h1>At Dog's Home Today</h1>
		<h2>Indexed Array</h2>
		
		<?php
			$fifo = array("Brown","quite","small","one-eyed");
			
			echo "<p>";
			for($i=0;$i<count($fifo);$i++)	{
			echo $fifo[$i]." ";
			}
			
			
			echo "</p><p>";
			while(list($key,$val)=each($fifo)){
				echo $val." ";
			}
			
			echo "</p>";
			
			
			$tmp = array_pop($fifo);
			echo "<p>Just popped :".$tmp."</p>";
			$tmp = array_reverse($fifo);
			echo "<p>First Element: $tmp[0]</p>";
			
		?>
			
			
			<h2>Associative Array</h2>

		<?php
			$array = array(
			
				"Pen1" => array(
			
					"name" =>"Abhi",
					"color" =>"Brown",
					"temperament"=>"quite"),
			
				"Pen2"=>array(
			
					"name"=>"Rover",
					"color"=>"white",
					"temperament"=>"noisy"),
				
				"Pen3"=>array(
					"name"=>"Patch",
					"color"=>"brown and white",
					"temperament"=>"friendly"));
					
					
		echo "</dl>";
		
		while(list($key,$val) = each($array)){
			
			echo "<dt>$key</dt><dl>";
			
			while(list($k,$v) = each($val)){
				echo "<dd>$v</dd>";
			}
			
			echo "</dl>";	
		}
		echo "</dl>";
		
		?>
		
	</body>
	
</html>
						
			
			