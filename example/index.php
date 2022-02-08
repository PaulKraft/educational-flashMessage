<?php
session_start();
include "components/flash.php";

flashMessage::set("info","New message");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<br>
				<a href="display.php">Go go go</a>
				<div class="alert alert-primary" role="alert">
				  A simple primary alert—check it out!
				</div>
				<div class="alert alert-secondary" role="alert">
				  A simple secondary alert—check it out!
				</div>
				<div class="alert alert-success" role="alert">
				  A simple success alert—check it out!
				</div>
				<div class="alert alert-danger" role="alert">
				  A simple danger alert—check it out!
				</div>
				<div class="alert alert-warning" role="alert">
				  A simple warning alert—check it out!
				</div>
				<div class="alert alert-info" role="alert">
				  A simple info alert—check it out!
				</div>
				<div class="alert alert-light" role="alert">
				  A simple light alert—check it out!
				</div>
				<div class="alert alert-dark" role="alert">
				  A simple dark alert—check it out!
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>