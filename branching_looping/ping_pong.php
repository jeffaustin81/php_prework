<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Ping-Pong</title>
</head>
<body>
	<div class="container">
	<h1>Ping-Pong</h1>
	<?php
		$input = $_GET["input"];
		for ($x = 1; $x <= $input; $x++) {
			if ($x % 3 == 0 && $x % 5 == 0) {
				echo "<h3>" . "Ping-Pong" . "</h3>";
			}
			elseif ($x % 3 == 0) {
				echo "<h3>" . "Ping" . "</h3>";
			}
			elseif ($x % 5 == 0) {
				echo "<h3>" . "Pong" . "</h3>";
			}
			else {
				echo "<h3>" . "$x" . "</h3>";
			}
		} 
	?>
	</div>	
</body>
</html>



            
