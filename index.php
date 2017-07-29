<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Project</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class = "homeBackgroundImage">
		<div class = "panel">
			<?php
				echo '<h1>Sign Up!</h1>';
			?>
			<!-- the action takes the method and redirects to a new route.
			types are standard html.
			names are important because they are essentially variables to reference in
			action.php. -->
			<form action = "action.php" method = "post">
				<p class = "inputFields"> Email: <br><input type = "email" name = "email" /> </p>
				<p class = "inputFields"> Password: <br><input type = "password" name = "password" /> </p>
				<p class = "inputFields"> <input type = "submit" name = "submit" /> </p>
			</form>
		</div>

	</body>
</html>
