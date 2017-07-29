<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Thanks for signing up!</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class = "signUpImage">
		<div class = "panel">
			<div class = "inputFields">
				Hi, your email is <?php echo htmlspecialchars($_POST['email']); ?>. <br>
				Your requested password is <?php echo htmlspecialchars($_POST['password']); ?>.
			</div>
		</div>
	</body>
</html>
