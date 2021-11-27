<?php

include('../config/settings.php');

?><!DOCTYPE html>
<html>
	<head>
		<?php include('../include/head.php'); ?>
		<link rel="stylesheet" href="">
		<title>Se connecter</title>
	</head>
	<body>
		<main>
			<section>
				<img src="" alt="">
			</section>
			<form method="POST" action="core/login.php">
				<p>
					<label for="pseudo">Votre identifiant</label>
					<input type="text" name="name" placeholder="" id="pseudo" required>
				</p>
				<p>
					<label for="pass">Votre mot de passe</label>
					<input type="password" name="password" placeholder="" id="pass" required>
				</p>
				<p>
					<button type="submit">Login</button>
				</p>
			</form>
		</main>
	</body>
</html>