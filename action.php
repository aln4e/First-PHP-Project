<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Thanks for signing up!</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class = "actionImage">
		<div class = "panel">
			<div class = "inputFields">
				Hi, your email is <?php echo htmlspecialchars($_POST['email']); ?>. <br>
				Your requested password is <?php echo htmlspecialchars($_POST['password']); ?>.
			</div>
		</div>
		<div class = "panel">
			<?php
				if (htmlspecialchars($_POST['email']) === '') {
					echo
					'<p class = "inputFields"> What\'s your email again? <br>
						Email:
						<input type = "email" name = "email">
					</p>';
				} else if (htmlspecialchars($_POST['password']) === '') {
					echo
					'<p class = "inputFields"> What password would you like? <br>
						Password:
						<input type = "password" name = "password">
					</p>';
				} else {
					echo
					'<p class = "inputFields">
						Favorite Food: <br>
						<select name = "food">
							<option value = "burgers">Burgers</option>
							<option value = "pizza">Pizza</option>
							<option value = "spaghetti">Spaghetti</option>
						</select>
					</p>';
				}
			?>
		</div>
	</body>
</html>
