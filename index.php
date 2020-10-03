<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body style="background: #337ab7;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a style="color: #0f0f0f;" class="navbar-brand" href="https://selimrezaswadhin.com/">Selim Reza Swadhin</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Multiplication Table</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		
		<form method="POST" action="">
			<div class="form-inline">
				<label>Enter a number:</label>
				<input type="number" class="form-control" min="0" max="10" name="digit" required="required"/>
				<button class="btn btn-primary" name="calculate">Calculate</button>
			</div>
		</form>
		<br /><br />
		<?php include 'calculate.php'?>
	</div>
</body>
</html> 
