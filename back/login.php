<?php

include('../config/settings.php');

?><!DOCTYPE html>
<html>
	<head>
<<<<<<< HEAD
		<link rel="stylesheet" href="../public/css/reset.css">
		<link rel="stylesheet" href="../public/css/style.css">
		<?php include('../include/head.php'); ?>
=======
		<?php include('../include/head.php'); ?>
		<link rel="stylesheet" href="">
>>>>>>> bd7d607928aa8cb22605660fd0f8c5fc87711101
		<title>Se connecter</title>
	</head>
	<body>
		<main>
			<section>
				<img src="" alt="">
			</section>
			<div class="login-form">
				<form id="login-form" method="POST" action="core/login.php">
				<h2>Connexion</h2>
					<p class="input">
						<input type="text" name="name" placeholder="Identifiant" id="pseudo" required>
					</p>
					<p class="input">
						<input type="password" name="password" placeholder="Mot de passe" id="pass" required>
					</p>
					<p class="input-submit">
						<button type="submit">Se connecter</button>
					</p>
				</form>
			</div>

		</main>
	</body>
</html>